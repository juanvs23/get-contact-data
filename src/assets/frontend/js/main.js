const requestForm = document.querySelectorAll('.coltman_get_contact_form');


document.addEventListener('DOMContentLoaded', () => {

    requestForm.forEach(form => {
        const inputs = form.querySelectorAll('.form-data');
        inputs.forEach(input => {
            input.addEventListener('change', event => {
                input.classList.remove('is-invalid');
            })
        })
        form.addEventListener('submit', event => {
            event.preventDefault();
            const url = ajax_object.ajax_url;
            const errors = [];
            console.log(url);
            const formData = new FormData();
            inputs.forEach(input => {
               console.log(input.name,input.value);
                if (input.value.length < 1 || input.value === '') {
                    input.classList.add('is-invalid');
                    errors.push(input.name);
                }
                if (input.type=== 'email') {
                const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    if (!re.test(String(input.value).toLowerCase())) {
                        input.classList.add('is-invalid');
                        errors.push(input.name);
                    }
                }
                if (errors.length > 0) {
                    return;
                }
               formData.append(input.name, input.value);
            })

            if (errors.length > 0) {
                return;
            }
            document.querySelector('#loader').classList.remove('d-none');
            fetch(url, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(response => {
                document.querySelector('#loader').classList.add('d-none');
                if (response.error) {
                    //  document.querySelector('#alert-success .alert-message').innerHTML = response.message;
                   document.querySelector('#alert-success').classList.remove('d-none');
                   document.querySelector('#alert-success').classList.add('alert-danger');
                   document.querySelector('#alert-success .alert-message').innerHTML = response.message;

                }
                if (response.success) {
                  document.querySelector('#alert-success .alert-message').innerHTML = response.message;
                  document.querySelector('#alert-success').classList.add('alert-success');
                   document.querySelector('#alert-success').classList.remove('d-none');
                }
            }).catch(error => {
                console.log(error);
            })
            .finally(() => {
                setTimeout(() => {
                    document.querySelector('#alert-success').classList.add('d-none');       
            },5000)
                form.reset();
            })

        })
    })
})
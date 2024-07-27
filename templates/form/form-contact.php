<?php
$atts = get_query_var('atts');

    $title = $atts['title'];
    $name_title = $atts['name_title'];
    $phone_title = $atts['phone_title'];
    $email_title = $atts['email_title'];
    $message_title = $atts['message_title'];
    $submit =  $atts['submit'];
    $message = $atts['message'];
    $sub_content= $atts['sub_content'];
    $sub_message = $atts['sub_message'];
    $action = 'get_contact_form';
    $nonce = wp_create_nonce($action);

?>

<div class="container contact-form">
    <div class="row">
            <div class="col-12 col-md-6">
                 <div class="contact-image mx-auto mb-5 d-flex justify-content-center align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" fill="currentColor" class="bi bi-rocket-takeoff" viewBox="0 0 16 16">
  <path d="M9.752 6.193c.599.6 1.73.437 2.528-.362s.96-1.932.362-2.531c-.599-.6-1.73-.438-2.528.361-.798.8-.96 1.933-.362 2.532"/>
  <path d="M15.811 3.312c-.363 1.534-1.334 3.626-3.64 6.218l-.24 2.408a2.56 2.56 0 0 1-.732 1.526L8.817 15.85a.51.51 0 0 1-.867-.434l.27-1.899c.04-.28-.013-.593-.131-.956a9 9 0 0 0-.249-.657l-.082-.202c-.815-.197-1.578-.662-2.191-1.277-.614-.615-1.079-1.379-1.275-2.195l-.203-.083a10 10 0 0 0-.655-.248c-.363-.119-.675-.172-.955-.132l-1.896.27A.51.51 0 0 1 .15 7.17l2.382-2.386c.41-.41.947-.67 1.524-.734h.006l2.4-.238C9.005 1.55 11.087.582 12.623.208c.89-.217 1.59-.232 2.08-.188.244.023.435.06.57.093q.1.026.16.045c.184.06.279.13.351.295l.029.073a3.5 3.5 0 0 1 .157.721c.055.485.051 1.178-.159 2.065m-4.828 7.475.04-.04-.107 1.081a1.54 1.54 0 0 1-.44.913l-1.298 1.3.054-.38c.072-.506-.034-.993-.172-1.418a9 9 0 0 0-.164-.45c.738-.065 1.462-.38 2.087-1.006M5.205 5c-.625.626-.94 1.351-1.004 2.09a9 9 0 0 0-.45-.164c-.424-.138-.91-.244-1.416-.172l-.38.054 1.3-1.3c.245-.246.566-.401.91-.44l1.08-.107zm9.406-3.961c-.38-.034-.967-.027-1.746.163-1.558.38-3.917 1.496-6.937 4.521-.62.62-.799 1.34-.687 2.051.107.676.483 1.362 1.048 1.928.564.565 1.25.941 1.924 1.049.71.112 1.429-.067 2.048-.688 3.079-3.083 4.192-5.444 4.556-6.987.183-.771.18-1.345.138-1.713a3 3 0 0 0-.045-.283 3 3 0 0 0-.3-.041Z"/>
  <path d="M7.009 12.139a7.6 7.6 0 0 1-1.804-1.352A7.6 7.6 0 0 1 3.794 8.86c-1.102.992-1.965 5.054-1.839 5.18.125.126 3.936-.896 5.054-1.902Z"/>
</svg>
            </div>
            <h2 class="title mb-3 display-3 text-center"> <?php echo $title; ?> </h2>
            <div class="mb-3 display-5 text-center"> <?php echo $sub_message; ?> </div>
            
           </div>
           <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
           <form method="post" class="col coltman_get_contact_form needs-validation " novalidate>
                <input type="hidden" class="form-data" name="action" value="<?php echo $action; ?>">
                <input type="hidden" class="form-data" name="nonce" value="<?php echo $nonce; ?>">
                <div class="row">
                     <div class="col-12">
                         <div class="form-group mb-2">
                             <input type="text" name="contact-name" class="form-control form-data" placeholder="<?php echo $name_title;?> *" value="" />
                             <div class="valid-feedback">
                                Looks good!
                            </div>
                         </div>
                         <div class="form-group mb-2">
                             <input type="email" name="contact-email" class="form-control form-data" placeholder="<?php echo $email_title; ?> *" value="" />
                         </div>
                         <div class="form-group mb-2">
                             <input type="text" name="contact-phone" class="form-control form-data" placeholder="<?php echo $phone_title; ?> *" value="" />
                         </div>
                         <div class="form-group mb-2">
                             <textarea name="contact-message" class="form-control form-data" placeholder="<?php echo $message_title; ?> *" style="width: 100%; height: 150px;"></textarea>
                         </div>
                         <div class="form-group pt-4 mb-4 d-flex align-items-center">
                             <button type="submit"  name="btnSubmit" class="btnSubmit btn btn-primary gap-2 flex align-items-center mx-auto">
                                 <?php echo $submit; ?>
                                 <span id="loader" class="spinner-border spinner-border-sm d-none" aria-hidden="true"></span>
                            </button>
                         </div>
                     </div>
                     <div class="col-col-12">
                        <div id="alert-success" class="alert alert-success d-flex gap-2 justify-content-center d-none" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
</svg>
                            <div class="alert-message">
                                <?php echo $message; ?>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                     </div>
                 </div>
             </form>
           </div>
    </div>
</div>
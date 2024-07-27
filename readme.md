# Plugin Get contact
<hr>
<h3>Plugin desarrollado para la captura de datos mediante un formulario</h3>

- [Plugin Get contact](#plugin-get-contact)
  - [Características del servidor {#servidor}](#características-del-servidor-servidor)
  - [Acerca del plugin {#tema}](#acerca-del-plugin-tema)


## Características del servidor {#servidor}
1. El sitio fue desarrollado con el entorno de desarrollo **WP LOCAL**.
2. El servidor instalado para este proyecto es un servidor **NGINX**.
3. La versión de PHP es **8.3.8**
4. La base de datos es **Maria DB, versión 10.4.38**
5. La versión de WordPress es **6.6.1**



## Acerca del plugin {#tema}
El plugin esta desarrollado desde cero, utilizando bootstrap 5 y laravel mix para los estilos del frontend. El plugin solo utiliza herramientas propias del core de WordPress para la captura de los datos. Se desarrollo un Custom post type configurado para solo guardar los campos especificado y ser excluido de las búsquedas internas del WordPress. el Plugin permite  override en la carpeta propia del tema bajo la siguiente estructura.

"/themes/thema/coltman-get-contact/templates/"
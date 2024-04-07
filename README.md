Sistema de Gestión de Usuarios en PHP
Este es un simple sistema de gestión de usuarios desarrollado en PHP que sigue la metodología CRUD (Crear, Leer, Actualizar, Eliminar). El propósito principal de este proyecto es demostrar cómo implementar operaciones básicas de base de datos utilizando PHP y MySQL.

Características
Crear nuevos usuarios con información básica como nombre, correo electrónico, y contraseña.
Leer y mostrar información detallada de los usuarios existentes.
Actualizar la información de los usuarios existentes.
Eliminar usuarios de la base de datos.
Requisitos
Servidor web (Apache, Nginx, etc.).
PHP 7.x o superior.
MySQL 5.x o superior.
Un navegador web moderno.
Instalación
Clona este repositorio en tu máquina local:

bash
Copy code
git clone https://github.com/CarlosMorales34/CRUD_PHP.git
Importa la base de datos usuarios.sql en tu sistema de gestión de base de datos MySQL.

Configura la conexión a la base de datos en el archivo config.php con los detalles de tu servidor MySQL:

php
Copy code
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'contactos');
Inicia tu servidor web y abre el proyecto en tu navegador.

Uso
Crear usuario: Haz clic en el botón "Agregar usuario" y completa el formulario con la información del nuevo usuario. Luego, presiona "Guardar".

Leer usuario: Visualiza la lista de usuarios existentes en la página principal. Haz clic en el nombre de un usuario para ver más detalles.

Actualizar usuario: Desde la página de detalles de un usuario, haz clic en el botón "Editar" para modificar la información del usuario. Luego, presiona "Guardar".

Eliminar usuario: Desde la página de detalles de un usuario, haz clic en el botón "Eliminar" para eliminar el usuario de la base de datos.

Contribuciones
Las contribuciones son bienvenidas. Si deseas mejorar este proyecto, ¡siéntete libre de enviar un pull request!

Licencia
Este proyecto está bajo la licencia MIT.
![image](https://github.com/CarlosMorales34/CRUD_PHP/assets/121272363/5c996131-3b53-4fef-9ce8-2add7beaa924)

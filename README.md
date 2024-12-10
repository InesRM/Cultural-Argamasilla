

<h1>📘 Proyecto Web para la Gestión de Actos Culturales</h1>

Este proyecto web permite al Ayuntamiento de Argamasilla de CVA publicar y difundir actos culturales. La aplicación permite a los administradores gestionar eventos, empresas y usuarios, mientras que los usuarios pueden registrarse e inscribirse en los eventos.

🚀 Características Principales

*Gestión de Eventos: Los administradores pueden crear, modificar y consultar la programación de eventos.
*Gestión de Empresas: Se permite a las empresas consultar sus actividades o eventos. El registro lo realizan los administradores
*Gestión de Usuarios: Los usuarios pueden registrarse, modificar su contraseña o eliminar su cuenta.
*Inscripciones a Eventos: Los usuarios pueden inscribirse a los eventos. Estas inscripciones son de carácter estadístico (no se realizan pagos ni ventas).

⚙️ Requisitos del Sistema
<p>-PHP: >= 8.4</p>
<p>-Laravel: 11.x</p>
<p>-Composer: Requerido para la instalación de dependencias.</p>
<p>-Base de Datos: MySQL o MariaDB.</p>
<p>-Servidor Web: Apache</p>
<p>-Node.js y NPM: Requeridos para compilar los assets de Tailwind CSS.</p>


📦 Instalación
Clonar el repositorio

git clone https://github.com/tu_usuario/tu_proyecto.git
    cd tu_proyecto
Instalar las dependencias de Composer

    composer install
Instalar las dependencias de Node.js


    npm install
Configurar el archivo de entorno .env
Copiar el archivo de ejemplo:
cp .env.example .env
Luego, configurar las credenciales de la base de datos en el archivo .env:

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=nombre_de_tu_base_de_datos

DB_USERNAME=tu_usuario

DB_PASSWORD=tu_contraseña

Generar la clave de la aplicación

    php artisan key:generate
Ejecutar las migraciones y los seeders.


    php artisan migrate --seed
Compilar los assets de Tailwind CSS


    npm run dev
Levantar el servidor de desarrollo


    php artisan serve
Accede a la aplicación desde: http://localhost:8000

🧪 Usuarios de Prueba
Para facilitar la evaluación de la aplicación, se han creado los siguientes usuarios de prueba:

Rol	Usuario	Contraseña
Administrador	admin@example.com	admin123
Asistente	user@example.com	user123
Nota: Se recomienda cambiar estas credenciales si la aplicación se sube a un entorno de producción.

📋 Estructura de la Aplicación
El proyecto sigue la arquitectura tradicional de Laravel. Aquí se destacan algunos directorios importantes:

app/Http/Controllers: Controladores de la aplicación, como EventoController, CarrouselController, AuthenticatedSessionController.
app/Models: Modelos de la aplicación, como User, Evento, Empresa.
resources/views: Vistas Blade de la aplicación, con plantillas para welcome, admin.dashboard, asistente.eventos, entre otras.
public/: Carpeta pública donde se encuentran los archivos accesibles desde el navegador.
routes/web.php: Archivo de rutas de la aplicación.

🔐 Roles y Permisos
La aplicación incluye control de acceso basado en roles. Los roles actuales son:

Administrador: Tiene acceso total a la creación, modificación y eliminación de eventos, empresas y usuarios.
Asistente: Accede a la página de eventos e interactúa con la aplicación mediante la inscripción en eventos.
El middleware RolMiddleware gestiona los accesos de acuerdo con la propiedad rol de la base de datos.

🔥 Rutas Principales
Estas son algunas de las rutas más importantes de la aplicación:

/GET	                Página de inicio              (welcome).

/login	                GET, POST	            Inicio de sesión de usuarios.

/register	            GET, POST	            Registro de nuevos usuarios.

/eventos	            GET	                    Página con la lista de eventos disponibles.

/admin/dashboard	    GET	                    Panel de control del administrador.

/admin/eventCreateForm	GET, POST	            Crear un nuevo evento.

/eventos/delete/{id}	GET	                    Eliminar un evento por ID.

🌐 Subdominio
El proyecto está configurado para funcionar con el subdominio:

argamasillacva.iruizm.es
El subdominio se configura con la redirección al directorio public utilizando un archivo .htaccess.

📄 Personalización de Idioma
El idioma predeterminado es español. Se pueden personalizar los mensajes de error y autenticación en el archivo App\Exceptions\Handler.php, ya que la carpeta resources/lang no está disponible en el proyecto.

📚 Cómo Contribuir
Si deseas contribuir al proyecto, sigue estos pasos:

    Realiza un fork del repositorio.
    Crea una nueva rama para tu función (git checkout -b feature/tu-funcion).
    Realiza tus cambios y haz un commit (git commit -m 'Agrega tu función').
    Envía tu rama (git push origin feature/tu-funcion).
    Crea una Pull Request para revisión.
    
🛠️ Solución de Problemas
Si encuentras algún problema, asegúrate de:

Revisar los registros de errores de Laravel en storage/logs/laravel.log.
Comprobar que las migraciones se ejecutaron correctamente (php artisan migrate).
Verificar las dependencias de Composer y NPM.
Si la aplicación está en producción, asegúrate de ejecutar php artisan config:cache y php artisan route:cache.

📜 Licencia
Este proyecto está licenciado bajo la licencia MIT, lo que significa que puedes modificarlo y distribuirlo libremente.

✉️ Contacto
Para cualquier duda o consulta, contacta a:

Nombre del desarrollador: Inés Ruiz

Correo electrónico: daw20252026@gmail.com


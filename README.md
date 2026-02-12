#  Task Board

Aplicación tipo Kanban para la gestión de tareas, desarrollada como prueba técnica.

Permite:

- Crear, editar y eliminar tareas
- Arrastrar tareas entre columnas (Drag & Drop)
- Filtrar por prioridad
- Buscar por título
- Modo oscuro persistente
- Sincronización completa con API REST

---

#  Tecnologías utilizadas

## Backend
- PHP 8+
- Laravel 10+
- PostgreSQL
- API RESTful
- Eloquent ORM
- Seeders y Migraciones

##  Frontend
- Blade
- TailwindCSS (CDN)
- JavaScript (Vanilla)
- Axios
- SortableJS (Drag & Drop)
- SweetAlert2
- CSS Variables para sistema de tema (Light/Dark)


---

#  Instalación y configuración

Sigue estos pasos para ejecutar el proyecto correctamente en un nuevo dispositivo.

- usar "composer install" para tener las dependencias php
- copia el archivo .env.example y crea un nuevo .env donde pegaras el contenido de .env.example y configura con tus datos lo siguiente
    DB_CONNECTION=pgsql // base de datos utilizada
    DB_HOST=127.0.0.1 
    DB_PORT=5432
    DB_DATABASE=tickets_db //cambia este dato por tu db
    DB_USERNAME=postgres
    DB_PASSWORD=tu_password // password personal si tienes
- crea la base de datos (solo crearla con el nombre que se configuró en DB_DATABASE y con el gestor que configuraste en DB_CONNECTION) en mi caso lo crearé desde pgadmin
- ejecutar el comando php artisan migrate:fresh --seed para generar tablas y datos del seeder para pruebas
    - Si al ejecutar las migraciones aparece el error could not find driver (Connection: pgsql) se tendra que descomentar dentro del archivo php lo siguiente
        extension=pdo_pgsql
        extension=pdo_sqlite
        extension=pgsql
        extension=shmop
    - Para verificar que está activa puedes usar el comando "php -m" deberia aparecer pdo_pgsql

- ejecuta npm install para instalar dependencias
- usa el comando php artisan serve para ejecutar el servidor
---



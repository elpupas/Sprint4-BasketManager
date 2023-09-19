### **English:**

# Lakers-Sponsored Tournaments for Kids

## Description

This web application is designed to manage tournaments for children, sponsored by the Los Angeles Lakers basketball team. The application is developed using the Laravel framework and utilizes the Laravel Breeze authentication system for user registration and authentication.

The application follows the Model-View-Controller (MVC) design pattern, allowing for an organized and modular structure. The view layer is styled using the Tailwind CSS framework, providing a modern and appealing look.

## Features

The application offers the following key features:

1. **Registration and Authentication**: Users can register in the application and then log in to access the functionalities.

2. **Team Management**: Registered users can create, edit, and delete teams for the tournaments. They can add team details such as name, category, coach, and players.

3. **Match Management**: The application allows users to record the matches that will take place in the tournament. They can add match details, including the participating teams, date, time, and location.

4. **CRUD Operations**: The application implements CRUD (Create, Read, Update, Delete) operations for teams and matches, making it easy to manage information and update data as needed.

## Requirements

Before being able to manage teams and matches, users need to register and authenticate in the application. This ensures the security and protection of the tournament data.

**Note (English):**

To create matches between teams, it is important to consider that the matches should involve teams registered by different users. This ensures the integrity of the tournaments and avoids conflicts of interest. If a user registers multiple teams, it is recommended to schedule matches between teams owned by other users to maintain fairness in the tournament.

## Technologies Used

The application has been developed using the following technologies and tools:

- **Laravel**: PHP framework that provides a robust and efficient structure for web application development.
- **Tailwind CSS**: Design framework that facilitates the creation of attractive and responsive interfaces.
- **Laravel Breeze**: Built-in authentication system in Laravel that streamlines the user registration and authentication process.
- **MySQL**: Relational database management system used to store the application data.

## Installation and Configuration

To run the application on your local environment, follow these steps:

1. Clone the repository from GitHub: `git clone <REPOSITORY_URL>`
2. Install project dependencies: `composer install`
3. Install the npm dependencies: `npm install`
4. Copy the `.env.example` file and rename it to `.env`. Configure the environment variables, such as the database connection.
5. Generate a new application key: `php artisan key:generate`
6. Run the database migrations: `php artisan migrate`
7. Start the local server: `php artisan serve`
8. In a new terminal window, compile the frontend assets using Vite: `npm run dev`

Great! You can now access the application from your local browser using the URL provided by the local server.

## Contributions

If you'd like to contribute to the development of this application, you're welcome to do so! You can fork the repository, make your modifications, and submit a pull request for your changes to be reviewed.

## License

This application is distributed under the MIT License. Please refer to the `LICENSE` file for more information.


### **Español:**

# Torneos para Niños Patrocinados por los Lakers

## Descripción

Esta aplicación web está diseñada para gestionar torneos deportivos para niños, patrocinados por el equipo de baloncesto Los Angeles Lakers. La aplicación está desarrollada utilizando el framework Laravel y utiliza el sistema de autenticación Laravel Breeze para el registro y autenticación de usuarios.

La aplicación sigue el patrón de diseño Modelo-Vista-Controlador (MVC), lo que permite una estructura organizada y modular. La capa de vista está estilizada utilizando el framework de diseño Tailwind CSS, lo que proporciona una apariencia moderna y atractiva.

## Funcionalidades

La aplicación ofrece las siguientes funcionalidades principales:

1. **Registro y Autenticación**: Los usuarios pueden registrarse en la aplicación y luego iniciar sesión para acceder a las funcionalidades.

2. **Gestión de Equipos**: Los usuarios registrados pueden crear, editar y eliminar equipos para los torneos. Pueden agregar detalles del equipo, como nombre, categoría, entrenador y jugadores.

3. **Gestión de Partidos**: La aplicación permite a los usuarios registrar los partidos que se jugarán en el torneo. Pueden agregar detalles del partido, como equipos involucrados, fecha, hora y ubicación.

4. **Operaciones CRUD**: La aplicación implementa operaciones CRUD (Crear, Leer, Actualizar, Eliminar) para los equipos y los partidos, lo que facilita la gestión de la información y la actualización de los datos según sea necesario.

## Requisitos

Antes de poder gestionar equipos y partidos, los usuarios deben registrarse y autenticarse en la aplicación. Esto garantiza la seguridad y protección de los datos del torneo.

**Nota (Español):**

Para crear partidos entre equipos, es importante tener en cuenta que los partidos deben involucrar a equipos registrados por usuarios distintos. Esto garantiza la integridad de los torneos y evita conflictos de interés. Si un usuario registra varios equipos, se recomienda que los partidos se programen entre equipos de otros usuarios para mantener la imparcialidad en el torneo.

## Tecnologías Utilizadas

La aplicación se ha desarrollado utilizando las siguientes tecnologías y herramientas:

- **Laravel**: Framework de PHP que proporciona una estructura robusta y eficiente para el desarrollo de aplicaciones web.
- **Tailwind CSS**: Framework de diseño que facilita la creación de interfaces atractivas y responsivas.
- **Laravel Breeze**: Sistema de autenticación integrado en Laravel que agiliza el proceso de registro y autenticación de usuarios.
- **MySQL**: Sistema de gestión de bases de datos relacional utilizado para almacenar los datos de la aplicación.

## Instalación y Configuración

Para ejecutar la aplicación en tu entorno local, sigue estos pasos:

1. Clona el repositorio desde GitHub: `git clone <URL_DEL_REPOSITORIO>`
2. Instala las dependencias del proyecto: `composer install`
3. Instala las dependencias npm:  `npm install`
4. Copia el archivo `.env.example` y renómbralo como `.env`. Configura las variables de entorno, como la conexión de la base de datos.
5. Genera una nueva clave de aplicación: `php artisan key:generate`
6. Ejecuta las migraciones de la base de datos: `php artisan migrate`
7. Inicia el servidor local: `php artisan serve`
8. En una nueva ventana de terminal, compila los assets de Frontend utilizando Vite:  `npm run dev`

¡Listo! Ahora puedes acceder a la aplicación desde tu navegador local utilizando la URL proporcionada por el servidor local.

## Contribuciones

Si deseas contribuir al desarrollo de esta aplicación, ¡eres bienvenido! Puedes realizar un "fork" del repositorio, hacer tus modificaciones y enviar una solicitud de extracción para revisar tus cambios.

## Licencia

Esta aplicación se distribuye bajo la Licencia MIT. Consulta el archivo `LICENSE` para obtener más información.

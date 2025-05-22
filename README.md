# Portfolio Projects CRUD - Laravel App

This is a simple Laravel-based CRUD (Create, Read, Update, Delete) application for managing portfolio projects. With file upload and status handling, users can add, update, view, and delete projects.

## 🔧 Features

- Create, edit, delete, and view portfolio projects
- Upload project image
- Project status: draft or published
- Project URL and description
- Responsive UI using Bootstrap
- File storage using Laravel's filesystem

---

## 📁 Project Structure

- app/Models/Project.php
- app/Http/Controllers/ProjectController.php
- resources/views/projects/index.blade.php
- resources/views/projects/create.blade.php
- resources/views/projects/edit.blade.php
- resources/views/projects/show.blade.php
- resources/views/layout.blade.php
- routes/web.php


1. Clone the Repository
- git clone (https://github.com/dolon13/Portfolio-Projects-CRUD-Application.git)
- cd portfolio-crud

2. Install Dependencies
- composer install

3. Set Up Environment
- cp .env.example .env
- php artisan key:generate

4. Edit .env file to match your database settings:
- DB_DATABASE=portfolio_db
- DB_USERNAME=root
- DB_PASSWORD=my_password

5. Run Migrations
- php artisan migrate

5. Start Development Server
- php artisan serve


## License

This project is open-source and free to use.
=======


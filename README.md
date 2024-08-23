# University Students CRUD Application

## Overview

This project is a basic CRUD (Create, Read, Update, Delete) application built using Laravel (version 9 and above) to manage University Students. It includes functionalities to manage students and teachers, with features like pagination, search, form validation, and user authentication.

## Features

- **CRUD Operations**: Manage students with Create, Read, Update, and Delete functionalities.
- **Student and Teacher Relationship**: Students are linked to teachers through a `class_teacher_id`.
- **Pagination**: List all students with pagination.
- **Search Functionality**: Filter students by name or other attributes.
- **Form Validation**: Validate form inputs for required fields and proper data types.
- **Soft Delete**: Implemented soft delete for students.
- **Responsive Design**: Uses basic CSS or Bootstrap for responsive design.
- **DataTables**: Integrated JS DataTables for enhanced data presentation.
- **User Authentication**: Implemented using Laravel's built-in authentication system.

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Database Setup](#database-setup)
- [Running the Application](#running-the-application)
- [Contributing](#contributing)
- [License](#license)

## Installation

Follow these steps to set up the project locally.

### Prerequisites

- PHP >= 8.1
- Composer
- MySQL or any other supported database


1. Clone the repository:
    ```sh
    git clone https://github.com/aashish-nayak/university_management.git
    cd university_management
    ```

2. Install the dependencies:
    ```sh
    composer install
    ```

## Configuration

1. Copy the `.env.example` file to `.env`:
    ```sh
    cp .env.example .env
    ```

2. Generate the application key:
    ```sh
    php artisan key:generate
    ```

3. Generate the application key:
    ```sh
    php artisan storage:link
    ```

4. Set up your database configuration in the `.env` file:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

## Database Setup

1. Run the migrations:
    ```sh
    php artisan migrate --seed
    ```

## Running the Application

1. Start the local development server:
    ```sh
    php artisan serve
    ```

2. Access the application at:
    ```
    http://localhost:8000
    ```

### User Login Credentials
- Email: test@example.com
- Password: password

## Contributing

If you would like to contribute, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Create a new Pull Request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
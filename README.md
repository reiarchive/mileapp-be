# MileApp Backend Test API

This Laravel-based API is designed to serve as the backend for the MileApp project's requirements.

## Table of Contents

- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Documentation](#documentation)
- [Unit Test](#unit-tests)
- [API Endpoints](#api-endpoints)
  - [GET Requests](#get-requests)
  - [POST Requests](#post-requests)
  - [PUT Requests](#put-requests)
  - [PATCH Requests](#patch-requests)
  - [DELETE Requests](#delete-requests)

## Getting Started

### Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 7.3
- Composer installed globally
- Laravel 8.x installed
- MongoDB

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/reiarchive/mileapp-be.git
   ```

2. Change to the project directory:

   ```bash
   cd mileapp-be
   ```

3. Install dependencies:

   ```bash
   composer install
   ```

4. Copy the example environment file and configure it with your database details:

   ```bash
   cp .env.example .env
   ```

5. Generate an application key:

   ```bash
   php artisan key:generate
   ```
6. Set your database connection in .env

   ```DB_CONNECTION=mongodb
    DB_HOST=127.0.0.1
    DB_PORT=27017
    DB_DATABASE=mileapp-be
    DB_USERNAME=
    DB_PASSWORD=
   ```
7. Run database migrations:

   ```bash
   php artisan migrate
   ```

8. Start the development server:

   ```bash
   php artisan serve
   ```

Your API should now be up and running.
## Documentation
Postman documentation :

https://documenter.getpostman.com/view/8261198/2s9YRB1B7N

## Unit Tests

To run the unit tests, open a terminal in your project directory and execute the following command:

```bash
php artisan test
```

## API Endpoints

### GET Requests

- **Get a List of Resources**

  ```
  GET /api/package
  ```

  Description: Retrieve a list of packages.

- **Get a Specific Resource**

  ```
  GET /api/package/{transaction_id}
  ```

  Description: Retrieve a specific package by its transaction_id.

### POST Requests

- **Create a New Resource**

  ```
  POST /api/package
  ```

  Description: Create a new package.

### PUT Requests

- **Update a Resource**

  ```
  PUT /api/package/{transaction_id}
  ```

  Description: Update or Insert an existing package.

### PATCH Requests

- **Partially Update a Resource**

  ```
  PATCH /api/package/{transaction_id}
  ```

  Description: Partially update an existing package.

### DELETE Requests

- **Delete a Resource**

  ```
  DELETE /api/package/{transaction_id}
  ```

  Description: Delete a resource by its transaction_id.

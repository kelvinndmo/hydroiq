## HydroIQ Backend
- This is a device manager application that enables you to create, delete, update and get smart devices.

### Required Features
    - A user can create a smart devices
    - A user can get all smart  devices
    - A user can get a smart device
    - A user can delete a smart device
    - A user can updatea a smart device.
    - A user can get a list of manufactureres.

## Prerequisite

- [PHP](https://www.php.net/)
- [Laravel](https://laravel.com/)
- [Composer](https://getcomposer.org/)
- [Postgres](https://www.postgresql.org/)


## Setup
### Install dependecies
     `composer install`

### Run database migrations
    `php artisan db:migrate`

### Run seeds
     `php artisan db:seed`
     
### Run server
     
### Available Endpoints
| Method | Endpoint                        | Description                           | 
| ------ | ------------------------------- | ------------------------------------- | 
| POST   | /api/smart-devices              | create smart device                   | 
| GET    | /api/smart-devices              | Get smart devices                     |
| GET    |/api/smart-devices/{id}          | Get as specific smart device          | 
| PUT    |/api/smart-devices/{id}          | update as specific smart device       | 
| DELETE |/api/smart-devices/{id}          | Delete as specific smart device       | 

# Users and Notifications

Application with 2 apis, users and notifications.
 1. "users" api has an endpoint POST /users and on request with body {"email","firstName","lastName"}, stores the submitted data in a database.
 2. When the submitted data is saved, an event is generated and it is sent to the "notifications" api. In "notifications" api the event is consumed and the sent data is saved in a log file.


## Project Setup

1. Clone this repo
- git clone https://github.com/peterdez/users-and-notifications.git
2. Go into the usersNotifications directory
- cd users-and-notifications/usersNotifications
3. Install Composer dependencies
- composer install
4. Copy .env.example file to .env file
- cp .env.example .env
5. Set the Application key
- php artisan key:generate
6. Setup the database credentials and migrate database
- php artisan migrate
7. Run server
- php artisan serve
8. Send a post request to server running on [http://127.0.0.1:8000] with input data including 'firstName', 'lastName' and 'email'.

9. Go into the notifications directory
- cd..
- cd notifications
10. Install Composer dependencies
- composer install
11. Copy .env.example file to .env file
- cp .env.example .env
12. Set the Application key
- php artisan key:generate
13. Setup the database credentials and migrate database
- php artisan migrate
14. Run server
- php artisan serve --port=8080
15. Confirm that the sent data is saved in a log file

## LARAVEL FILE AND STRUCTURE

-   APP: All the app's logical stuff will go innside this.

*   HTTP: handles the HTTP request and do something out of it.
*   CONTROLLERS: These are the files where we write our logical programs and it does something with based on the request that users sends from the Frontend of our App. (LOGICAL LAYER).

-   MODELS: These folders handle communication between our App and Database. (DATA LAYER).

-   Factories: These are basically way to see our data in our database. when we create a database table it's empty, so we can use factory to create a dummy contents or default content for our tables.

-   Seeders: These seed the data in the database, most of the time dummy or default values for our application.

-   Public: This is the public accessible folder. This folder can be accessible from the frontend.

-   Views: These are basically the HTML of our project. it's the frontend part. (PRESENTATION LAYER).

-   Vendor: all our dependencies, plugins are stored here.

-   Composer.json: all composer dependencies we install are stored here.

-   Package.json: npm packages we install go here

-   Vite.lconfig.js: This a compiler. It compiles asstes like Javascript and CSS

## UNDERSTANDING LARAVEL ARCHITECTURE

-   HOW MVC WORKS

*   USER ----> CONTROLLER -----> MODEL -----> CONNTROLLER -----> VIEWS -----> USER.

-   User request goes to the Routes file which goes to the Controller, then the Controller request infromation from the Model which returns the information to the Controller then it sends to the View which send a response to the User.

## LARAVEL ARTISAN and CONSOLE

-   php artisan: This shows the list of all Artisan command.

-   php artisa about: This shows the version of our app.

-   php artisan make:view Home: To create a Home.blade.php file in the Views folder.

-   php artisan make:controller HomeController: To create a HomeController.php file in our app/http/controller folder.

## LARAVEL ARTISAN TINKER

-   php artisan tinker: We use this command to communicate with our Application from the terminal, testing, debugging, and interacting with your application's data and features

*   We can perform CRUD to our database with dummy file using the "tinker".

*   App\Models\User::count(); ====>> get the total number of rows in the user table in our database.

*   App\Models\User::factory(10)->create(); ====>> This is used to insert fake data into the database using a factory in Laravel.

*   We can even use PHP function in out tinker.

## ROUTES

-   Route act as a mapping between a specific URL and the corresponding code that should be executed.

-   When a REQUEST is sent to a web server, the ROUTES checks if there is a matching URL pattern. If a match is found, the corresponding action or code (also known as the route handler) is executed.

-   Route parameter is the parameter that you pass in the URL.

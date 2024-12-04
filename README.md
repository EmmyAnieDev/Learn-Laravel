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

-   A fallback route in Laravel is used to handle requests that do not match any of the defined routes in your application.

## BLADE

-   In Laravel Blade, a stack is a way to define sections of content that can be pushed or appended to from child views or included partials and then rendered in the parent view.

## CONTROLLER

-   This type of controller contains only one type of actions/methods.

-   Creating a single action controller ====>> php artisan make:controller SingleActionController --invokable.

-   Resource controller: This is a type of controller that provides a set of actions or for handling common Crud operations like create, read, update, delete, etc.

-   How to create a Resource Controller ====>> php artisan make:controller BlogController -r ('-r' flag meaning resource).

## MIGRATIONS

-   Migration is a version control for database schema for Laravel.

-   You can create table database table. You can define columns columns type. You can establish indexing foreign keys.

-   To create a table ====>> php artisan make:migration create_blogs_table . table name must be plural to follow laravel naming convention.

-   To add the new table created to the database ====>> php artisan migrate.

## MODEL

-   A model is a presentation of a table in your database.

-   Models are used to interact with the database and encapsulate the logic related to the data manipulation. Each model corresponds to a data table.

-   To create a model ====>> php artisan make:model Blog . model name must be singular to follow laravel naming convention.

-   When creating a model with a custom name, for example, MyBlog instead of Blog, we must define the name of the corresponding table in the model using the following property ====>> protected $table = 'blogs'.

## SEEDERS

-   Seeders are basically used to seed data into the database.

-   In Laravel, seeders are used to put sample or initial data into your database, so you don't have to do it by hand.

-   To create a user seeder ====>> php artisan make:seeder UserSeeder

-   Before running the new created seeder call the seeder in the the DatabaseSeeder file ====>> $this->call(UserSeeder::class);

-   to run the seeder ====>> php artisan db:seed .

## FACTORIES

-   Factories in Laravel help you create fake data for testing.

-   To create a factory for a particular model ====>> php artisan make:factory BlogFactory.

-   Unlike Seeders where we hardcode the contents, Factories generate dynamic/ dummy contents.

-   To create the dummy data ====>> App\Models\Blog::factory(5)->create();

-   Before running the new created factory add the feeder in the the DatabaseSeeder file ====>> Blog::factory(10)->create();

-   to run the factory ====>> php artisan db:seed .

## ADD TABLE TO EXISTING TABLE

-   To add a column to an exisitng table ====>> php artisan make:migration add_author_to_blogs_table .

-   Define the column properties then ====>> php artisan migrate .

## QUERY BUILDER

-   Query Builder directly work with the Dataabse table. Eloquent works with the models.

-   Query Builder is really handy because it is more faster than eloquent when we have much data in our database.

-   First we have to import the "DB Facades" class before we can use the Query Builder. =====>> use Illuminate\Support\Facades\DB or ===> use DB .

-   When we want to select all items in a particular column we use the (pluck method), passing two parrams. first the column to fetch, second the key example in our case the id.

## AGGREGATE METHODS

-   Aggregate functions perform calculations on a set of values and return a single summary value. In the context of databases, they are typically used for summarizing data.

*   Aggregates methods are mostly used for time calculating. Suppose you have to calculate the sum of your price column.

*   You can also count how many columns you have. How many rows you have in the database.

## FILLABLE & MASS ASSIGNMENT

-   The Fillable property specifies which attributes can be mass-assigned.

-   Mass assignment allows setting multiple attributes on a model at once using an array of key-value pairs.

-   Guarded property specifies which attributes that can't be mass-assigned.

## CONDITION CLAUSE

-   LIKE: Used to search for a value within a column, often with wildcard characters (% or \_).

-   WHERE: Used to filter records based on a specified condition.

## Api to return merchant tiles

Api has been setup based on the defined parameters in the task that will return collection of tiles:


## Installation
Follow these steps to clone & run the project. 

<pre>
git clone git@github.com:InderSC/merchanttiles.git

cd merchanttiles

composer install </pre>

For running the database migration scripts please create database name called shopdirectory(or any other preferred name) and change the credentials in .env if required.  Please follow the steps for migration scripts and seeding the db

<pre>php artisan migrate (this will create tables in database)

php artisan db:seed (this will seed the database with default merchant tiles records) </pre>

To start the server please run the following command
<pre> php artisan serve </pre>
this will start the server on http://127.0.0.1:8000/ The port 8000 may not be the same for some users.

To test the api you can use the postman by using the following urls:
<pre> http://127.0.0.1:8000/api/tiles 
(this will return all the tiles)
      
http://127.0.0.1:8000/api/tile/1 
(this will return specific tile by id i.e. 1/2/3)
      
</pre>

I can setup the frontend vuejs platform to display the tiles in a grid format. Please let me know if you want me to setup.

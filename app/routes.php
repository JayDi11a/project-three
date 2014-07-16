<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/', function()
{
	return View::make('index');
});


Route::get('/lorem-ipsum/', function()
{
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs(5);
	
	echo implode('<p>', $paragraphs);	
	
	return View::make('index');

});


Route::get('/user-generator', function()
{

	//require_once '/path/to/Faker/src/autoload.php';

	$faker = Faker\Factory::create();

	echo $faker->name;
 
 	echo $faker->address;
  	
	echo $faker->text;

	return View::make('index');

});






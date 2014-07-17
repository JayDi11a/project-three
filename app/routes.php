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
	return View::make('_master');
});


Route::get('/lorem-ipsum', function()
{
	return View::make('words');
});


Route::get('/lorem-ipsum/{number}', function($number)
{
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($number);
	echo implode('<p>', $paragraphs);


});






Route::get('/user-generator', function()
{
	//echo 'Enter a number of paragraphs in the URL to generate that output';
	return View::make('users');

});



Route::get('/user-generator/{number}', function($number)

{
	
	//require_once '/path/to/Faker/src/autoload.php';

	$faker = Faker\Factory::create($number);

	echo $faker->name, "\n";
 
 	echo $faker->address, "\n";
  	
	//echo $faker->text, "\n";

	//return View::make('user-generator');

});






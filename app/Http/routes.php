  <?php

/*
|--------------------------------------------------------------------------jk
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return view('index');
});

Route::get('/services', 'StaticPagesController@redirectToHome');
Route::get('/services/about', 'StaticPagesController@about');
Route::get('/services/webdev', 'StaticPagesController@webdev');
Route::get('/services/graphic_design', 
  'StaticPagesController@graphicDesign');
Route::get('/services/branding', 'StaticPagesController@branding');
Route::get('/meet', 'StaticPagesController@meet');
Route::get('/contact', 'StaticPagesController@contact');

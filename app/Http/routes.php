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
  // return view('temp');
});

// About
Route::get('about', 'StaticPagesController@about');

// Services
Route::get('/services/webdev', 'StaticPagesController@webdev');
Route::get('/services/graphic_design', 
  'StaticPagesController@graphicDesign');
Route::get('/services/branding', 'StaticPagesController@branding');

// Meet The Team
Route::get('/meet', 'StaticPagesController@meet');

// Contacts
Route::get('/contact', 'ContactsController@newMessage');
Route::post('/contact', 'ContactsController@sendMessage');
Route::get('/request','ContactsController@requestQuote');

// Case Studies
 Route::resource('cases', 'CaseStudiesController');
//Route::get('/cases', 'CaseStudiesController@index');
//Route::get('/cases', 'CaseStudiesController@create');
//Route::get('/cases', 'CaseStudiesController@create');

// Transactional pages
Route::get('/thankyou', 'ContactsController@thankyou');

// Redirects
Route::get('/services', 'StaticPagesController@redirectToHome');

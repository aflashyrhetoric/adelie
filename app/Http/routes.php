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

// Invalid route, return to index page
Route::get('/services/', function () {
    return view('index');
});

Route::get('/services/webdev', function () {
    return view('services/webdev');
});

Route::get('/services/graphic_design', function () {
    return view('services/graphic_design');
});

Route::get('/services/branding', function () {
    return view('services/branding');
});

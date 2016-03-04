<?php



/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
*/





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    //Routes for front end page [START]

    Route::get('/', 'FrontEndController@index');

    //Routes for front end page [END]


    /*==================================================================*/

    //Routes for admin page [START]

    Route::get('/m16admin', 'LoginController@index');
    Route::get('/main', 'MainController@index');

    //login route
    Route::post('/login', 'LoginController@login');

    Route::get('/logout', 'LoginController@logout');

    Route::get('/newevent', 'MainController@newevent');
    Route::get('/editevent', 'MainController@editevent');
    Route::post('/doinsertevent', 'MainController@doinsertevent');
    Route::delete('/deleteevent/{event}', 'MainController@deleteevent');
    Route::post('/doeditevent', 'MainController@doeditevent');

    //Routes for admin page [END]
});

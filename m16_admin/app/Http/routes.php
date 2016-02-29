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


//display login page

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

    Route::get('/', 'LoginController@index');
    Route::get('/main', 'MainController@index');

    //login route
    Route::post('/login', 'LoginController@login');

    Route::get('/newtask', 'MainController@newtask');

});

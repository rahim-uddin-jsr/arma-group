<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontendController@index');

// Route::get('/', 'HomeController@index')->name('home')

// About routes start
Route::get('/mission-vision', 'FrontendController@missionVision')->name('mission vision');
Route::get('/our-values', 'FrontendController@ourValues')->name('our values');
Route::get('/our-strength', 'FrontendController@ourStrength')->name('our strength');
Route::get('/chairman-message', 'FrontendController@chairmanMessage')->name('chairman message');
// About routes end
// Project routes start
Route::get('/completed-project', 'FrontendController@completedProject')->name('completed project');
Route::get('/upcoming-project', 'FrontendController@upcomingProject')->name('upcoming project');
Route::get('/on-going-project', 'FrontendController@onGoingProject')->name('on going project');
// Project routes end
Route::get('/gallary', 'FrontendController@gallary')->name('gallary');
Route::get('/certrfication', 'FrontendController@certrfication')->name('certrfication');
Route::get('/careers', 'FrontendController@career')->name('Career');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/projects', 'BackendController@projects')->name('projects');
Route::get('/project/{id}', 'BackendController@project')->name('project');
Route::get('/gallery-data', 'BackendController@gallery')->name('gallery data');
Route::get('/basic', 'BackendController@basicInfo')->name('basic data');

Auth::routes();

Route::middleware(['auth', 'roleManagement'])->group(function () {

    Route::prefix('dashboard')->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::prefix('project')->group(function () {

            //-------*********route for backend-------*********//

            //addProject

            Route::get('/add', 'BackendController@addProjectIndex')->name('add project index');


        });

           // basicinfo

           Route::get('/home', 'BackendController@index_basicinfo')->name('home');



            //gallery

            Route::get('/gallery', 'BackendController@index_gallery')->name('gallery');
            Route::post('/gallery', 'BackendController@store_gallery')->name('gallery_store');

            //gallery-table
            Route::get('/gallery_table', 'BackendController@index_gallery_table')->name('gallery_table');

           //gallery-table-edit/update
           Route::get('/gallery_table_edit/{id}', 'BackendController@gallery_table_edit')->name('gallery_table_edit');
           Route::put('/gallery_table_update/{id}', 'BackendController@gallery_table_update')->name('gallery_table_update');
           Route::delete('/gallery_table_delete/{id}', 'BackendController@gallery_table_delete')->name('gallery_table_delete');






    });

});
;

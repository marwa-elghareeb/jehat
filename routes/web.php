<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ListController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\CompaniesController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\DepartmentsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\aboutusController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CardsController;

use App\Http\Controllers\Site\IndexController;
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
//Portal Routes:
Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutUs', [IndexController::class, 'aboutUs']);
Route::get('/contactUs', [IndexController::class, 'contactUs']);
Route::post('/contactUsForm', [IndexController::class, 'contactUsForm']);
Route::get('/media', [IndexController::class, 'media']);
Route::get('/footerPages', [IndexController::class, 'footerPages']);
Route::get('/ourTeam', [IndexController::class, 'ourTeam']);
Route::get('/news', [IndexController::class, 'news']);
Route::post('/searchEmp', [IndexController::class, 'searchEmp']);

//Help Center
Route::get('/helpcenter', [IndexController::class, 'help']);
Route::get('/helpcenter/{id}', [IndexController::class, 'helpDetails']);
Route::get('/question', [IndexController::class, 'question']);
Route::post('/search', [IndexController::class, 'search']);
//Towers
Route::get('/cards', [IndexController::class, 'cards']);
Route::get('/towers', [IndexController::class, 'towers']);
Route::get('/allCompanies', [IndexController::class, 'companies']);
Route::get('/reception/{id}', [IndexController::class, 'reception']);
Route::get('/userLogin', [IndexController::class, 'userLogin']);
Route::get('/department/{id}', [IndexController::class, 'department']);
Route::get('/employe/{id}', [IndexController::class, 'employees']);
Route::get('/allEvents', [IndexController::class, 'events']);
Route::get('/employeesEvent/{id}', [IndexController::class, 'employeesEvent']);

//Admin
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('list', ListController::class);
    Route::resource('pages', PagesController::class);
    Route::resource('companies', CompaniesController::class);
    Route::resource('employees', EmployeesController::class);
    Route::resource('activitylog', ActivityController::class);
    Route::resource('faq', FAQController::class);
    Route::resource('departments', DepartmentsController::class);
    Route::resource('events', EventsController::class);
    Route::resource('aboutus-data', aboutusController::class);
    Route::resource('media-data', MediaController::class);
    Route::resource('news-data', NewsController::class);
    Route::resource('cards-data', CardsController::class);
    Route::resource('contact-data', ContactController::class);

    //
   // Route::get('/contact-us',[ContactController::class,'contact']);
    //Route::post('contact',[ContactController::class,'sendEmail'])->name('contact.us');


});

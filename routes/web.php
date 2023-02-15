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
use App\Http\Controllers\Admin\AboutusController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CardsController;
use App\Http\Controllers\Admin\FooterPagesController;
use App\Http\Controllers\Admin\RegistrationAndLoginController;

//WebSite 
use App\Http\Controllers\Site\AboutUsSiteController;
use App\Http\Controllers\Site\ContactUsSiteController;
use App\Http\Controllers\Site\MediaSiteController;
use App\Http\Controllers\Site\FooterSiteController;
use App\Http\Controllers\Site\NewsSiteController;
use App\Http\Controllers\Site\TowerSiteController;
use App\Http\Controllers\Site\IndexController;
use App\Http\Controllers\Site\UsersWebsiteController;

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
Route::get('/', function () {return view('welcome');});
Route::get('/homepage', function () {return view('homePages');});
//
Route::get('/user-register', [UsersWebsiteController::class, 'index'] );
Route::post('/user-register-form', [UsersWebsiteController::class, 'userForm'] );
Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);
Route::get('/forgotPassword', [UsersWebsiteController::class, 'forgotPassword'] );
Route::get('/user-login', [UsersWebsiteController::class, 'userLogin'] );
Route::post('/user-Login-form', [UsersWebsiteController::class, 'loginForm'] );
Route::get('/aboutUs', [AboutUsSiteController::class, 'index'] );
Route::get('/contactUs', [ContactUsSiteController::class, 'index']);
Route::post('/contactUsForm', [ContactUsSiteController::class, 'contactUsForm']);
Route::get('/media', [MediaSiteController::class, 'index']);
Route::get('/footerPages/{slug}', [FooterSiteController::class, 'index']);
Route::get('/news', [NewsSiteController::class, 'index']);
Route::get('/news-details/{id}', [NewsSiteController::class, 'newsDetails']);
Route::get('/ourTeam', [IndexController::class, 'ourTeam']);
//Help Center
Route::get('/helpcenter', [IndexController::class, 'help']);
Route::get('/helpcenter/{id}', [IndexController::class, 'helpDetails']);
Route::get('/question', [IndexController::class, 'question']);
Route::post('/search', [IndexController::class, 'search']);
//Towers
Route::get('/cards', [TowerSiteController::class, 'cards']);
Route::get('/towers', [TowerSiteController::class, 'towers']);
Route::get('/allCompanies', [TowerSiteController::class, 'companies']);
Route::get('/reception/{slug}', [TowerSiteController::class, 'reception']);
Route::get('/userLogin/{slug}', [TowerSiteController::class, 'userLogin']);
Route::post('/userLoginForm', [TowerSiteController::class, 'userLoginForm']);
Route::get('/department/{slug}', [TowerSiteController::class, 'department']);
Route::get('/employe/{id}', [TowerSiteController::class, 'employees']);
Route::post('/searchEmp', [TowerSiteController::class, 'searchEmp']);
//Events
Route::get('/allEvents', [TowerSiteController::class, 'events']);
Route::get('/employeesEvent/{id}', [TowerSiteController::class, 'employeesEvent']);

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
    Route::resource('about-data', AboutusController::class);
    Route::resource('media-data', MediaController::class);
    Route::resource('news-data', NewsController::class);
    Route::resource('cards-data', CardsController::class);
    Route::resource('contact-data', ContactController::class);
    Route::resource('footer-pages-data', FooterPagesController::class);
    Route::resource('registrationandlogin-data',RegistrationAndLoginController ::class);



});

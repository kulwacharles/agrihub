<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controller\FarmerController;
use App\Http\Controller\GroupController;
use App\Http\Controller\MemberController;
use App\Http\Controller\LandController;
use App\Http\Controller\SupplierController;
use App\Http\Controller\ProductController;
use App\Http\Controller\UnitController;
use App\Http\Controller\PurchaseController;
use App\Http\Controller\SalesController;
//use ;
use App\Models\Counter;
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


Route::get('/test/login',[PagesController::class, 'login']);

Route::post('/test/signin',[PagesController::class, 'signin']);
/*
Route::get('/about',[PagesController::class, 'about']);
Route::resource('post', 'PostController');
*/
/*
Route::get('/about', function () {
    return view('about');
});
*/
Auth::routes();
Route::get('/',[App\Http\Controllers\HomeController::class, 'index']);

/*
Route::group(['prefix'=>'farmer'],function()
{
    Route::get('register','FarmerController@register');
});
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('farmer','FarmerController@index');
//Route::post('save','FarmerController@store');
Route::get('farmer/{id}/edit','FarmerController@edit');
//Route::resource('farmer','FarmerController');
Route::post('farmer/update/{id}','FarmerController@update');
Route::post('farmer/save','FarmerController@store');
Route::get('farmer/{id}/delete','FarmerController@destroy');
Route::get('farmer/{id}/show','FarmerController@show');

Route::post('group/{id}/update','GroupController@update');
Route::get('manage-group','GroupController@index');
Route::post('group/save','GroupController@store');
Route::get('group/{id}/delete','GroupController@destroy');

Route::get('farmer/group/{id}/add','MemberController@index');
Route::get('farmer/group/','MemberController@show');
Route::get('/testform', function()
{
    $list=Farmer::all();
    //print_r($list);
    return view('agrihub.manage-asset')->with('list',$list);

});
route::post('save','MemberController@store');

route::get('land','LandController@index');
route::post('land/save','LandController@store');
route::get('land/{id}/delete','LandController@destroy');
route::post('land/{id}/edit','LandController@update');
//oute::get('test',[App\Http\Livewire\Counter::class, 'render']);


//livewire
Route::view('contacts', 'contacts');
Route::view('test','livewiretest');
Route::view('input-order','agrihub.iorder');

//supplier
Route::view('manage/group','agrihub.manage-group');

Route::get('manage/supplier','SupplierController@index');
Route::post('supplier/save','SupplierController@store');
Route::get('supplier/{id}/delete','SupplierController@destroy');
Route::post('supplier/{id}/edit','SupplierController@store');

//product
Route::get('manage/product','ProductController@index');
Route::post('product/save','ProductController@store');
Route::post('product/{id}/edit','ProductController@update');
Route::get('product/{id}/delete','ProductController@destroy');
//unit
Route::get('manage/unit','UnitController@index');
Route::post('unit/save','UnitController@store');
Route::post('unit/{id}/edit','UnitController@update');
Route::get('unit/{id}/delete','UnitController@destroy');

//input order management
Route::get('input/order','PurchaseController@index');
Route::post('input/add','PurchaseController@store');
Route::get('get',"PurchaseController@create");
Route::post('ajax-posts/{id}/edit','PurchaseController@edit');
Route::get('input/order/{id}/{product}/{purchase}/delete','PurchaseController@destroy');
Route::post('input/order/{id}/update','PurchaseController@update');

//output order managemnet
Route::get('sales','SalesController@index');
Route::post('sales/add','SalesController@store');
Route::get('get/sales',"SalesController@create");
Route::get('sales/{id}/{product}/{sale}/delete','SalesController@destroy');
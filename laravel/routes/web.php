<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('pages.v_main');})->name('landing');
Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login-main');
Route::post('/login', 'App\Http\Controllers\LoginController@post')->name('login-action');
Route::get('/signup', 'App\Http\Controllers\SignupController@index')->name('signup-main');
Route::post('/signup', 'App\Http\Controllers\SignupController@post')->name('signup-action');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout-action');


Route::get('/edit/permission/detail', 'App\Http\Controllers\EditController@editPermissionDetail')->name('edit.permission.detail');
Route::post('/edit/permission/detail/action', 'App\Http\Controllers\EditController@editPermissionDetailAct')->name('edit.permission.detail.act');
Route::post('/edit/shift/action', 'App\Http\Controllers\EditController@editShiftAct')->name('edit.shift.action');
Route::post('/edit/user/action', 'App\Http\Controllers\EditController@editUserAct')->name('edit.user.action');
Route::post('/edit/permission/action', 'App\Http\Controllers\EditController@editPermissionAct')->name('edit.permission.action');


Route::post('/edit/user/detail', 'App\Http\Controllers\EditController@editUserDetail')->name('edit.user.detail');
Route::post('/edit/user/detail/action', 'App\Http\Controllers\EditController@editUserDetailAct')->name('edit.user.detail.action');

Route::post('/delete/user/action', 'App\Http\Controllers\EditController@deleteUserAct')->name('delete.user.action');

Route::get('/add/user', 'App\Http\Controllers\EditController@addUser')->name('add.user.action');
Route::post('/add/user/action', 'App\Http\Controllers\EditController@addUserAct')->name('add.user.act');

Route::post('/edit/user/cp', 'App\Http\Controllers\EditController@editUserCp')->name('edit.user.cp');
Route::post('/edit/user/cp/action', 'App\Http\Controllers\EditController@editUserCpAct')->name('edit.user.cp.act');


Route::group(['middleware' => ['CheckSession']], function(){
    Route::get('/home', 'App\Http\Controllers\AdminController@index')->name('dashboard');
    Route::get('/master-data/product', 'App\Http\Controllers\MasterDataController@ProductHome')->name('master.product');
    Route::get('/master-data/product/create', 'App\Http\Controllers\MasterDataController@ProductCreate')->name('master.product.create');
    Route::post('/master-data/product/create/action', 'App\Http\Controllers\MasterDataController@ProductCreateAct')->name('master.product.create.action');
    Route::post('/master-data/product/delete', 'App\Http\Controllers\MasterDataController@ProductDelete')->name('master.product.delete');
    Route::post('/master-data/product/delete/action', 'App\Http\Controllers\MasterDataController@ProductDeleteAct')->name('master.product.delete.action');
    Route::post('/master-data/product/edit', 'App\Http\Controllers\MasterDataController@ProductEdit')->name('master.product.edit');
    Route::post('/master-data/product/edit/action', 'App\Http\Controllers\MasterDataController@ProductEditAct')->name('master.product.edit.action');

    Route::get('/master-data/customer', 'App\Http\Controllers\MasterDataController@CustomerHome')->name('master.customer');
    Route::get('/master-data/customer/create', 'App\Http\Controllers\MasterDataController@CustomerCreate')->name('master.customer.create');
    Route::post('/master-data/customer/create/action', 'App\Http\Controllers\MasterDataController@CustomerCreateAct')->name('master.customer.create.action');
    Route::post('/master-data/customer/delete', 'App\Http\Controllers\MasterDataController@CustomerDelete')->name('master.customer.delete');
    Route::post('/master-data/customer/delete/action', 'App\Http\Controllers\MasterDataController@CustomerDeleteAct')->name('master.customer.delete.action');
    Route::post('/master-data/customer/edit', 'App\Http\Controllers\MasterDataController@CustomerEdit')->name('master.customer.edit');
    Route::post('/master-data/customer/edit/action', 'App\Http\Controllers\MasterDataController@CustomerEditAct')->name('master.customer.edit.action');


    Route::get('/quotation', 'App\Http\Controllers\QuotationController@Home')->name('quotation.home');
    Route::get('/quotation/dashboard', 'App\Http\Controllers\QuotationController@Dashboard')->name('quotation.dashboard');
    Route::post('/quotation/create', 'App\Http\Controllers\QuotationController@Create')->name('quotation.create');
    Route::get('/quotation/edit/{id}', 'App\Http\Controllers\QuotationController@Edit')->name('quotation.edit');
    Route::post('/quotation/create/action', 'App\Http\Controllers\QuotationController@CreateAct')->name('quotation.create.act');
    Route::get('/quotation/preview/{id}', 'App\Http\Controllers\QuotationController@preview')->name('quotation.preview');
    Route::get('/quotation/print/{id}', 'App\Http\Controllers\QuotationController@printPdf')->name('quotation.print');
    Route::get('/quotation/copy/{copy}', 'App\Http\Controllers\QuotationController@Copy')->name('quotation.copy');

    Route::get('/invoice', 'App\Http\Controllers\InvoiceController@Home')->name('quotation.home');
    Route::get('/invoice/dashboard', 'App\Http\Controllers\InvoiceController@Dashboard')->name('invoice.dashboard');
    Route::post('/invoice/create', 'App\Http\Controllers\InvoiceController@Create')->name('invoice.create');
    Route::get('/invoice/edit/{id}', 'App\Http\Controllers\InvoiceController@Edit')->name('invoice.edit');
    Route::post('/invoice/create/action', 'App\Http\Controllers\InvoiceController@CreateAct')->name('invoice.create.act');
    Route::get('/invoice/preview/{id}', 'App\Http\Controllers\InvoiceController@preview')->name('invoice.preview');
    Route::get('/invoice/print/{id}', 'App\Http\Controllers\InvoiceController@printPdf')->name('invoice.print');
    Route::get('/invoice/copy/{copy}', 'App\Http\Controllers\InvoiceController@Copy')->name('invoice.copy');

    Route::get('/salesorder', 'App\Http\Controllers\SoController@Home')->name('so.home');
    Route::get('/salesorder/edit/{id}', 'App\Http\Controllers\SoController@Edit')->name('so.edit');
    Route::get('/edit/user', 'App\Http\Controllers\EditController@editUser')->name('edit.user');
    Route::get('/edit/permission', 'App\Http\Controllers\EditController@editPermission')->name('edit.permission');



});

Route::post('/quotation/edit/tittle', 'App\Http\Controllers\QuotationController@EditTittle')->name('quotation.edit.tittle');
Route::post('/quotation/edit/customer', 'App\Http\Controllers\QuotationController@EditCust')->name('quotation.edit.cust');

Route::post('/quotation/edit/tax', 'App\Http\Controllers\QuotationController@EditTax')->name('quotation.edit.tax');
Route::post('/quotation/edit/disc', 'App\Http\Controllers\QuotationController@EditDisc')->name('quotation.edit.disc');
Route::post('/quotation/edit/note', 'App\Http\Controllers\QuotationController@EditNote')->name('quotation.edit.note');
Route::post('/quotation/edit/remark', 'App\Http\Controllers\QuotationController@EditRemark')->name('quotation.edit.remark');

Route::post('/quotation/req/approve', 'App\Http\Controllers\QuotationController@ReqApprove')->name('quotation.req.approve');

Route::post('/so/edit/po-number', 'App\Http\Controllers\SoController@EditPO')->name('so.edit.ponumber');

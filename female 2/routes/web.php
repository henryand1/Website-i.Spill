<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User1Controller;
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

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('layouts.v_add');
})->name('layouts.v_add');

Route::middleware(['auth:sanctum', 'admin'])->get('/dashboard', function () {
    return view('/dashboard');
})->name('layouts.v_add');

Route::middleware(['auth:sanctum', 'user'])->get('/userhome', function () {
    return view('/userhome');
})->name('layouts.v_add');

Route::get('/test', function() {
    return view('master');
});

Route::get('/', function () {
    return view('home');
});

Route::resource('slider', SliderController::class);

Route::get('/review', function () {
    return view('review');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/dashboard', function () {
    return view('layouts.v_add');
});


Route::get('/v_add', function(){
    return view('layouts.v_add');
});

///////////////////////////////////////////////////////////////////////////////////////

Route::get('/v_add/detail/{no_produk}', [AdminController::class, 'detail']);
Route::get('/v_listpowder/detailpowder/{no_produk}', [AdminController::class, 'detailpowder']);
Route::get('/v_listliptint/detailliptint/{no_produk}', [AdminController::class, 'detailliptint']);
Route::get('/v_listblushon/detailblushon/{no_produk}', [AdminController::class, 'detailblushon']);
Route::get('/v_listbrowpencil/detailbrowpencil/{no_produk}', [AdminController::class, 'detailbrowpencil']);
Route::get('/v_listfoundation/detailfoundation/{no_produk}', [AdminController::class, 'detailfoundation']);

//////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/v_userpowder/{no_produk}', [UserController::class, 'userpowder'])->name('v_userpowder/');
Route::get('/v_userliptint/{no_produk}', [UserController::class, 'userliptint'])->name('v_userliptint/');
Route::get('/v_usermascara/{no_produk}', [UserController::class, 'usermascara'])->name('v_usermascara/');
Route::get('/v_userfoundation/{no_produk}', [UserController::class, 'userfoundation'])->name('v_userfoundation/');
Route::get('/v_userblushon/{no_produk}', [UserController::class, 'userblushon'])->name('v_userblushon/');
Route::get('/v_userbrowpencil/{no_produk}', [UserController::class, 'userbrowpencil'])->name('v_userbrowpencil/');

////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/v_add/add', [AdminController::class, 'add']);
Route::post('/v_add/insert', [AdminController::class, 'insert']);
Route::get('/', function(){
    return view ('home');
});

/////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/v_listpowder', [AdminController::class, 'powderlist'])->name('v_listpowder');
Route::get('/v_add/v_listpowder', [AdminController::class, 'powderlist'])->name('v_listpowder');
Route::get('/v_add/v_listpowder/addpowder', [AdminController::class, 'addpowder']);
Route::post('/v_add/v_listpowder/addpowder/insertpowder', [AdminController::class, 'insertpowder']);

//////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/v_listmascara', [AdminController::class, 'mascaralist'])->name('v_listmascara');
Route::get('/v_add/v_listmascara', [AdminController::class, 'mascaralist'])->name('v_listmascara');
Route::get('/v_add/v_listmascara/addmascara', [AdminController::class, 'addmascara']);
Route::post('/v_add/v_listmascara/addmascara/insertmascara', [AdminController::class, 'insertmascara']);

/////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/v_listliptint', [AdminController::class, 'liptintlist'])->name('v_listliptint');
Route::get('/v_add/v_listliptint', [AdminController::class, 'liptintlist'])->name('v_listliptint');
Route::get('/v_add/v_listliptint/addliptint', [AdminController::class, 'addliptint']);
Route::post('/v_add/v_listliptint/addliptint/insertliptint', [AdminController::class, 'insertliptint']);

//////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/v_listblushon', [AdminController::class, 'blushonlist'])->name('v_listblushon');
Route::get('/v_add/v_listblushon', [AdminController::class, 'blushonlist'])->name('v_listblushon');
Route::get('/v_add/v_listblushon/addblushon', [AdminController::class, 'addblushon']);
Route::post('/v_add/v_listblushon/addblushon/insertblushon', [AdminController::class, 'insertblushon']);

///////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/v_listbrowpencil', [AdminController::class, 'browpencillist'])->name('v_listbrowpencil');
Route::get('/v_add/v_listbrowpencil', [AdminController::class, 'browpencillist'])->name('v_listbrowpencil');
Route::get('/v_add/v_listbrowpencil/addbrowpencil', [AdminController::class, 'addbrowpencil']);
Route::post('/v_add/v_listbrowpencil/addbrowpencil/insertbrowpencil', [AdminController::class, 'insertbrowpencil']);

///////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/v_listfoundation', [AdminController::class, 'foundationlist'])->name('v_listfoundation');
Route::get('/v_add/v_listfoundation', [AdminController::class, 'foundationlist'])->name('v_listfoundation');
Route::get('/v_add/v_listfoundation/addfoundation', [AdminController::class, 'addfoundation']);
Route::post('/v_add/v_listfoundation/addfoundation/insertfoundation', [AdminController::class, 'insertfoundation']);


//review oleh user
Route::post('/v_userliptint/insertreviewliptint/{no_produk}/{nama_produk}/{name}', [AdminController::class, 'insertreviewliptint']);
Route::post('/v_usermascara/insertreviewmascara/{no_produk}/{nama_produk}/{name}', [AdminController::class, 'insertreviewmascara']);
Route::post('/v_userbrowpencil/insertreviewbrowpencil/{no_produk}/{nama_produk}/{name}', [AdminController::class, 'insertreviewbrowpencil']);
Route::post('/v_userpowder/insertreviewpowder/{no_produk}/{nama_produk}/{name}', [AdminController::class, 'insertreviewpowder']);
Route::post('/v_userblushon/insertreviewblushon/{no_produk}/{nama_produk}/{name}', [AdminController::class, 'insertreviewblushon']);
Route::post('/v_userfoundation/insertreviewfoundation/{no_produk}/{nama_produk}/{name}', [AdminController::class, 'insertreviewfoundation']);


//view produk user
Route::get('/v_userpowder', [UserController::class, 'powderuser'])->name('v_userpowder');
Route::get('/v_usermascara', [UserController::class, 'mascarauser'])->name('v_usermascara');
Route::get('/v_userfoundation', [UserController::class, 'foundationuser'])->name('v_userfoundation');
Route::get('/v_userliptint', [UserController::class, 'liptintuser'])->name('v_userliptint');
Route::get('/v_userbrowpencil', [UserController::class, 'browpenciluser'])->name('v_userbrowpencil');
Route::get('/v_userblushon', [UserController::class, 'blushonuser'])->name('v_userblushon');

Route::get('/carousel', [AdminController::class, 'carousel']);
Route::post('/v_userliptint/{no_produk}/reviewliptint', [AdminController::class, 'reviewliptint']);
Route::post('/v_userliptint/2/addreviewliptint/insertreviewliptint', [AdminController::class, 'insertreviewliptint']);

//user
Route::get('/userhome',[User1Controller::class, 'index'])->name('user');

//admin
Route::get('/admin',[AdminController::class, 'index'])->name('admin');

//delete data
Route::get('/v_listbrowpencil/delete/{no_produk}',[AdminController::class, 'deletebrowpencil']);
Route::get('/v_listmascara/delete/{no_produk}',[AdminController::class, 'deletemascara']);
Route::get('/v_listpowder/delete/{no_produk}',[AdminController::class, 'deletepowder']);
Route::get('/v_listfoundation/delete/{no_produk}',[AdminController::class, 'deletefoundation']);
Route::get('/v_listblushon/delete/{no_produk}',[AdminController::class, 'deleteblushon']);
Route::get('/v_listliptint/delete/{no_produk}',[AdminController::class, 'deleteliptint']);

Route::get('v_reviewpowder/delete/{review}',[AdminController::class, 'deletereviewpowder']);
Route::get('v_reviewmascara/delete/{review}',[AdminController::class, 'deletereviewmascara']);
Route::get('v_reviewliptint/delete/{review}',[AdminController::class, 'deletereviewliptint']);
Route::get('v_reviewbrowpencil/delete/{review}',[AdminController::class, 'deletereviewbrowpencil']);
Route::get('v_reviewblushon/delete/{review}',[AdminController::class, 'deletereviewblushon']);
Route::get('v_reviewfoundation/delete/{review}',[AdminController::class, 'deletereviewfoundation']);


//hak akses untuk admin
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin',[AdminController::class, 'index'])->name('admin');
    Route::get('/v_add/add', [AdminController::class, 'add']);
    Route::get('/dashboard',[AdminController::class, 'index'])->name('dashboard');
    Route::post('/v_add/insert', [AdminController::class, 'insert']);
    Route::get('/v_add/detail/{no_produk}', [AdminController::class, 'detail']);
    Route::get('/v_listpowder/detailpowder/{no_produk}', [AdminController::class, 'detailpowder']);
    Route::get('/v_listliptint/detailliptint/{no_produk}', [AdminController::class, 'detailliptint']);
    Route::get('/v_listblushon/detailbluhson/{no_produk}', [AdminController::class, 'detailblushon']);
    Route::get('/v_listbrowpencil/detailbrowpencil/{no_produk}', [AdminController::class, 'detailbrowpencil']);
    Route::get('/v_listfoundation/detailfoundation/{no_produk}', [AdminController::class, 'detailfoundation']);
    Route::get('/v_listmascara/detailmascara/{no_produk}', [AdminController::class, 'detailmascara']);
    Route::get('/v_listpowder', [AdminController::class, 'powderlist'])->name('v_listpowder');
    Route::get('/v_add/v_listpowder', [AdminController::class, 'powderlist'])->name('v_listpowder');
    Route::get('/v_add/v_listpowder/addpowder', [AdminController::class, 'addpowder']);
    Route::post('/v_add/v_listpowder/addpowder/insertpowder', [AdminController::class, 'insertpowder']);
    Route::get('/v_listmascara', [AdminController::class, 'mascaralist'])->name('v_listmascara');
    Route::get('/v_add/v_listmascara', [AdminController::class, 'mascaralist'])->name('v_listmascara');
    Route::get('/v_add/v_listmascara/addmascara', [AdminController::class, 'addmascara']);
    Route::post('/v_add/v_listmascara/addmascara/insertmascara', [AdminController::class, 'insertmascara']);
    Route::get('/v_listliptint', [AdminController::class, 'liptintlist'])->name('v_listliptint');
    Route::get('/v_add/v_listliptint', [AdminController::class, 'liptintlist'])->name('v_listliptint');
    Route::get('/v_add/v_listliptint/addliptint', [AdminController::class, 'addliptint']);
    Route::post('/v_add/v_listliptint/addliptint/insertliptint', [AdminController::class, 'insertliptint']);
    Route::get('/v_listblushon', [AdminController::class, 'blushonlist'])->name('v_listblushon');
    Route::get('/v_add/v_listblushon', [AdminController::class, 'blushonlist'])->name('v_listblushon');
    Route::get('/v_add/v_listblushon/addblushon', [AdminController::class, 'addblushon']);
    Route::post('/v_add/v_listblushon/addblushon/insertblushon', [AdminController::class, 'insertblushon']);
    Route::get('/v_listbrowpencil', [AdminController::class, 'browpencillist'])->name('v_listbrowpencil');
    Route::get('/v_add/v_listbrowpencil', [AdminController::class, 'browpencillist'])->name('v_listbrowpencil');
    Route::get('/v_add/v_listbrowpencil/addbrowpencil', [AdminController::class, 'addbrowpencil']);
    Route::post('/v_add/v_listbrowpencil/addbrowpencil/insertbrowpencil', [AdminController::class, 'insertbrowpencil']);
    Route::get('/v_listfoundation', [AdminController::class, 'foundationlist'])->name('v_listfoundation');
    Route::get('/v_add/v_listfoundation', [AdminController::class, 'foundationlist'])->name('v_listfoundation');
    Route::get('/v_add/v_listfoundation/addfoundation', [AdminController::class, 'addfoundation']);
    Route::post('/v_add/v_listfoundation/addfoundation/insertfoundation', [AdminController::class, 'insertfoundation']);
    Route::get('/v_add/v_reviewmascara', [AdminController::class, 'admascara'])->name('v_reviewmascara');
    Route::get('/v_add/v_reviewpowder', [AdminController::class, 'adpowder'])->name('v_reviewpowder');
    Route::get('/v_add/v_reviewblushon', [AdminController::class, 'adblushon'])->name('v_reviewblushon');
    Route::get('/v_add/v_reviewliptint', [AdminController::class, 'adliptint'])->name('v_reviewliptint');
    Route::get('/v_add/v_reviewbrowpencil', [AdminController::class, 'adbrowpencil'])->name('v_reviewbrowpencil');
    Route::get('/v_add/v_reviewfoundation', [AdminController::class, 'adfoundation'])->name('v_reviewfoundation');
    Route::get('/v_listblushon/detailbluhson/edit/{no_produk}', [AdminController::class, 'editblushon']);
    Route::post('v_listblushon/detailbluhson/edit/updateblushon/{no_produk}', [AdminController::class, 'updateblushon']);
    Route::get('/v_listpowder/detailpowder/edit/{no_produk}', [AdminController::class, 'editpowder']);
    Route::post('v_listpowder/detailpowder/edit/updatepowder/{no_produk}', [AdminController::class, 'updatepowder']);
    Route::get('/v_listbrowpencil/detailbrowpencil/edit/{no_produk}', [AdminController::class, 'editbrowpencil']);
    Route::post('v_listbrowpencil/detailbrowpencil/edit/updatebrowpencil/{no_produk}', [AdminController::class, 'updatebrowpencil']);
    Route::get('/v_listmascara/detailmascara/edit/{no_produk}', [AdminController::class, 'editmascara']);
    Route::post('v_listmascara/detailmascara/edit/updatemascara/{no_produk}', [AdminController::class, 'updatemascara']);
    Route::get('/v_listliptint/detailliptint/edit/{no_produk}', [AdminController::class, 'editliptint']);
    Route::post('v_listliptint/detailliptint/edit/updateliptint/{no_produk}', [AdminController::class, 'updateliptint']);
    Route::get('/v_listfoundation/detailfoundation/edit/{no_produk}', [AdminController::class, 'editfoundation']);
    Route::post('v_listfoundation/detailfoundation/edit/updatefoundation/{no_produk}', [AdminController::class, 'updatefoundation']);
});


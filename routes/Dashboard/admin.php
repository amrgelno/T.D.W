<?php

use App\Http\Controllers\Auth\Dashboard;
use App\Http\Controllers\customers_crud;
use App\Http\Controllers\projects_crud;
use App\Http\Controllers\user_crud;
use App\Http\Controllers\packages_crud;
use App\Http\Controllers\permission_crud;
use App\Http\Controllers\cash_mangement_crud;
use App\Http\Controllers\Bank_mangement_crud;
use App\Http\Controllers\Receipts_crud;
use App\Http\Controllers\CGReceipts_crud;
use App\Http\Controllers\ReceiptsHolder_crud;
use App\Http\Controllers\Expenses_crud;
use App\Http\Controllers\journalentiry_crud;
use App\Http\Controllers\selesreps_crud;
use App\Http\Controllers\company_crud;
use App\Http\Controllers\payments_crud;



Route::group(['middleware'=>'checkdata' ], function () {
   //dashboard middleware

Route::POST('/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('Dashboard');  // auth library


Route::resource('admin/Dashboard/customers',customers_crud::class);
Route::resource('admin/Dashboard/projects',projects_crud::class);
Route::resource('admin/Dashboard/user',user_crud::class); //permission.blade.php
Route::resource('admin/Dashboard/permission',permission_crud::class); //setpermission.blade.php
Route::resource('admin/Dashboard/packages',packages_crud::class);
Route::resource('admin/Dashboard/cash',cash_mangement_crud::class);
Route::resource('admin/Dashboard/Bank',Bank_mangement_crud::class);
Route::resource('admin/Dashboard/Receipts',Receipts_crud::class);
Route::resource('admin/Dashboard/CGReceipts',CGReceipts_crud::class);
Route::resource('admin/Dashboard/ReceiptsHolders',ReceiptsHolder_crud::class);
Route::resource('admin/Dashboard/Expenses',Expenses_crud::class);
Route::resource('admin/Dashboard/entiries',journalentiry_crud::class);
Route::resource('admin/Dashboard/selesreps',selesreps_crud::class);
Route::resource('admin/Dashboard/selesreps',selesreps_crud::class);
Route::resource('admin/Dashboard/company',company_crud::class);
Route::resource('admin/Dashboard/payments',payments_crud::class);

});





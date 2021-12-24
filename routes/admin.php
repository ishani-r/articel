<?php

use App\Http\Controllers\Admin\Auth\ImportExportController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
});

Route::group(['middleware' => 'auth:admin'], function () {

    // Articel
    Route::get('articel-page',        'Auth\ArticelController@showArticelPage')->name('articel_page');
    Route::post('create-articel',     'Auth\ArticelController@create')->name('create_articel');
    Route::get('articel-list',        'Auth\ArticelController@list')->name('articel_list');
    Route::get('show-article/{id}',   'Auth\ArticelController@show')->name('show_article');
    Route::get('edit-article/{id}',   'Auth\ArticelController@edit')->name('edit_article');
    Route::put('update-article/{id}',   'Auth\ArticelController@update')->name('update_article');
    Route::get('article-status',      'Auth\ArticelController@statusArticle')->name('status_article');
    Route::post('delete-article/{id}','Auth\ArticelController@deleteArticle')->name('delete_article'); 
    Route::get('articel-list',        'Auth\ArticelController@list')->name('articel_list');
    Route::get('show-comment',        'Auth\ArticelController@showComment')->name('show_comment');

    Route::get('users', ['uses'=>'Auth\SearchController@index', 'as'=>'users.index']);
    // Route::get('users', 'Auth\SearchController@index')->name('users_index');
    
    Route::post('set-sub',        'Auth\ArticelController@setSubcategory')->name('set_sub');

    Route::get('count-like', 'Auth\ArticelController@countLike')->name('count_like');

    Route::get('dashboard/content', function () {
        return view('admin.dashboard.content');
    })->name('main');
    
    // --------------------------------------Admin Profile-------------------------------------------
    Route::put('update-profile/{id}', 'Auth\ProfileController@updateProfile')->name('update_profile');
    Route::get('dashboard/profile', 'Auth\ProfileController@showProfile')->name('showprofile');
    
    // ------------------------------------ change status -----------------------------------------
    Route::get('dashboard/change', 'Auth\ProfileController@changeStatus')->name('changestatus');
    Route::get('details/change', 'Auth\ProfileController@statusChange')->name('statuschange');
    Route::get('dashboard/password', function () {
        return view('admin.dashboard.changepassword');
    })->name('changepassword');
    Route::post('dashboard/changepass/{id}', 'Auth\ProfileController@changePassword')->name('changepass');
    
    // --------------------------------------User Profile-------------------------------------------
    Route::resource('dashboard', Auth\UserController::class)->middleware(['permission:view-user-table']);
    
    
    // ---------------------------------------- Permission ---------------------------------------
    Route::resource('permission', Auth\PermissionController::class)->middleware(['permission:view-permission-table']);
    Route::post('modulename','Auth\PermissionController@moduleName')->name('modulename');
    
    // ---------------------------------------- Permission ---------------------------------------
    Route::resource('role', Auth\RoleController::class)->middleware(['permission:view-role-table']);
    Route::post('checkname','Auth\RoleController@checkName')->name('checkname');
    
    // ---------------------------------------- Admin ---------------------------------------
    Route::resource('adminuser', Auth\AdminController::class)->middleware(['permission:view-admin-table']);
    

});

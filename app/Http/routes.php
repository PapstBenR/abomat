<?php

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
|
| All routes for a admin
|
*/
# Dashboard
Route::get('admin/dashboard', 'Admin\DashboardController@index');

# Category
Route::get('admin/category', 'Admin\CategoryController@index');

Route::get('admin/category/create', 'Admin\CategoryController@create');
Route::post('admin/category/store', 'Admin\CategoryController@store');

Route::post('admin/category/update/{id}', 'Admin\CategoryController@update');
Route::get('admin/category/edit/{id}', 'Admin\CategoryController@edit');

Route::get('admin/category/delete/{id}', 'Admin\CategoryController@delete');

# Subcategory
Route::get('admin/subcategory/{id}', 'Admin\SubcategoryController@index');

Route::get('admin/subcategory/create/{id}', 'Admin\SubcategoryController@create');
Route::post('admin/subcategory/store/{id}', 'Admin\SubcategoryController@store');

Route::get('admin/subcategory/edit/{id}', 'Admin\SubcategoryController@edit');
Route::post('admin/subcategory/update/{id}', 'Admin\SubcategoryController@update');

Route::get('admin/subcategory/delete/{id}', 'Admin\SubcategoryController@delete');

# Company
Route::get('admin/company', 'Admin\CompanyController@index');

Route::get('admin/company/create', 'Admin\CompanyController@create');
Route::post('admin/company/store', 'Admin\CompanyController@store');

Route::post('admin/company/update/{id}', 'Admin\CompanyController@update');
Route::get('admin/company/edit/{id}', 'Admin\CompanyController@edit');

Route::get('admin/company/delete/{id}', 'Admin\CompanyController@delete');

# Contract
Route::get('admin/contract', 'Admin\ContractController@index');

Route::get('admin/contract/create', 'Admin\ContractController@create');
Route::post('admin/contract/store', 'Admin\ContractController@store');

Route::post('admin/contract/update/{id}', 'Admin\ContractController@update');
Route::get('admin/contract/edit/{id}', 'Admin\ContractController@edit');

Route::get('admin/contract/delete/{id}', 'Admin\ContractController@delete');

# Member
Route::get('admin/member', 'Admin\MemberController@index');
Route::get('admin/member/show/{id}', 'Admin\MemberController@show');

Route::get('admin/member/create', 'Admin\MemberController@create');
Route::post('admin/member/store', 'Admin\MemberController@store');

Route::post('admin/member/update/{id}', 'Admin\MemberController@update');
Route::get('admin/member/edit/{id}', 'Admin\MemberController@edit');

Route::get('admin/member/delete/{id}', 'Admin\MemberController@delete');

# Report
Route::get('admin/report', 'Admin\ReportController@index');

/*
|--------------------------------------------------------------------------
| JOBS
|--------------------------------------------------------------------------
|
| Routes for cronjobs
|
*/
Route::get('jobs/company', 'Jobs\JobController@checkCompanies');

/*
|--------------------------------------------------------------------------
| GENERAL WEBSITE
|--------------------------------------------------------------------------
|
| All routes for not-loggedin users
|
*/
Route::get('/', 'Homepage\HomeController@index');

# Notice
Route::get('/notice', 'Homepage\NoticeController@index');
Route::get('/notice/terminate', 'Homepage\NoticeController@terminate');

Route::get('/blog', 'Homepage\BlogController@index');

Route::get('/help', 'Homepage\HelpController@index');

Route::get('/lawyer', 'Homepage\LawyerController@index');

Route::get('/contact', 'Homepage\ContactController@index');




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

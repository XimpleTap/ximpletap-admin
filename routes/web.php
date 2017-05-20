<?php

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
    return view('welcome');
});

Route::resource('users','UsersController');
Route::resource('cards','CardsController');
Route::resource('businesses','BusinessesController');
Route::resource('cardsusers','CardsUsersController');
Route::resource('businessgroups','BusinessesGroupsController');
Route::resource('cardsgroup','CardsGroupController');
Route::resource('cardassignments','CardAssignmentsController');
Route::resource('rewards','RewardsController');
Route::resource('products_services','ProductsServicesController');
Route::resource('products_services_discounts','ProductsServicesDiscountsController');
Route::resource('users_profiles','UsersProfilesController');
Route::resource('device_pairs','DevicePairsController');
Route::resource('rpi_devices','RPIDevicesController');
Route::resource('reader_devices','ReaderDevicesController');
Route::resource('business_policies','BusinessPoliciesController');
Route::resource('businesses_devices','BusinessesDevicesController');
Route::resource('business_reload_denoms','BusinessReloadDenomsController');
Route::resource('business_reload_denoms_bonus','BusinessReloadDenomsBonusController');
Route::get('/dashboard','DashboardController@index');
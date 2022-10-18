<?php

declare(strict_types=1);

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
Route::get('/','AboutUs@list')
    ->name('AboutUs');
Route::get('contact', 'Contact\ContactController')
    ->name('Contact');
Route::post('contact','Contact\SendMailController@sendemail')
    ->name('send.email');
Route::get('store', 'User\StoreController')
    ->name('store');
Route::get('profile', 'User\ProfileController')
    ->name('Profile');
Route::get('Symulation/AtomLife', 'Symulation\SymulationController')
    ->name('Symulation.AtomLife');


    Route::group(['middleware'=>'auth',], function() {
        Route::get('home', 'User\HomeController@index')
        ->name('storeLogged');
        Route::get('download/{file_name}', 'Download\DownloadController@download')
        ->name('download');
    });

Route::group([
    'prefix'=> 'released',
    'namespace'=>'Games\Produced',
    'as'=>'Produced.'
], function () {
    Route::get('woodcutter','ProducedController@showWood')
        ->name('WoodCutter');
    Route::get('space','ProducedController@showSpace')
        ->name('Space');
    Route::get('spaceshooter','ProducedController@showSpaceshooter')
        ->name('Spaceshooter');
});

Route::group ([
    'prefix'=> 'inproduction',
    'namespace'=>'Games\InProduction',
    'as'=>'InProduction.'
], function () {
    Route::get('arkona','InProductionController@showArkona')
        ->name('Arkona');
    Route::get('cyber_city','InProductionController@showCyber_City')
        ->name('Cyber_City');
    Route::get('pixel_monsters','InProductionController@showPixel_Monsters')
        ->name('Pixel_Monsters');
});




Auth::routes();



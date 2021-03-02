<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::middleware(['checkIp'])->namespace('Back')->prefix('backoffice')->name('back.')->group(function () {

    // Authentication
    Route::namespace('Auth')->group(function () {
        Route::get('', 'LoginController@showLoginForm')->name('home');
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout')->name('logout');
    });

    Route::get('/home', 'HomeController@index')->name('home')->middleware(['auth:admin']);

//    // popup
//    Route::resource('popup', 'PopupController')->middleware(['auth:admin']);
//    Route::post('getPopupsList', 'PopupController@getPopupsList')->name('popupsList');
//    Route::post('updatePopupEnableFlag', 'PopupController@updateEnableFlag')->name('updatePopupEnableFlag');
//
//    // Sections
//    Route::namespace('Sections')->prefix('sections')->name('sections.')->group(function () {
//
//        // about
//        Route::resource('about', 'AboutController')->middleware(['auth:admin']);
//        Route::post('getAboutList', 'AboutController@getAboutList')->name('aboutList');
//        Route::post('updateAboutEnableFlag', 'AboutController@updateEnableFlag')->name('updateAboutEnableFlag');
//        Route::post('deleteAboutGalleryImage', 'AboutController@deleteGalleryImage')->name('deleteAboutGalleryImage');
//
//        // rooms
//        Route::resource('room', 'RoomController')->middleware(['auth:admin']);
//        Route::post('getRoomList', 'RoomController@getRoomList')->name('roomList');
//        Route::post('updateRoomEnableFlag', 'RoomController@updateEnableFlag')->name('updateRoomEnableFlag');
//        Route::post('deleteRoomGalleryImage', 'RoomController@deleteGalleryImage')->name('deleteRoomGalleryImage');
//
//        // special offers
//        Route::resource('offer', 'OfferController')->middleware(['auth:admin']);
//        Route::post('getOffersList', 'OfferController@getOffersList')->name('offersList');
//        Route::post('updateOfferEnableFlag', 'OfferController@updateEnableFlag')->name('updateOfferEnableFlag');
//
//        // dining
//        Route::resource('dining', 'DiningController')->middleware(['auth:admin']);
//        Route::post('getDiningsList', 'DiningController@getDiningsList')->name('dinigsList');
//        Route::post('updateDiningEnableFlag', 'DiningController@updateEnableFlag')->name('updateDiningEnableFlag');
//
//        // facility
//        Route::resource('facility', 'FacilityController')->middleware(['auth:admin']);
//        Route::post('getFacilityList', 'FacilityController@getFacilityList')->name('facilityList');
//        Route::post('updateFacilityEnableFlag', 'FacilityController@updateEnableFlag')->name('updateFacilityEnableFlag');
//
//        // wedding
//        Route::resource('wedding', 'WeddingController')->middleware(['auth:admin']);
//        Route::post('getWeddingList', 'WeddingController@getWeddingList')->name('weddingList');
//        Route::post('updateWeddingEnableFlag', 'WeddingController@updateEnableFlag')->name('updateWeddingEnableFlag');
//        Route::post('deleteWeddingGalleryImage', 'WeddingController@deleteGalleryImage')->name('deleteWeddingGalleryImage');
//
//        // golf
//        Route::resource('golf', 'GolfController')->middleware(['auth:admin']);
//        Route::post('getGolfList', 'GolfController@getGolfList')->name('golfList');
//        Route::post('updateGolfEnableFlag', 'GolfController@updateEnableFlag')->name('updateGolfEnableFlag');
//        Route::post('deleteGolfGalleryImage', 'GolfController@deleteGalleryImage')->name('deleteGolfGalleryImage');
//
//        // page
//        Route::resource('page', 'PageController')->middleware(['auth:admin']);
//        Route::post('getPagesList', 'PageController@getPagesList')->name('pagesList');
//        Route::post('updatePageEnableFlag', 'PageController@updateEnableFlag')->name('updatePageEnableFlag');
//        Route::post('updateDefaultLandingPageFlag', 'PageController@updateDefaultLandingFlag')->name('updateDefaultLandingPageFlag');
//
//    });
//
//    // Settings
//    Route::namespace('Settings')->prefix('settings')->name('settings.')->group(function () {
//
//        // company
//        Route::resource('company', 'CompanyController')->except(['create', 'update', 'show', 'edit', 'destroy'])->middleware(['auth:admin']);
//        Route::post('getCompanysList', 'CompanyController@getCompanysList')->name('companysList');
//        Route::post('updateCompanyEnableFlag', 'CompanyController@updateEnableFlag')->name('updateCompanyEnableFlag');
//
//        // site languages
//        Route::resource('language', 'LanguageController')->except(['show'])->middleware(['auth:admin']);
//        Route::post('getLanguagesList', 'LanguageController@getLanguagesList')->name('languagesList');
//        Route::post('updateLanguageEnableFlag', 'LanguageController@updateEnableFlag')->name('updateLanguageEnableFlag');
//
//        // admin module whitelist
//        Route::resource('whitelist', 'WhitelistController')->except(['show'])->middleware(['auth:admin']);
//        Route::post('getWhitelistsList', 'WhitelistController@getWhitelistsList')->name('whitelistsList');
//        Route::post('updateWhitelistEnableFlag', 'WhitelistController@updateEnableFlag')->name('updateWhitelistEnableFlag');
//
//        // admins
//        Route::resource('admin', 'AdminController')->except(['show'])->middleware(['auth:admin']);
//        Route::post('getAdminsList', 'AdminController@getAdminsList')->name('adminsList');
//        Route::post('updateAdminEnableFlag', 'AdminController@updateEnableFlag')->name('updateAdminEnableFlag');
//
//    });

});

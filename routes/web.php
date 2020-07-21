<?php

// Sitemap
Route::get('sitemap.xml', 'SitemapController@sitemap')->name('sitemap.xml');

// Profile Routes...
Route::get('/', 'UserController@index');
Route::get('/panel/profile', 'UserController@profile');
Route::post('panel/profile', 'UserController@update_avatar');

// Blog
Route::get('/blog/news', 'UserController@news');
Route::get('/blog/news/{id}', 'UserController@news_show');
Route::get('/blog/themes', 'UserController@themes');
Route::get('/blog/themes/{id}', 'UserController@themes_show');
// Route::any('/blog/search', 'UserController@user_search')->name('user_search');

// Contact
Route::get('contact', 'ContactController@contact');
Route::post('contact', 'ContactController@contact_store')->name('contact.store');
Route::get('/panel/client', 'ContactController@client');
    
// Admin
// Auth::routes(['verify' => true]);
Route::group(['namespace' => 'Admin', 'prefix' => 'panel'], function () {
    
    // Login Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
      
    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
    
    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


    Route::get('/', 'AdminController@index');
    
    // Logo Demo
    Route::get('logo', 'LogoAdminController@index');
    Route::get('logo/create', 'LogoAdminController@logo_create');
    Route::post('logo', 'LogoAdminController@logo_store');
    Route::get('logo/edit/{id}', 'LogoAdminController@logo_edit');
    Route::put('logo/{id}', 'LogoAdminController@logo_update');
    Route::delete('logo/{id}', 'LogoAdminController@logo_destroy');
    
    // Web Demo
    Route::get('web', 'WebAdminController@index');
    Route::get('web/create', 'WebAdminController@web_create');
    Route::post('web', 'WebAdminController@web_store');
    Route::get('web/edit/{id}', 'WebAdminController@web_edit');
    Route::put('web/{id}', 'WebAdminController@web_update');
    Route::delete('web/{id}', 'WebAdminController@web_destroy');
    
    // Post
    Route::get('post', 'PostAdminController@post');
    Route::get('post/create', 'PostAdminController@post_create');
    Route::post('post', 'PostAdminController@post_store');
    Route::get('post/edit/{id}', 'PostAdminController@post_edit');
    Route::put('post/{id}', 'PostAdminController@post_update');
    Route::delete('post/{id}', 'PostAdminController@post_destroy');
    Route::get('post/search', 'PostAdminController@post_search')->name('search');
    
    // Demo Wordpress Theme
    Route::get('demo', 'WpThemeAdminController@demo');
    Route::get('demo/create', 'WpThemeAdminController@demo_create');
    Route::post('demo', 'WpThemeAdminController@demo_store');
    Route::get('demo/edit/{id}', 'WpThemeAdminController@demo_edit');
    Route::put('demo/{id}', 'WpThemeAdminController@demo_update');
    Route::delete('demo/{id}', 'WpThemeAdminController@demo_destroy');
    Route::get('demo/search', 'WpThemeAdminController@demo_search')->name('search');
    
    
    // Translator
    Route::get('languages', 'LanguageTranslationController@index')->name('languages');
    Route::post('translations/update', 'LanguageTranslationController@transUpdate')->name('translation.update.json');
    Route::post('translations/updateKey', 'LanguageTranslationController@transUpdateKey')->name('translation.update.json.key');
    Route::delete('translations/destroy/{key}', 'LanguageTranslationController@destroy')->name('translations.destroy');
    Route::post('translations/create', 'LanguageTranslationController@store')->name('translations.create');
    
});

<?php

use App\Support\Router;

Router::get('/', 'HomeController@index')->name('dashboard');

// Auth

Router::get('/login', 'AuthController@index')->name('auth.index');
Router::post('/login', 'AuthController@login')->name('auth.login');
Router::post('/logout', 'AuthController@logout')->name('auth.logout');

// Collections

Router::get('/collections', 'CollectionController@index')->name('collections.index');
Router::post('/collections', 'CollectionController@store')->name('collections.store');
Router::delete('/collections/{id}', 'CollectionController@delete')->name('collections.delete');

// Users

Router::get('/users', 'UserController@index')->name('users.index');
Router::get('/users-data', 'UserController@data')->name('users.data');
Router::get('/users/create', 'UserController@create')->name('users.create');
Router::post('/users', 'UserController@store')->name('users.store');
Router::get('/users/{user}', 'UserController@show')->name('users.show');
Router::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
Router::patch('/users/{id}', 'UserController@update')->name('users.update');
Router::delete('/users/{id}', 'UserController@delete')->name('users.delete');

// E Registrations

Router::get('/registrations', 'ERegistrationController@index')->name('registrations.index');
Router::get('/registrations-data', 'ERegistrationController@data')->name('registrations.data');
Router::get('/registrations/apply', 'ERegistrationController@create')->name('registrations.apply');
Router::post('/registrations', 'ERegistrationController@store')->name('registrations.store');
Router::get('/registrations/{id}', 'ERegistrationController@show')->name('registrations.show');
Router::patch('/registrations/{id}', 'ERegistrationController@defer')->name('registrations.defer');
Router::delete('/registrations/{id}', 'ERegistrationController@delete')->name('registrations.delete');
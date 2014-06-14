<?php

Route::get('/',array('as'=>'index', 'uses'=>'PostsController@getIndex'));

Route::get('/admin', array('as'=>'admin_area','uses'=>'PostsController@getAdmin'));

Route::post('/add',array('as'=>'add_new_post', 'uses'=>'PostsController@postAdd'));

Route::post('/login', array('as'=>'login','uses'=>'UsersController@postLogin'));

Route::get('/logout',array('as'=>'logout', 'uses'=>'UsersController@getLogout'));

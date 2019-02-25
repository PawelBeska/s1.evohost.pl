<?php
route::get('/v/{embed}/{pass}','MovieController@player')->name('player');
route::get('/v/{embed}/{pass}.jpg','MovieController@playerImage')->name('playerImage');


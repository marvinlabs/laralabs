<?php

/*
|--------------------------------------------------------------------------
| Backend routes
|--------------------------------------------------------------------------
*/
Route::group([
    'as'         => 'backend.',
    'middleware' => 'backend',
    'namespace'  => 'Backend',
    'prefix'     => 'backend',
], function ()
{
    $basePath = __DIR__ . '/Routes/Backend';

    require($basePath . '/General.php');

});

/*
|--------------------------------------------------------------------------
| Frontend routes
|--------------------------------------------------------------------------
*/
Route::group([
    'as'         => 'frontend.',
    'middleware' => 'frontend',
    'namespace'  => 'Frontend',
], function ()
{
    $basePath = __DIR__ . '/Routes/Frontend';

    require($basePath . '/General.php');
    require($basePath . '/Auth.php');
});

/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/
Route::group([
    'as'         => 'api.',
    'middleware' => 'api',
    'namespace'  => 'Api',
    'prefix'     => 'api',
], function ()
{
});

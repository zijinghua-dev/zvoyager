<?php
/**
 * Created by PhpStorm.
 * User: fengliang
 * Date: 2020-01-17
 * Time: 11:33
 */
//$version=config(env('API_VERSION'),null);
Route::group(['middleware' => ['api','zCheckExternalNames']], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', 'AuthController@login');
    });
});
Route::group(['middleware' => ['api','setRequestParameters']], function () {
    Route::group(['prefix' => 'user',], function () {
        Route::post('/store', 'UserController@store');
    });



    Route::group(['middleware'=>['auth:api','zUserId']], function () {
        Route::group(['prefix' => 'group'], function () {
//            Route::post('/', 'GroupController@store');
            Route::post('/mine', 'GroupController@mine');
        });

        Route::group(['prefix' => 'datatype',], function () {
            Route::post('/index', 'DatatypeController@index');
        });

        Route::group(['prefix' => 'action',], function () {
            Route::post('/index', 'ActionController@index');
        });
    });

    //,'zCheckGroup'
    Route::group(['middleware'=>['auth:api','zUserId','zAuthorize']], function () {
        Route::group(['prefix' => 'auth',], function () {
            Route::post('logout', 'AuthController@logout');
        });

        Route::group(['middleware' => 'zCheckExternalNames','prefix' => 'user'], function () {

            Route::post('/index', 'UserController@index');
            Route::post('/fetch', 'UserController@fetch');
            Route::get('/show/{id}', 'UserController@show');
            Route::put('/update', 'UserController@update');
            Route::post('/search', 'UserController@search');
            Route::put('/updatepassword', 'UserController@updatePassword');
            Route::post('/clear', 'UserController@clear');
            Route::post('/delete', 'UserController@delete');
//            Route::put('/destroy', 'UserController@destroy');

        });

        Route::group(['prefix' => 'group'], function () {
//            Route::post('/', 'GroupController@store');
            Route::post('/index', 'GroupController@index');
            Route::post('/fetch', 'GroupController@fetch');
            Route::get('/{id}', 'GroupController@show');
            Route::post('/search', 'GroupController@search');
            Route::put('/', 'GroupController@update');
//            Route::delete('/{groupId}', 'GroupController@destroy');
            Route::post('/delete', 'GroupController@delete');//批量删除，可以传array
            Route::post('/append', 'GroupController@append');//向组内添加对象，可以传array
            Route::post('/clear', 'GroupController@clear');//从组内移除对象，并不删除，可以传array
            Route::post('/shrink', 'GroupController@shrink');//减少组的属性，不允许它装载某个类型的对象
            Route::post('/share', 'GroupController@share');//减少组的属性，不允许它装载某个类型的对象
            Route::post('/expand', 'GroupController@expand');//给组增加属性，允许它装载更多类型的对象
        });

        Route::group(['prefix' => 'datatype'], function () {
            Route::post('/', 'DatatypeController@store');

            Route::post('/fetch', 'DatatypeController@fetch');
            Route::get('/{id}', 'DatatypeController@show');
            Route::post('/search', 'DatatypeController@search');
            Route::put('/', 'DatatypeController@update');
            Route::delete('/{groupId}', 'DatatypeController@destroy');
            Route::post('/delete', 'DatatypeController@delete');//批量删除，参数名为uuid，可以传array
//            Route::post('/clear', 'DatatypeController@clear');//从组内移除对象，并不删除，参数名为uuid，可以传array
        });

        Route::group(['prefix' => 'role'], function () {
            Route::post('store', 'RoleController@store');
            Route::post('/index', 'RoleController@index');
            Route::post('/fetch', 'RoleController@fetch');
            Route::get('/{id}', 'RoleController@show');
            Route::post('/search', 'RoleController@search');
            Route::put('/', 'RoleController@update');
            Route::delete('/', 'RoleController@delete');//批量删除，参数名为uuid，可以传array
            Route::post('/authorize', 'RoleController@authorize');//给角色授予权限；给用户授予角色
//            Route::post('/clear', 'DatatypeController@clear');//从组内移除对象，并不删除，参数名为uuid，可以传array
        });

        Route::group(['prefix' => 'permission'], function () {
            Route::post('store', 'PermissionController@store');
            Route::post('/index', 'PermissionController@index');
            Route::post('/fetch', 'PermissionController@fetch');
            Route::get('/{id}', 'PermissionController@show');
            Route::post('/search', 'PermissionController@search');
            Route::put('/', 'PermissionController@update');
            Route::delete('/', 'PermissionController@delete');//批量删除，参数名为uuid，可以传array
        });
    });
//baseservice对某个对象的删除\移除出群\
//对某个对象添加操作方法，移除操作方法，
    //某个用户获得某个对象的操作权限
    //某个用户获得角色
    //某个角色获得权限

});
//use TCG\Voyager\Models\Datatype;
//
//$pageApiVersion = \Zijinghua\Zvoyager\Base::getPageApiVersion();
//$controllerNamespace = config('zvoyager.controller.namespace').'\\'.$pageApiVersion.'\\';
//try {
//    foreach (Datatype::all() as $dataType) {
//        $breadController = $dataType->controller
//            ? Str::start($dataType->controller, '\\')
//            : $controllerNamespace.'BaseController';
//
//        Route::resource(strtolower($pageApiVersion).'/'.$dataType->slug, $breadController);
//    }
//} catch (\InvalidArgumentException $e) {
//    throw new \InvalidArgumentException("Custom routes hasn't been configured because: ".$e->getMessage(), 1);
//} catch (\Exception $e) {
//    // do nothing, might just be because table not yet migrated.
//}

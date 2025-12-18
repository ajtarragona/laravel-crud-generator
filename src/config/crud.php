<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Stubs Path
    |--------------------------------------------------------------------------
    |
    | The stubs path directory to generate crud. You may configure your
    | stubs paths here, allowing you to customize the own stubs of the
    | model,controller or view. Or, you may simply stick with the CrudGenerator defaults!
    |
    | Example: 'stub_path' => resource_path('path/to/views/stubs/')
    | Default: "default"
    | Files:
    |       Controller.stub
    |       Model.stub
    |       views/
    |            create.stub
    |            edit.stub
    |            form.stub
    |            form-field.stub
    |            index.stub
    |            show.stub
    |            view-field.stub
    */

    'stub_path' => 'default',

    /*
    |--------------------------------------------------------------------------
    | Application Layout
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application layout. This value is used when creating
    | views for crud. Default will be the "layouts.app".
    |
    */

    'route' => [
        'prefix' =>null, // prefix of the route urls
        'name_prefix' =>null, // prefix of the route names
    ],
    'views' => [
        'layout' => 'layouts.app',
        'layoutContentSection' => 'content',
        'layoutTitleSection' => 'title',
        'path'=> null,  //define the path where views where be stored (relative to from resources/views) with dot separation
    ],
    'model' => [
        'namespace' => 'App\Models',

        /*
         * Do not make these columns $fillable in Model or views
         */
        'unwantedColumns' => [
            'id',
            'password',
            'email_verified_at',
            'remember_token',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ],

    'controller' => [
        'namespace' => 'App\Http\Controllers',
    ],

];

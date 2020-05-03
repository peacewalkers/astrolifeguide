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
| Middleware options can be located in `app/Http/Kernel.php`
|
*/

// Homepage Route
Route::group(['middleware' => ['web', 'checkblocked']], function () {
    Route::get('', 'WelcomeController@welcome')->name('welcome');
    Route::get('services/horoscope', function () {return view('services.horoscope');});
    Route::get('services/marriage', function () {return view('services.marriage');});
    Route::get('services/career', function () {return view('services.career');});
    Route::get('services/child', function () {return view('services.child');});
    Route::get('services/matchmaker', function () {return view('services.matchmaker');});
    Route::get('services/vastu', function () {return view('services.vastu');});
    Route::get('services/rajayoga', function () {return view('services.rajayoga');});
    Route::get('services/sadesati', function () {return view('services.sadesati');});
    Route::get('services/remedies', function () {return view('services.remedies');});
    Route::get('services/kalasarpadosha', function () {return view('services.kalasarpadosha');});
    Route::get('services/muhurtham', function () {return view('services.muhurtham');});
    Route::get('privacypolicy', function () {return view('privacy');});
    Route::get('refundpolicy', function () {return view('refund');});
    Route::get('termsandconditions', function () {return view('refund');});
// route for make payment request using post method
    Route::get('pay', 'RazorpayController@index')->name('pay');
    Route::post('payment', 'RazorpayController@payment')->name('payment');
    Route::get('horoscopepay', 'HoroscopeController@horoscopepay')->name('horoscopepay');

    Route::post('verify', 'RazorpayController@verify')->name('verify');
});

Route::group(['middleware' => 'auth'], function () {
            Route::get('/horoscope/create', 'HoroscopeController@create');
            Route::post('/horoscope', 'HoroscopeController@store');
            Route::get('pay', 'RazorpayController@index')->name('pay');
            Route::post('payment', 'RazorpayController@payment')->name('payment');
            Route::get('horoscopepay', 'HoroscopeController@horoscopepay')->name('horoscopepay');
//            Route::get('thankyou', function () {return view('pages.thankyou');});

    Route::get('/matchmaker/create', 'MatchmakerController@create');
            Route::post('/matchmaker', 'MatchmakerController@store');
    });

// Authentication Routes
    Auth::routes();
    Route::get('/contact', function () {return view('contact');});

// Public Routes
    Route::group(['middleware' => ['web', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'Auth\SocialController@getSocialHandle']);

    // Route to for user to reactivate their user deleted account.
    Route::get('/re-activate/{token}', ['as' => 'user.reactivate', 'uses' => 'RestoreUserController@userReActivate']);
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activation-required', ['uses' => 'Auth\ActivateController@activationRequired'])->name('activation-required');
    Route::get('/logout', ['uses' => 'Auth\LoginController@logout'])->name('logout');
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'twostep', 'checkblocked']], function () {

    //  Homepage Route - Redirect based on user role is in controller.
    Route::get('/home', ['as' => 'public.home',   'uses' => 'UserController@index']);

    // Show users profile - viewable by other users.
    Route::get('profile/{username}', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@show',
    ]);
});

// Registered, activated, and is current user routes.
Route::group(['middleware' => ['auth', 'activated', 'currentUser', 'activity', 'twostep', 'checkblocked']], function () {

    // User Profile and Account Routes
    Route::resource(
        'profile',
        'ProfilesController',
        [
            'only' => [
                'show',
                'edit',
                'update',
                'create',
            ],
        ]
    );
    Route::put('profile/{username}/updateUserAccount', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@updateUserAccount',
    ]);
    Route::put('profile/{username}/updateUserPassword', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@updateUserPassword',
    ]);
    Route::delete('profile/{username}/deleteUserAccount', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@deleteUserAccount',
    ]);

    // Route to show user avatar
    Route::get('images/profile/{id}/avatar/{image}', [
        'uses' => 'ProfilesController@userProfileAvatar',
    ]);

    // Route to upload user avatar.
    Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'ProfilesController@upload']);
        });

// Registered, activated, and is admin routes.

Route::group(['middleware' => ['auth', 'activated', 'role:admin', 'activity', 'twostep', 'checkblocked']], function () {
    Route::resource('/users/deleted', 'SoftDeletesController', [
        'only' => [
            'index', 'show', 'update', 'destroy',
        ],
    ]);

    Route::resource('users', 'UsersManagementController', [
        'names' => [
            'index'   => 'users',
            'destroy' => 'user.destroy',
        ],
        'except' => [
            'deleted',
        ],
    ]);

    Route::post('search-users', 'UsersManagementController@search')->name('search-users');

    Route::resource('themes', 'ThemesManagementController', [
        'names' => [
            'index'   => 'themes',
            'destroy' => 'themes.destroy',
        ],
    ]);

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('routes', 'AdminDetailsController@listRoutes');
    Route::get('active-users', 'AdminDetailsController@activeUsers');

    Route::get('/horoscope/show', 'HoroscopeController@index');
    Route::get('/horoscope/{post}', 'HoroscopeController@show');
    Route::get('/horoscope/{post}/edit', 'HoroscopeController@edit');
    Route::delete('/horoscope/{post}', 'HoroscopeController@destroy');
    Route::get('/horoscopes', 'HoroscopeController@index');
    Route::post('search-horoscopes', 'HoroscopeController@search')->name('search-horoscopes');

    Route::get('/matchmaker/{id}', 'MatchmakerController@show');
    Route::get('/matchmaker/{id}/edit', 'MatchmakerController@edit');
    Route::get('/matchmakers', 'MatchmakerController@index');
    Route::post('search-matchmakers', 'MatchmakerController@search')->name('search-matchmakers');

    Route::post('/search', 'SearchController@filter');

});

Route::redirect('/php', '/phpinfo', 301);

Route::get('/searchfrm', function () {return view('vendor/scripts/blocked-form');});

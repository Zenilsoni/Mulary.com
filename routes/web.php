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
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/admin', function () {
    return view('adminPages.admindashboard');
    return view('dashboard');

});

Route::get('/admin', function () {
   return view('adminPages.admindashboard');

});

Route::group(['prefix' => 'user'], function(){
    Route::get('allusers', 'UserViewController@getUser');

    Route::get('approved', 'UserViewController@getApprovedUser');
    Route::get('compose', function () { return view('userPages.email.compose'); });
});


Route::group(['prefix' => 'userPost'], function(){
    Route::get('facebook', 'UserPostsController@getFacebookPosts');
    Route::get('instagram', 'UserPostsController@getInstagramPosts');

});

Route::group(['prefix' => 'email'], function(){
    Route::get('inbox', function () { return view('userPages.email.inbox'); });
    Route::get('read', function () { return view('userPages.email.read'); });
    Route::get('compose', function () { return view('userPages.email.compose'); });
});


Route::group(['prefix' => 'apps'], function(){
    Route::get('chat', function () { return view('userPages.apps.chat'); });
    Route::get('calendar', function () { return view('userPages.apps.calendar'); });
    Route::get('disapproved', 'UserViewController@getDisApprovedUser');
    Route::get('inprogress', 'UserViewController@getInprogressUser');
   Route::get('approved', 'UserViewController@getApprovedUser');
   Route::get('compose', function () { return view('userPages.email.compose'); });

});

Route::get('/admin', function () {
   return view('adminPages.admindashboard');
});


Route::group(['prefix' => 'user'], function(){
    Route::get('allusers', 'UserViewController@getUser');


    Route::get('approved', 'UserViewController@getApprovedUser');
    Route::get('compose', function () { return view('userPages.email.compose'); });
});


Route::group(['prefix' => 'email'], function(){
    Route::get('inbox', function () { return view('userPages.email.inbox'); });
    Route::get('read', function () { return view('userPages.email.read'); });
    Route::get('compose', function () { return view('userPages.email.compose'); });
});

Route::group(['prefix' => 'apps'], function(){
    Route::get('chat', function () { return view('userPages.apps.chat'); });
    Route::get('calendar', function () { return view('userPages.apps.calendar'); });
    Route::get('disapproved', 'UserViewController@getDisApprovedUser');
    Route::get('inprogress', 'UserViewController@getInprogressUser');
   Route::get('approved', 'UserViewController@getApprovedUser');
   Route::get('compose', function () { return view('userPages.email.compose'); });
});

Route::post('/mailer', 'PhpMailerController@sendEmail');

Route::group(['prefix' => 'email'], function(){
   Route::get('inbox', function () { return view('userPages.email.inbox'); });
   Route::get('read', function () { return view('userPages.email.read'); });
   Route::get('compose', function () { return view('userPages.email.compose'); });
});

Route::group(['prefix' => 'apps'], function(){
   Route::get('chat', function () { return view('userPages.apps.chat'); });
   Route::get('calendar', function () { return view('userPages.apps.calendar'); });
});

//form get
Route::get('/signup', 'college\getCollegeController@getcolleges');

//form validation post
Route::post('/signup', 'Authorization\RegisterController@insert');


//Route::group(['prefix' => 'ui-components'], function() {


    Route::group(['prefix' => 'apps'], function () {
        Route::get('chat', function () {
            return view('userPages.apps.chat');
        });
        Route::get('calendar', function () {
            return view('userPages.apps.calendar');
        });

    });

//form get
    Route::get('/signup', 'college\getCollegeController@getcolleges');

//form validation post
    Route::post('/signup', 'Authorization\RegisterController@insert');

    Route::group(['prefix' => 'ui-components'], function () {


        Route::get('alerts', function () {
            return view('userPages.ui-components.alerts');
        });
        Route::get('badges', function () {
            return view('userPages.ui-components.badges');
        });
        Route::get('breadcrumbs', function () {
            return view('userPages.ui-components.breadcrumbs');
        });
        Route::get('buttons', function () {
            return view('userPages.ui-components.buttons');
        });
        Route::get('button-group', function () {
            return view('userPages.ui-components.button-group');
        });
        Route::get('cards', function () {
            return view('userPages.ui-components.cards');
        });
        Route::get('carousel', function () {
            return view('userPages.ui-components.carousel');
        });
        Route::get('collapse', function () {
            return view('userPages.ui-components.collapse');
        });
        Route::get('dropdowns', function () {
            return view('userPages.ui-components.dropdowns');
        });
        Route::get('list-group', function () {
            return view('userPages.ui-components.list-group');
        });
        Route::get('media-object', function () {
            return view('userPages.ui-components.media-object');
        });
        Route::get('modal', function () {
            return view('userPages.ui-components.modal');
        });
        Route::get('navs', function () {
            return view('userPages.ui-components.navs');
        });
        Route::get('navbar', function () {
            return view('userPages.ui-components.navbar');
        });
        Route::get('pagination', function () {
            return view('userPages.ui-components.pagination');
        });
        Route::get('popovers', function () {
            return view('userPages.ui-components.popovers');
        });
        Route::get('progress', function () {
            return view('userPages.ui-components.progress');
        });
        Route::get('scrollbar', function () {
            return view('userPages.ui-components.scrollbar');
        });
        Route::get('scrollspy', function () {
            return view('userPages.ui-components.scrollspy');
        });
        Route::get('spinners', function () {
            return view('userPages.ui-components.spinners');
        });
        Route::get('tooltips', function () {
            return view('userPages.ui-components.tooltips');
        });
    });

    Route::group(['prefix' => 'advanced-ui'], function () {
        Route::get('cropper', function () {
            return view('userPages.advanced-ui.cropper');
        });
        Route::get('owl-carousel', function () {
            return view('userPages.advanced-ui.owl-carousel');
        });
        Route::get('sweet-alert', function () {
            return view('userPages.advanced-ui.sweet-alert');
        });
    });

    Route::group(['prefix' => 'forms'], function () {
        Route::get('basic-elements', function () {
            return view('userPages.forms.basic-elements');
        });
        Route::get('advanced-elements', function () {
            return view('userPages.forms.advanced-elements');
        });
        Route::get('editors', function () {
            return view('userPages.forms.editors');
        });
        Route::get('wizard', function () {
            return view('userPages.forms.wizard');
        });
    });

    Route::group(['prefix' => 'charts'], function () {
        Route::get('apex', function () {
            return view('userPages.charts.apex');
        });
        Route::get('chartjs', function () {
            return view('userPages.charts.chartjs');
        });
        Route::get('flot', function () {
            return view('userPages.charts.flot');
        });
        Route::get('morrisjs', function () {
            return view('userPages.charts.morrisjs');
        });
        Route::get('peity', function () {
            return view('userPages.charts.peity');
        });
        Route::get('sparkline', function () {
            return view('userPages.charts.sparkline');
        });
    });

    Route::group(['prefix' => 'tables'], function () {
        Route::get('basic-tables', function () {
            return view('userPages.tables.basic-tables');
        });
        Route::get('data-table', function () {
            return view('userPages.tables.data-table');
        });
    });

    Route::group(['prefix' => 'icons'], function () {
        Route::get('feather-icons', function () {
            return view('userPages.icons.feather-icons');
        });
        Route::get('flag-icons', function () {
            return view('userPages.icons.flag-icons');
        });
        Route::get('mdi-icons', function () {
            return view('userPages.icons.mdi-icons');
        });
    });

    Route::group(['prefix' => 'general'], function () {
        Route::get('blank-page', function () {
            return view('userPages.general.blank-page');
        });
        Route::get('faq', function () {
            return view('userPages.general.faq');
        });
        Route::get('invoice', function () {
            return view('userPages.general.invoice');
        });
        Route::get('profile', function () {
            return view('userPages.general.profile');
        });
        Route::get('pricing', function () {
            return view('userPages.general.pricing');
        });
        Route::get('timeline', function () {
            return view('userPages.general.timeline');
        });
    });

    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', function () {
            return view('userPages.auth.login');
        });
        Route::get('register', function () {
            return view('userPages.auth.register');
        });
    });

    Route::group(['prefix' => 'error'], function () {
        Route::get('404', function () {
            return view('userPages.error.404');
        });
        Route::get('500', function () {
            return view('userPages.error.500');
        });
    });

    Route::get('/clear-cache', function () {
        Artisan::call('cache:clear');
        return "Cache is cleared";
    });
    Route::any('/{page?}', function () {
        return View::make('userPages.error.404');
    })->where('page', '.*');

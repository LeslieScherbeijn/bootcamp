<?php
Auth::routes();

Route::get('/complete-registration', 'Auth\RegisterController@completeRegistration');

Route::post('/2fa', function () {
    return redirect(URL()->previous());
})->name('2fa')->middleware('2fa');

/**
 * Public Routes
 */
//The route to the home page on
//the site
Route::get('/', function () {
    return view('welcome');
});


////The route to the profile page on the
////site
//Route::get('/profile', function () {
//    return view('profile', [
//        'articles' => App\Article::latest()->get()
//    ]);
//});
//
//Route::get('/instaFeed', function () {
//    return view('instaFeed');
//});



//The routes for the Articles from the
//Article database
Route::resource('article', 'ArticleController');


//The routes for the Grades from the
//Grade database
Route::resource('grade', 'GradeController');


Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('auth');

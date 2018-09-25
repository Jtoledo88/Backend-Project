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
//Rutas del front
Route::get('/','FrontController@welcome')->name('welcome');
Route::get('/pricing', 'FrontController@pricing')->name('pricing');
Route::get('/product','FrontController@Product')->name('product');  
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/faq','FrontController@faq')->name('faq');
Route::get('/contact', 'FrontController@contact')->name('contact');

//Rutas del Back
Auth::routes();
Route::get('/admin', 'HomeController@admin')->name('admin');

//para que el admin pueda modificar
Route::resource('/admin/faqs', 'FaqController', ['names' => [
    'index'=>'faqs',
    'create'=>'faq.create',
    'store'=>'faq.store',
    'edit'=>'faq.edit',
    'update'=>'faq.update',
    'destroy'=>'faq.destroy'

]]);
 Route::resource('/admin/faq2s', 'Faq2Controller', ['names' => [
     'index'=>'faq2s',
     'create'=>'faq2.create',
     'store'=>'faq2.store',
     'edit'=>'faq2.edit',
     'update'=>'faq2.update',
     'destroy'=>'faq2.destroy'

 ]]);
 Route::resource('/admin/contact', 'ContactController', ['names' => [
    'index'=>'contacts',
    'create'=>'city.create',
    'store'=>'city.store',
    'edit'=>'city.edit',
    'update'=>'city.update',
    'destroy'=>'city.destroy'

]]);
Route::resource('/admin/portadas', 'PortadaController', ['names' => [
    'index'=>'portadas',
    'create'=>'title.create',
    'store'=>'title.store',
    'edit'=>'title.edit',
    'update'=>'title.update',
    'destroy'=>'title.destroy'

]]);
Route::resource('/admin/products', 'ProductController', ['names' => [
    'index'=>'products',
    'create'=>'product.create',
    'store'=>'product.store',
    'edit'=>'product.edit',
    'update'=>'product.update',
    'destroy'=>'product.destroy'

]]);
Route::resource('/admin/clients', 'ClientController', ['names' => [
    'index'=>'clients',
    'create'=>'client.create',
    'store'=>'client.store',
    'edit'=>'client.edit',
    'update'=>'client.update',
    'destroy'=>'client.destroy'

]]);
Route::resource('/admin/pricings', 'PricingController', ['names' => [
    'index'=>'pricings',
    'create'=>'pricing.create',
    'store'=>'pricing.store',
    'edit'=>'pricing.edit',
    'update'=>'pricing.update',
    'destroy'=>'pricing.destroy'

]]);
Route::resource('/admin/reviews', 'ReviewController', ['names' => [
    'index'=>'reviews',
    'create'=>'review.create',
    'store'=>'review.store',
    'edit'=>'review.edit',
    'update'=>'review.update',
    'destroy'=>'review.destroy'

]]);
Route::resource('/admin/sliders', 'SliderController', ['names' => [
    'index'=>'sliders',
    'create'=>'slider.create',
    'store'=>'slider.store',
    'edit'=>'slider.edit',
    'update'=>'slider.update',
    'destroy'=>'slider.destroy'

]]);
Route::resource('/admin/infos', 'InfosController', ['names' => [
    'index'=>'infos',
    'create'=>'infos.create',
    'store'=>'infos.store',
    'edit'=>'infos.edit',
    'update'=>'infos.update',
    'destroy'=>'infos.destroy'

]]);
Route::resource('/admin/abouts', 'AboutController', ['names' => [
    'index'=>'abouts',
    'create'=>'abouts.create',
    'store'=>'abouts.store',
    'edit'=>'abouts.edit',
    'update'=>'abouts.update',
    'destroy'=>'abouts.destroy'

]]);
Route::resource('/admin/services', 'ServiceController', ['names' => [
    'index'=>'services',
    'create'=>'services.create',
    'store'=>'services.store',
    'edit'=>'services.edit',
    'update'=>'services.update',
    'destroy'=>'services.destroy'

]]);
Route::resource('/admin/testimonials', 'TestimonialController', ['names' => [
    'index'=>'testimonials',
    'create'=>'testimonials.create',
    'store'=>'testimonials.store',
    'edit'=>'testimonials.edit',
    'update'=>'testimonials.update',
    'destroy'=>'testimonials.destroy'

]]);
Route::resource('/admin/teams', 'TeamController', ['names' => [
    'index'=>'teams',
    'create'=>'teams.create',
    'store'=>'teams.store',
    'edit'=>'teams.edit',
    'update'=>'teams.update',
    'destroy'=>'teams.destroy'

]]);

//Para el correo del formulario
Route::post('/sendMail','FrontController@sendMail')->name('mail');
Route::get('/email', 'FrontController@email')->name('email');
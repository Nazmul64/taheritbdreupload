<?php declare(strict_types=1);
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomController;
use App\Http\Controllers\ContactinformationsController;
use App\Http\Controllers\ForntendController;
use App\Http\Controllers\OuerServices;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\UserSubscriberController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\SitelogoController;
use App\Http\Controllers\GetintouchController;
use App\Http\Controllers\TestmonialController;
use App\Http\Controllers\PortfolioCategoryController;
use App\Http\Controllers\PortfiloController;
use App\Http\Controllers\portfolioVideoController;
use App\Http\Controllers\ClientssatisfactionController;
use App\Http\Controllers\PostcategoryController;

use Illuminate\Support\Facades\Artisan;
Auth::routes(['register' => false]);

Route::get('/clear-route-cache', function() {
    Artisan::call('route:clear');
    Artisan::call('route:cache');
    return 'Route cache cleared and set again!';
});

Route::get('/', [ForntendController::class, 'index'])->name('forntend');
Route::get('/contact', [ForntendController::class, 'contact'])->name('contact');
Route::get('/portfolio_details/{id}', [ForntendController::class, 'portfolio_details'])->name('portfolio_details');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/profilechange', [UserController::class, 'profilechange'])->name('profilechange');
Route::post('/passwordchange', [UserController::class, 'passwordchange'])->name('passwordchange');
Route::get('/emailoffer', [UserController::class, 'emailoffer'])->name('emailoffer');
Route::get('/singleoffer/{id}', [UserController::class, 'singleoffer'])->name('singleoffer');




Route::prefix('Subscriber')->group(function () {
Route::post('/users/subscriber', [UserSubscriberController::class, 'UserSubscriber'])->name('UserSubscriber');
Route::get('/subscribershow', [UserSubscriberController::class, 'subscribershow'])->name('subscribershow');
Route::get('/subscriberdeleted/{id}', [UserSubscriberController::class, 'subscriberdeleted'])->name('subscriberdeleted');
});


Route::prefix('Experience')->group(function () {
Route::get('/experience.added', [ExperienceController::class, 'experience'])->name('experience.added');
Route::post('/experience/insert', [ExperienceController::class, 'experienceinsert'])->name('experience.insert');
Route::get('/experience/data/show', [ExperienceController::class, 'experiencedatashow'])->name('experiencedata.show');
Route::get('/experience/delete/{id}', [ExperienceController::class, 'experiencedatadelete'])->name('experiencedatadelete.delete');
Route::get('/experiencedataedit.edit/{id}', [ExperienceController::class, 'experienceedit'])->name('experiencedataedit.edit');
Route::post('/experiencedataedit.update/{id}', [ExperienceController::class, 'experienceupdate'])->name('experiencedataupdate.update');
});

Route::prefix('Pricing')->group(function () {
Route::get('/pricing/pricing', [PricingController::class, 'pricing'])->name('pricing.added');
Route::post('/pricing/insert', [PricingController::class, 'pricinginsert'])->name('pricing.insert');
Route::get('/pricing/show/', [PricingController::class, 'pricingedit'])->name('pricingedit.edit');
Route::get('/pricing/delete/{id}', [PricingController::class, 'pricingdelete'])->name('pricing.delete');
Route::get('/pricing/dataedit/{id}', [PricingController::class, 'pricingediting'])->name('pricing.dataedit');
Route::post('/pricing/update/{id}', [PricingController::class, 'pricingupdating'])->name('pricing.update');
});


Route::prefix('Team')->group(function () {
Route::get('/team', [ExpertiseController::class, 'team'])->name('team.added');
Route::post('/team/insert', [ExpertiseController::class, 'teaminsert'])->name('team.insert');
Route::get('/team/show', [ExpertiseController::class, 'teamshow'])->name('team.show');
Route::get('/team.delete/{id}', [ExpertiseController::class, 'teamdelete'])->name('team.delete');
Route::get('/team.editshow/{id}', [ExpertiseController::class, 'editshow'])->name('team.editshow');
Route::post('/team.update/{id}', [ExpertiseController::class, 'teamupdate'])->name('team.update');
});


Route::prefix('Getintouch')->group(function () {
Route::post('/getintouch.insert', [GetintouchController::class, 'getintouch'])->name('getintouch.insert');
Route::get('/getintouch/show', [GetintouchController::class, 'getintouchshow'])->name('getintouch.show');
Route::get('/getintouch.delete/{id}', [GetintouchController::class, 'getintoucdelete'])->name('getintouch.delete');
});
Route::prefix('SiteSetting')->group(function () {
Route::get('/site/setting', [SitelogoController::class, 'sitesetting'])->name('sitesetting.added');
Route::post('/site/setting/insert', [SitelogoController::class, 'datainsert'])->name('datainsert.added');
Route::get('/site/setting/show', [SitelogoController::class, 'sitesettingshow'])->name('sitesetting.show');
Route::get('/sitesetdelete.delete/{id}', [SitelogoController::class, 'sitesettingdelete'])->name('sitesetdelete.delete');
Route::get('/site.edit/{id}', [SitelogoController::class, 'sitesettingedit'])->name('site.edit');
Route::post('/siteseting.update/{id}', [SitelogoController::class, 'sitesetingupdate'])->name('siteseting.update');
});

Route::resource('category', WelcomController::class);
Route::resource('ourservices', OuerServices::class);
Route::resource('ContactinformationsController', ContactinformationsController::class);
Route::resource('about', AboutusController::class);


Route::prefix('portfilo_categorices')->group(function () {
    Route::get('/admin/added', [PortfolioCategoryController::class, 'portfilo'])->name('portfilo.added');
    Route::post('/admin/category_insert', [PortfolioCategoryController::class, 'category_insert'])->name('portfilo.categoryinsert');
    Route::get('/admin/show', [PortfolioCategoryController::class, 'show'])->name('portfilo.show');
    Route::get('/portfilo.edit/{id}', [PortfolioCategoryController::class, 'edit'])->name('portfilo.edit');
    Route::post('/portfilo.update/{id}', [PortfolioCategoryController::class, 'update_category'])->name('portfilo.update');
    Route::get('/portfilo/delete/{id}', [PortfolioCategoryController::class, 'delete_category'])->name('portfilo.delete');
});



Route::prefix('portfilo')->group(function () {
    Route::get('/admin/main_portfilos', [PortfiloController::class, 'added'])->name('portfilos.added');
    Route::post('/admin/main_portfilos', [PortfiloController::class, 'main_portfilos_insert'])->name('portfilos.insert');
    Route::get('/admin/main_index', [PortfiloController::class, 'index'])->name('index.added');
    Route::get('/admin/edit/{id}', [PortfiloController::class, 'edit_portfilos'])->name('edit.portfilos');
    Route::post('/admin/edit/{id}', [PortfiloController::class, 'update_portfilos'])->name('update.portfilos');
    Route::get('/admin/delete/{id}', [PortfiloController::class, 'delete_portfilos'])->name('delete.portfilos');

    Route::get('/admin/main_portfilos/photo_gallery/show/{id}', [PortfiloController::class, 'photo_gallery'])->name('portfolio_photo_gallery_show');
    Route::post('/admin/main_portfilos/photo_gallery_store', [PortfiloController::class, 'photo_gallery_store'])->name('portfolio_photo_gallery_store');
    Route::get('/admin/main_portfilos/photo_gallery_edit/{id}', [PortfiloController::class, 'photo_gallery_edit'])->name('portfolio_photo_gallery_edite');
    Route::post('/admin/main_portfilos/photo_gallery_update/{id}', [PortfiloController::class, 'photo_gallery_update'])->name('portfolio_photo_gallery_update');
    Route::get('/admin/main_portfilos/photo_gallery_delete/{id}', [PortfiloController::class, 'photo_gallery_delete'])->name('photo_gallery_delete');

});
Route::prefix('portfilo_videos')->group(function () {
    Route::get('/admin/main_portfilos/protfolio_video/show/{id}', [portfolioVideoController::class, 'portfolio_video'])->name('portfolio_video_gallery_show');
    Route::post('/admin/main_portfilos/protfolio_video/store', [portfolioVideoController::class, 'portfolio_video_store'])->name('portfolio_video_gallery_store');
    Route::get('/admin/main_portfilos/photo_video/protfolio_video_edit/{id}', [portfolioVideoController::class, 'portfolio_video_edit'])->name('portfolio_video_gallery_edit');
    Route::post('/admin/main_portfilos/photo_video/protfolio_video_update/{id}', [portfolioVideoController::class, 'portfolio_video_update'])->name('portfolio_video_gallery_update');
    Route::get('/admin/main_portfilos/photo_video/protfolio_video_delete/{id}', [portfolioVideoController::class, 'portfolio_video_delete'])->name('portfolio_video_delete');

});

Route::prefix('project')->group(function () {
    Route::get('/admin/added', [ClientssatisfactionController::class, 'clientsatifactions'])->name('clientsatifactions');
    Route::post('/admin/added/store', [ClientssatisfactionController::class, 'store'])->name('clientsatifactions.store');
    Route::get('/admin/added/show', [ClientssatisfactionController::class, 'show'])->name('clientsatifactionsshow');
    Route::get('project/edit/{id}', [ClientssatisfactionController::class, 'projectedit'])->name('projectedit');
    Route::post('project/update/{id}', [ClientssatisfactionController::class, 'update'])->name('update');
    Route::get('project/delete/{id}', [ClientssatisfactionController::class, 'delete'])->name('delete');

});
Route::prefix('testmonials')->group(function () {
    Route::get('/testmonials/added', [TestmonialController::class, 'testmonials'])->name('testmonials.added');
    Route::post('/testmonials/insert', [TestmonialController::class, 'testmonialsinsert'])->name('testmonials.insert');
    Route::get('/testmonials/index', [TestmonialController::class, 'index'])->name('index');
    Route::get('/testmonials/edit/{id}', [TestmonialController::class, 'edit'])->name('edit.testmonial');
    Route::post('/testmonials/update/{id}', [TestmonialController::class, 'updatetestomonila'])->name('updatetestomonila');
    Route::get('/testmonials/deletetestmonail/{id}', [TestmonialController::class, 'deletetestmonail'])->name('deletetestmonail');

});


Route::prefix('PostCategory')->group(function () {
    Route::get('/added', [PostcategoryController::class, 'postCategory'])->name('postcategory');
});

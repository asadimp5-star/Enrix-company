<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ResorceController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;





// Route::prefix('{locale}')->where(['locale'=>'en|nl'])->group(function(){});

Route::prefix('admin')->group(function(){
    Route::get('/',[IndexController::class,'index'])->name('/admin');
    // Route::post('/status/{comment}',[CommentController::class,'status'])->name('admin.comment.status');
    // Route::delete('/delete/{comment}',[CommentController::class,'destroy'])->name('admin.comment.destroy');
    Route::post('/show-message/{id}',[MessageController::class,'show'])->name('admin.comment.show');
    // Route::put('/reply/{item}',[CommentController::class,'update'])->name('admin.comment.update');
    // Route::get('/',[HomeController::class,'index'])->name('/admin');
    Route::post('/message',[MessageController::class,'create'])->name('admin.message.create');
    Route::delete('/delet/{id}',[MessageController::class,'destroy'])->name('admin.message.destroy');


    Route::prefix('/resorces')->group(function(){
        Route::get('/resorce',[ResorceController::class,'index'])->name('admin.resorses.resorse');
        Route::get('/search-post',[ResorceController::class,'searchPost'])->name('admin.resorces.search-post');
        Route::post('/p-status/{id}',[ResorceController::class,'status'])->name('admin.resorces.status');
        Route::delete('/p-delete/{id}',[ResorceController::class,'destroy'])->name('admin.resorces.delet');
        Route::get('/create',[ResorceController::class,'create'])->name('admin.resorces.create');
        Route::post('/add',[ResorceController::class,'store'])->name('admin.resorces.store');
        Route::get('/edit-post/{id}',[ResorceController::class,'edit'])->name('admin.resorces.edite');
        Route::put('/edit-Upost/{id}',[ResorceController::class,'update'])->name('admin.resorces.update');

        
        
    });
    Route::prefix('users')->group(function(){
        // Route::get('/user',[UserController::class,'index'])->name('admin.users.user');
        // Route::post('/statu/{user}',[UserController::class,'status'])->name('admin.users.satatu');
        // Route::delete('/delete/{user}',[UserController::class,'destroy'])->name('admin.users.delete');
        // Route::get('/create',[UserController::class,'create'])->name('admin.users.create');
        // Route::post('/add',[UserController::class,'store'])->name('admin.users.store');
        // Route::get('/show/{id}',[UserController::class,'show'])->name('admin.users.show');
        // Route::get('/observe/{pos}',[UserController::class,'edit'])->name('admin.users.edit');
        // Route::get('/user-dashboard',[UserController::class,'showUser'])->name('admin.users.user-dashboard');
        // Route::post('loging-out',[AuthenticController::class,'logOute'])->name('logOute');
        // Route::get('/user-aouth',[UserController::class,'aouth'])->name('admin.users.user-aouth');
        // Route::get('member-profile',[UserController::class,'memberProfile'])->name('admin.users.member-profile');
        // Route::get('/User-pass-edit/{user}',[UserController::class,'showUserPass'])->name('admin.users.user-pass');
        // Route::put('/User-pass-update/{user}',[UserController::class,'userPass'])->name('admin.users.user-passs');
        // Route::get('/User-email-edit/{user}',[UserController::class,'useremail'])->name('admin.users.user-email');
        // Route::put('/User-email-update/{user}',[UserController::class,'UserEmailCheng'])->name('admin.users.user-emaile');
        // Route::get('/member-pass-edit/{user}',[UserController::class,'memberPass'])->name('admin.users.member-pass');
        // Route::put('/member-email-update/{user}',[UserController::class,'memberEmailCheng'])->name('admin.users.member-emaile');
        // Route::get('/member-email-edit/{user}',[UserController::class,'memberEmail'])->name('admin.users.member-email');



        

    });

    Route::prefix('faq')->group(function(){
        Route::get('/index',[FaqController::class,'index'])->name('admin.FAQ.index');
        Route::get('/createe',[FaqController::class,'create'])->name('admin.faq.createe');
        Route::post('/storee',[FaqController::class,'store'])->name('admin.faq.store');
        Route::post('/f-status/{id}',[FaqController::class,'status'])->name('admin.faq.status');
        Route::delete('/f-delete/{id}',[FaqController::class,'destroy'])->name('admin.faq.delete');
        Route::get('/search-faq',[FaqController::class,'searchQue'])->name('admin.faq.search-faq');
        Route::get('/edit-faq/{id}',[FaqController::class,'edit'])->name('admin.faq.edite');
        Route::put('/faq-Upost/{id}',[FaqController::class,'update'])->name('admin.faq.update');




        });      

        Route::prefix('/content')->group(function(){
        Route::get('/index',[IndexController::class,'content'])->name('admin.content.index');
        // Route::get('/edite/{first}',[FirstPageController::class,'edit'])->name('admin.content.first-page.edit');
        // Route::put('/update/{first}',[FirstPageController::class,'update'])->name('admin.content.first-page.update');
        // Route::get('/first-page',[HomeController::class,'firstPage'])->name('admin.content.first-page');
        // Route::post('/storee',[FirstPageController ::class,'store'])->name('admin.content.first-page.store');


        // Route::get('/gallery',[HomeController::class,'gallery'])->name('admin.content.gallery');
        // Route::get('/add-img',[GalleryController::class,'create'])->name('admin.content.gallery.create');
        // Route::post('/add',[GalleryController::class,'store'])->name('admin.content.gallery.store');
        // Route::post('/statuus/{item}',[GalleryController::class,'status'])->name('admin.content.gallery.status');
        // Route::delete('/delette/{item}',[GalleryController::class,'destroy'])->name('admin.content.gallery.destroy');
        // Route::get('/showw/{item}',[GalleryController::class,'edit'])->name('admin.content.gallery.edit');
        // Route::put('/g-update/{item}',[GalleryController::class,'update'])->name('admin.content.gallery.update');

        // Route::get('/about-us',[HomeController::class,'aboutUs'])->name('admin.content.about-us');
        // Route::post('/store',[AboutsController::class,'store'])->name('admin.content.about-us.store');
        // Route::get('/edit/{abouts}',[AboutsController::class,'edit'])->name('admin.content.abouts.edit');
        // Route::put('/updat/{abouts}',[AboutsController::class,'update'])->name('admin.content.abouts.updat');

        Route::get('/add-services',[ServiceController::class,'serviceIndx'])->name('admin.content.services');
        Route::get('/services/{id}',[ServiceController::class,'servicePage'])->name('admin.content.services-page');
        Route::post('/sstor',[ServiceController::class,'store'])->name('admin.content.services.store');
        Route::put('/updatee/{serve}',[ServiceController::class,'update'])->name('admin.content.services.update');
        });
        Route::prefix('/settings')->group(function(){
        Route::get('/profile',[IndexController::class,'showProfile'])->name('admin.settings.showProfile');
        });

    });
    

    

    




Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/for-partners',[HomeController::class,'partners'])->name('partners');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/resorces',[HomeController::class,'resorces'])->name('resorces');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/article',[HomeController::class,'article'])->name('article');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

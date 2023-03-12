<?php

use Illuminate\Support\Facades\Route;
use Peeyush\ContactUs\Http\Controllers\ContactUsController;

Route::prefix('contact-us')->group(function () {

    Route::get('',[ContactUsController::class,'index'])->name('contact-us.contact-us.index');;
    Route::post('',[ContactUsController::class,'send'])->name('contact-us.contact-us.send');
});


?>

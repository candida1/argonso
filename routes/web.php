<?php

use App\Http\Controllers\BillingController;
use App\Http\Controllers\Example\TagController;
use App\Http\Controllers\Example\CategoryController;
use App\Http\Controllers\Example\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\ReportModuleController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\Case_customerController;
use App\Http\Controllers\Change_historyController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\Evidence_sectionController;





use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });


    Route::get('/icons', function () {
        return view('examples.icons.index');
    })->name('icons.index');



    //rutas de resource articles
    Route::resource('/articles', ArticleController::class);
     //rutas de resource tags
    Route::resource('/tags', TagController::class);

      Route::resource('activities', ActivityController::class);
      Route::resource('lawyers', LawyerController::class);
      Route::resource('reportmodules', ReportModuleController::class);
      Route::resource('customers', CustomerController::class);
      Route::resource('agendas', AgendaController::class);
      Route::resource('billings', BillingController::class);
      Route::resource('case_customers', Case_customerController::class);
      Route::resource('change_histories', Change_historyController::class);
      Route::resource('documents', DocumentController::class);
      Route::resource('evidence_sections', Evidence_sectionController::class);
});




require __DIR__ . '/auth.php';

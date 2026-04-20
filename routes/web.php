<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\UserController;
use App\Models\Destination;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\ReviewController;

require __DIR__.'/auth.php';

Route::get('/das`hboard', function () {
    return redirect()->route('destinations.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', function () {
    return view('welcome');
});
Route::get(uri: "/halo", action: function () {
    $name = "Firdaus";
    $hobis = ["membaca","menulis","coding"];
    
    return view( view:'halo', data: compact('name','hobis'));
});

Route::get("/switch", function () {
    $role = "penulis";
    return view ( view: 'switch', data:compact('role'));
});

Route::get("/master", function () {
    return view( view: 'pages.home');
});

Route::get( "/about", function () {
    return view( view: 'pages.about');
});

Route::get( "/destinasi", function () {
    $destinasi = [
        "nama" => "Bali",
        "harga" => 5000000,
        "lokasi" => "Denpasar, Bali",
        "durasi" => "4 Hari 3 Malam",
        "transportasi" => "Pesawat",
        "hotel" => "Bintang 4",
        "rating" => 4.8,
        "fasilitas" => ["Hotel", "Sarapan", "Tour Guide", "Transport Lokal"],
    ];
    return view('pages.destinasi',compact("destinasi"));
});

// Route::get("/Destinations", function () {

//     $destination = Destination::all();
//     return view( 'pages.indexDestinasi', compact("destinations"));
// });

// Route::get("/destination/{id}", function ($id) {

//     $destination = Destination::find($id);
//     return view( 'pages.detaildestinasi', compact("destination"));
// });

Route::prefix('destinations')->name('destinations.')->middleware('auth')->group(function () { 
    Route::get("/",action: [DestinationController::class, 'index'])->name('index');
     Route::get("/create", [DestinationController::class, 'create'])->name('create');
    Route::get( "/{id}", [DestinationController::class,'show'])->name('show');
    Route::post("/", [DestinationController::class, 'store'])->name('store');
    Route::delete('/{id}', [DestinationController::class, 'delete'])->name('delete');
    Route::get("/{id}/edit",[DestinationController::class, 'edit'])->name('edit');
    Route::put("/{id}/update", [DestinationController::class, 'update'])->name('update');
});

Route::prefix('users')->name('users.')->middleware('auth')->group(function() {
    Route::get("/",[UserController::class, 'index'])->name('index');
    Route::get("/create", [UserController::class, 'create'])->name('create');
    Route::post("/", [UserController::class, 'store' ])->name('store');
    Route::delete('/{id}', [UserController::class, 'delete'])->name('delete');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('update');
    Route::get( "/{id}", [UserController::class,'show'])->name('show');
});

Route::prefix('attractions')->name('attractions.')->middleware('auth')->group(function () {
    Route::get("/", [AttractionController::class, 'index'])->name('index');
    Route::get("/create", [AttractionController::class, 'create'])->name('create');
    Route::post("/", [AttractionController::class, 'store'])->name('store');
    Route::delete('/{id}', [AttractionController::class, 'delete'])->name('delete');
    Route::get("/{id}/edit", [AttractionController::class, 'edit'])->name('edit');
    Route::put("/{id}/update", [AttractionController::class, 'update'])->name('update');
    Route::get("/{id}", [AttractionController::class, 'show'])->name('show');
});


Route::resource('reviews', ReviewController::class)->middleware('auth');
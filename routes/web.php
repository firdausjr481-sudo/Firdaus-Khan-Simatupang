<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\UserController;
use App\Models\Destination;
use Illuminate\Support\Facades\Route;


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

Route::get(
    uri: "/destinations",
    action: [DestinationController::class, 'index']
);

Route::get( "/detaildestinasi/{id}", [DestinationController::class,'show']);

Route::get("/destinations/create", [DestinationController::class, 'create']);
Route::post("/destinations", [DestinationController::class, 'store']);

Route::delete('/destination/{id}', [DestinationController::class, 'delete']);

Route::get("/destinations/{id}/edit",[DestinationController::class, 'edit']);
Route::put("/destinations/{id}/update", [DestinationController::class, 'update']);

Route::get(
    "/users",
    [UserController::class, 'index']
);


Route::get("/users/create", [UserController::class, 'create']);
Route::post("/users", [UserController::class, 'store' ]);

Route::delete('/user/{id}', [UserController::class, 'delete']);

Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::get( "/detailuser/{id}", [UserController::class,'show']);
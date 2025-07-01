<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

Route::view('/', 'home');



Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
// Route::get('/properties/{id}', [PropertyController::class, 'show'])->name('properties.show'); // pour les détails
Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', function (\Illuminate\Http\Request $request) {
    // Validation simple
    $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // Ici tu peux plus tard : envoyer un email, enregistrer en base, etc.
    return back()->with('success', 'Votre message a bien été envoyé. Merci !');
})->name('contact.send');

// Si tu veux simuler sans base :
Route::get('/properties', function () {
    return view('properties.index');
})->name('properties.index');


// Filtrer les biens
// Pour simuler sans base de données, on peut utiliser un tableau statique

Route::get('/properties', function (\Illuminate\Http\Request $request) {
    $allProperties = [
        [
            'id' => 1,
            'title' => 'Villa à Dakar',
            'city' => 'Dakar',
            'type' => 'villa',
            'price' => 85000000,
            'image' => asset('images/terrain.jpg'),
            'description' => 'Villa luxueuse avec piscine.',
        ],
        [
            'id' => 2,
            'title' => 'Appartement à Mbour',
            'city' => 'Mbour',
            'type' => 'appartement',
            'price' => 45000000,
            'image' => asset('images/terrain.jpg'),
            'description' => 'Appartement moderne au centre-ville.',
        ],
        [
            'id' => 3,
            'title' => 'Terrain à Saly',
            'city' => 'Saly',
            'type' => 'terrain',
            'price' => 30000000,
            'image' => asset('images/terrain.jpg'),
            'description' => 'Terrain viabilisé proche de la plage.',
        ],
    ];

    $filtered = collect($allProperties)->filter(function ($property) use ($request) {
        return
            (!$request->city || strtolower($property['city']) === strtolower($request->city)) &&
            (!$request->type || strtolower($property['type']) === strtolower($request->type)) &&
            (!$request->price_max || $property['price'] <= (int) $request->price_max);
    });

    return view('properties.index', [
        'properties' => $filtered,
        'filters' => $request->only(['city', 'type', 'price_max']),
    ]);
})->name('properties.index');




// Déposer une annonce
// Pour simuler sans base de données, on peut utiliser une vue simple
Route::get('/deposer', function () {
    return view('properties.create');
})->name('properties.create');

Route::post('/deposer', function (\Illuminate\Http\Request $request) {
    // Validation
    $request->validate([
        'title' => 'required|string|max:255',
        'type' => 'required|string',
        'city' => 'required|string',
        'price' => 'required|numeric|min:1000',
        'description' => 'required|string|min:10',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);




    // Plus tard : enregistrement en base + upload image
    return back()->with('success', 'Votre annonce a bien été déposée !');
})->name('properties.store');


// Détails d'un bien
// Pour simuler sans base de données, on peut utiliser un tableau statique
Route::get('/properties/{id}', function ($id) {
    $allProperties = [
        1 => [
            'title' => 'Villa à Dakar',
            'description' => 'Grande villa avec piscine, jardin et garage.',
            'city' => 'Dakar',
            'type' => 'villa',
            'price' => 85000000,
            'image' => asset('images/terrain.jpg'),
        ],
        2 => [
            'title' => 'Appartement à Mbour',
            'description' => 'Bel appartement avec balcon.',
            'city' => 'Mbour',
            'type' => 'appartement',
            'price' => 45000000,
            'image' => 'https://via.placeholder.com/800x500?text=Appart+Mbour',
        ],
        3 => [
            'title' => 'Terrain à Saly',
            'description' => 'Terrain viabilisé proche plage.',
            'city' => 'Saly',
            'type' => 'terrain',
            'price' => 30000000,
            'image' => 'https://via.placeholder.com/800x500?text=Terrain+Saly',
        ],
    ];

    if (!isset($allProperties[$id])) {
        abort(404);
    }

    return view('properties.show', ['property' => $allProperties[$id]]);
})->name('properties.show');

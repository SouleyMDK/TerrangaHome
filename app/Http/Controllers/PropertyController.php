<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{


    
    // Affiche la liste des biens
    public function index()
{
    // Biens simulés (mock)
    $properties = [
        [
            'id' => 1,
            'title' => 'Villa à Dakar',
            'description' => 'Une belle villa avec piscine et jardin.',
            'city' => 'Dakar',
            'price' => 85000000,
            'image' => asset('images/terrain.jpg'),
        ],
        [
            'id' => 2,
            'title' => 'Appartement à Thiès',
            'description' => 'Appartement moderne au centre-ville.',
            'city' => 'Thiès',
            'price' => 45000000,
            'image' => asset('images/terrain.jpg'),
        ],
        [
            'id' => 3,
            'title' => 'Terrain à vendre à Saly',
            'description' => 'Terrain viabilisé proche de la mer.',
            'city' => 'Saly',
            'price' => 30000000,
            'image' => asset('images/terrain.jpg'),
        ],
    ];

    return view('properties.index', compact('properties'));
}


    // Affiche un bien en détail
    public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('properties.show', compact('property'));
    }
}

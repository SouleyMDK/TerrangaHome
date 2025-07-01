@extends('layouts.app')

@section('content')
<!-- Hero Carrousel Fullscreen -->
<div id="heroCarousel" class="carousel slide carousel-fade w-100 vh-100"
     data-bs-ride="carousel"
     data-bs-interval="5000"
     data-bs-pause="false">
  
    <div class="carousel-inner h-100">
        <!-- Contrôles -->
<button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="visually-hidden">Précédent</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="visually-hidden">Suivant</span>
</button>

        @php
            $heroSlides = [
                [
                    'title' => 'Bienvenue sur TerrangaHome',
                    'description' => 'Trouvez la maison de vos rêves au Sénégal.',
                    'image' => asset('images/hero.jpg'),
                ],
                [
                    'title' => 'Des biens partout au Sénégal',
                    'description' => 'Maisons, appartements, terrains — à vendre ou à louer.',
                    'image' => asset('images/hero1.jpg'),
                ],
                [
                    'title' => 'Déposez votre annonce',
                    'description' => 'Publiez facilement vos biens et touchez de nouveaux clients.',
                    'image' => 'https://via.placeholder.com/1600x900?text=Maison+3',
                ]
            ];
        @endphp

        @foreach ($heroSlides as $index => $slide)
            <div class="carousel-item h-100 {{ $index === 0 ? 'active' : '' }}">
                <div class="w-100 h-100 position-relative" style="background: url('{{ $slide['image'] }}') center center / cover no-repeat;">
                    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.6); z-index: 1;"></div>
                    <div class="position-relative  z-2 h-100 d-flex flex-column justify-content-center align-items-center text-white text-center px-3">
                        <h1 class="display-3 fw-bold">{{ $slide['title'] }}</h1>
                        <p class="lead mt-3">{{ $slide['description'] }}</p>
                        <a href="{{ route('properties.index') }}" class="btn bg-primary  btn-lg mt-4">Explorer les biens</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <!-- Formulaire de recherche -->
<section class="bg-white py-4 shadow position-relative mt-5"  style="margin-top: -50px; z-index: 5;">
    <div class="container">
        <form action="{{ route('properties.index') }}" method="GET" class="row g-3 justify-content-center">
            <div class="col-md-3">
                <input type="text" name="city" class="form-control" placeholder="Ville (ex: Dakar)">
            </div>
            <div class="col-md-3">
                <select name="type" class="form-select">
                    <option value="">Type de bien</option>
                    <option value="Maison">Maison</option>
                    <option value="Appartement">Appartement</option>
                    <option value="Terrain">Terrain</option>
                    <option value="Bureau">Bureau</option>
                </select>
            </div>
            <div class="col-md-3">
                <input type="number" name="max_price" class="form-control" placeholder="Prix max (FCFA)">
            </div>
            <div class="col-md-2 d-grid">
                <button type="submit" class="btn bg-primary">Rechercher</button>
            </div>
        </form>
    </div>
</section>


    <!-- Contrôles -->
    <button class="carousel-control-prev " type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>




<!-- Biens en vedette (sans carrousel) -->
<section class="container my-5 ">
    <h2 class="text-center mb-4 fw-bold text-primary">Biens en vedette</h2>
    <div class="row justify-content-center">
        @php
            $featuredProperties = [
                [
                    'title' => 'Villa moderne à Dakar',
                    'description' => 'Superbe villa avec piscine, 4 chambres et jardin.',
                    'image' => asset('images/villa.jpg'),
                ],
                [
                    'title' => 'Appartement à Mbour',
                    'description' => 'Appartement 3 pièces à 5 minutes de la plage.',
                    'image' => asset('images/appartement.jpg'),
                ],
                [
                    'title' => 'Terrain à Saly',
                    'description' => 'Terrain viabilisé proche de toutes commodités.',
                    'image' => asset('images/terrain.jpg'),
                ]
            ];
        @endphp

        @foreach ($featuredProperties as $property)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $property['image'] }}" class="card-img-top" alt="{{ $property['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $property['title'] }}</h5>
                        <p class="card-text">{{ $property['description'] }}</p>
                        <a href="{{ route('properties.index') }}" class="btn btn-outline-primary">Voir plus</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>


    <button class="carousel-control-prev" type="button" data-bs-target="#featuredCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#featuredCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
    </button>
</div>

<!-- Services Section -->
<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-4">
            <i class="bi bi-house-door-fill fs-1 text-primary"></i>
            <h5 class="mt-3">Biens variés</h5>
            <p>Nous proposons un large choix de maisons, appartements, terrains et bureaux dans tout le Sénégal.</p>
        </div>
        <div class="col-md-4">
            <i class="bi bi-people-fill fs-1 text-primary"></i>
            <h5 class="mt-3">Accompagnement</h5>
            <p>Nous vous assistons dans toutes les étapes : recherche, visites, négociation, démarches administratives.</p>
        </div>
        <div class="col-md-4">
            <i class="bi bi-cash-stack fs-1 text-primary"></i>
            <h5 class="mt-3">Prix transparents</h5>
            <p>Des offres claires, à des prix compétitifs. Aucun frais caché, tout est annoncé dès le départ.</p>
        </div>
    </div>
</div>

<!-- Appel à l'action -->
<div class="bg-primary text-white text-center py-5">
    <h2 class="mb-3">Vous êtes propriétaire ?</h2>
    <p>Publiez gratuitement votre bien sur TerrangaHome et touchez des centaines de visiteurs par jour.</p>
    <a href="{{ route('properties.create') }}" class="btn btn-light mt-2">Déposer une annonce</a>
</div>

<!-- Section Témoignages -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h2 class="mb-4 fw-bold text-primary text-success">Ils nous font confiance</h2>

        <div class="row justify-content-center">
            @php
                $testimonials = [
                    [
                        'name' => 'Fatou Ndiaye',
                        'text' => 'Grâce à TerrangaHome, j’ai trouvé une maison à Dakar en moins d’une semaine ! Service rapide et professionnel.',
                        'photo' => 'https://randomuser.me/api/portraits/women/44.jpg'
                    ],
                    [
                        'name' => 'Mamadou Diop',
                        'text' => 'Une équipe sérieuse et un site facile à utiliser. Je recommande à tous ceux qui cherchent un bien au Sénégal.',
                        'photo' => 'https://randomuser.me/api/portraits/men/32.jpg'
                    ],
                    [
                        'name' => 'Aminata Sow',
                        'text' => 'J’ai pu louer mon appartement très rapidement. Merci à toute l’équipe de TerrangaHome !',
                        'photo' => 'https://randomuser.me/api/portraits/women/68.jpg'
                    ]
                ];
            @endphp

            @foreach ($testimonials as $testimonial)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body text-center">
                            <img src="{{ $testimonial['photo'] }}" class="rounded-circle mb-3" width="80" height="80" alt="photo">
                            <p class="fst-italic">"{{ $testimonial['text'] }}"</p>
                            <h6 class="fw-bold mt-3">{{ $testimonial['name'] }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

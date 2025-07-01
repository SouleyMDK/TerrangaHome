@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">À propos de TerrangaHome</h1>

    <div class="row align-items-center">
        <div class="col-md-6 mb-4">
            <img src="https://via.placeholder.com/600x400?text=Notre+équipe" alt="Notre équipe" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <p class="lead">
                TerrangaHome est une agence immobilière digitale basée au Sénégal, spécialisée dans la vente, la location et la gestion de biens immobiliers.
            </p>
            <p>
                Nous accompagnons nos clients dans toutes les étapes de leur projet : de la recherche à la signature, en passant par les visites et la négociation.
                Notre mission est de rendre l'immobilier plus accessible, plus transparent, et plus simple pour tous.
            </p>
            <p>
                Forts d'une équipe expérimentée et passionnée, nous mettons tout en œuvre pour satisfaire nos clients, particuliers comme professionnels.
            </p>
        </div>
    </div>

    <div class="mt-5">
        <h3>Pourquoi choisir TerrangaHome ?</h3>
        <ul class="list-group list-group-flush mt-3">
            <li class="list-group-item">✔️ Une large sélection de biens immobiliers</li>
            <li class="list-group-item">✔️ Des conseils personnalisés et un accompagnement complet</li>
            <li class="list-group-item">✔️ Une plateforme intuitive et sécurisée</li>
            <li class="list-group-item">✔️ Une présence locale forte et une bonne connaissance du marché sénégalais</li>
        </ul>
    </div>
</div>
@endsection

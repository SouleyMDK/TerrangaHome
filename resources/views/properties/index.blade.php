@extends('layouts.app')

@section('content')
<div class="container mt-5 py-4">
    <h1 class="mb-4">Nos biens disponibles</h1>

    <!-- Filtres -->
    <form action="{{ route('properties.index') }}" method="GET" class="row g-3 mb-4">
        <div class="col-md-3">
            <input type="text" name="city" class="form-control" placeholder="Ville (ex: Dakar)"
                   value="{{ $filters['city'] ?? '' }}">
        </div>
        <div class="col-md-3">
            <select name="type" class="form-select">
                <option value="">-- Type de bien --</option>
                <option value="villa" {{ ($filters['type'] ?? '') === 'villa' ? 'selected' : '' }}>Villa</option>
                <option value="appartement" {{ ($filters['type'] ?? '') === 'appartement' ? 'selected' : '' }}>Appartement</option>
                <option value="terrain" {{ ($filters['type'] ?? '') === 'terrain' ? 'selected' : '' }}>Terrain</option>
            </select>
        </div>
        <div class="col-md-3">
            <input type="number" name="price_max" class="form-control" placeholder="Prix max (FCFA)"
                   value="{{ $filters['price_max'] ?? '' }}">
        </div>
        <div class="col-md-3">
            <button class="btn btn-primary w-100">Filtrer</button>
        </div>
    </form>

    <!-- Résultats -->
    <div class="row">
        @forelse ($properties as $property)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $property['image'] }}" class="card-img-top" alt="{{ $property['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $property['title'] }}</h5>
                        <p class="card-text">{{ $property['city'] }} – {{ ucfirst($property['type']) }}</p>
                        <p class="card-text">{{ Str::limit($property['description'], 100) }}</p>
                        <p><strong>{{ number_format($property['price'], 0, ',', ' ') }} FCFA</strong></p>
                        <a href="{{ route('properties.show', $property['id']) }}" class="btn btn-outline-primary btn-sm">Voir plus</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">Aucun bien ne correspond à votre recherche.</div>
            </div>
        @endforelse
    </div>
</div>
@endsection

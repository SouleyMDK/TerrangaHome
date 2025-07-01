@extends('layouts.app')

@section('content')
<div class="container py-5">
    <a href="{{ route('properties.index') }}" class="btn btn-outline-secondary mb-3">← Retour aux biens</a>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ $property['image'] }}" alt="{{ $property['title'] }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2>{{ $property['title'] }}</h2>
            <p class="text-muted">{{ ucfirst($property['type']) }} à {{ $property['city'] }}</p>
            <p>{{ $property['description'] }}</p>
            <h4 class="mt-3 text-primary">{{ number_format($property['price'], 0, ',', ' ') }} FCFA</h4>
        </div>
    </div>
</div>
@endsection

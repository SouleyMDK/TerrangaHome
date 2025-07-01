@extends('layouts.app')

@section('content')
<section class="container py-5 mt-5">
    <div class="row">
        <!-- Infos de contact -->
        <div class="col-md-5 mb-4">
            <h2 class="text-primary fw-bold mb-4">Contactez-nous</h2>
            <p>Nous sommes à votre écoute pour toute question, demande de renseignement ou proposition.</p>

            <ul class="list-unstyled mt-4">
                <li class="mb-3">
                    <i class="bi bi-geo-alt-fill text-primary me-2"></i>
                    <strong>Adresse :</strong> Dakar, Sénégal
                </li>
                <li class="mb-3">
                    <i class="bi bi-envelope-fill text-primary me-2"></i>
                    <strong>Email :</strong> contact@terrangahome.sn
                </li>
                <li class="mb-3">
                    <i class="bi bi-phone-fill text-primary me-2"></i>
                    <strong>Téléphone :</strong> +221 77 000 00 00
                </li>
                <li>
                    <i class="bi bi-clock-fill text-primary me-2"></i>
                    <strong>Horaires :</strong> Lun - Ven : 9h à 18h
                </li>
            </ul>

            <!-- Réseaux sociaux -->
            <div class="mt-4">
                <h6>Suivez-nous</h6>
                <a href="#" class="text-primary me-3"><i class="bi bi-facebook fs-4"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-instagram fs-4"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-twitter-x fs-4"></i></a>
            </div>
        </div>

        <!-- Formulaire -->
        <div class="col-md-7">
            <h4 class="mb-4">Envoyez-nous un message</h4>
            <form action="#" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom complet</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Adresse email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="ex: vous@mail.com">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Votre message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Écrivez votre message ici..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary px-4">Envoyer</button>
            </form>
        </div>
    </div>
</section>
@endsection

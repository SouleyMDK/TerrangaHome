<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>TerrangaHome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo à gauche -->
        <a class="navbar-brand text-primary fw-bold" href="/">TerrangaHome</a>

        <!-- Liens centrés (mais toujours à droite sur grands écrans) -->
        <div class="d-none d-lg-flex mx-auto">
            <ul class="navbar-nav flex-row gap-4">
                <li class="nav-item">
                    <a class="nav-link nav-custom" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-custom" href="/properties">Biens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-custom" href="/about">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-custom" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <main class="w-100 p-0 m-0">
    @yield('content')
</main>

    <!-- Footer -->
<footer class="bg-dark text-white pt-5 pb-4 mt-5">
    <div class="container text-md-left">
        <div class="row">

            <!-- À propos -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold text-primary">TerrangaHome</h6>
                <hr class="mb-2 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #198754; height: 2px"/>
                <p>
                    Votre portail immobilier au Sénégal : trouvez ou publiez facilement un bien à louer ou à vendre.
                </p>
            </div>

            <!-- Liens rapides -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold text-primary">Navigation</h6>
                <ul class="list-unstyled">
                    <li><a href="/" class="text-white text-decoration-none">Accueil</a></li>
                    <li><a href="/properties" class="text-white text-decoration-none">Biens</a></li>
                    <li><a href="/about" class="text-white text-decoration-none">À propos</a></li>
                    <li><a href="/contact" class="text-white text-decoration-none">Contact</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold text-primary">Contact</h6>
                <ul class="list-unstyled">
                    <li><i class="bi bi-geo-alt-fill me-2"></i>Dakar, Sénégal</li>
                    <li><i class="bi bi-envelope-fill me-2"></i>contact@terrangahome.sn</li>
                    <li><i class="bi bi-phone-fill me-2"></i>+221 77 123 45 67</li>
                </ul>
            </div>

            <!-- Réseaux sociaux -->
            <div class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold text-primary">Suivez-nous</h6>
                <a href="#" class="text-white me-3 fs-4"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white me-3 fs-4"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white me-3 fs-4"><i class="bi bi-whatsapp"></i></a>
                <a href="#" class="text-white me-3 fs-4"><i class="bi bi-youtube"></i></a>
            </div>

        </div>
    </div>

    <div class="text-center mt-4 ">
        © {{ date('Y') }} TerrangaHome. Tous droits réservés.
    </div>
</footer>

</body>
</html>

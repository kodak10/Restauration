<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Restauration') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>



    <!-- Style -->

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto">

                    </ul>

                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                                </li>
                            @endif

                            @else

                            <header id="header" class="header fixed-top d-flex align-items-center">

                                <div class="d-flex align-items-center justify-content-between">
                                        <a href="/home" class="logo d-flex align-items-center">
                                            <img src="" alt="">
                                            <span class="d-none d-lg-block">Banana-Land</span>
                                        </a>
                                        <i class="fa-solid fa-bars-staggered toggle-sidebar-btn"></i>
                                </div><!-- Logo -->

                                <div class="search-bar">
                                        <form class="search-form d-flex align-items-center" method="POST" action="#">
                                            <input type="text" name="query" placeholder="Rechercher" title="">
                                            <button type="submit" title="Rechercher"><i class="bi bi-search"></i></button>
                                        </form>
                                </div><!-- Search Bar -->

                                <nav class="header-nav ms-auto">
                                        <ul class="d-flex align-items-center">

                                            <li class="nav-item d-block d-lg-none">
                                            <a class="nav-link nav-icon search-bar-toggle " href="#">
                                                <i class="bi bi-search"></i>
                                            </a>
                                            </li><!-- Search Icon-->

                                            <li class="nav-item dropdown">

                                                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-bell"></i>
                                                    <span class="badge bg-primary badge-number">1</span>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                                                    <li class="dropdown-header">
                                                        Vous avez une nouvelle notifivation
                                                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>

                                                    <li class="notification-item">
                                                        <i class="bi bi-exclamation-circle text-warning"></i>
                                                        <div>
                                                            <h4>Lorem Ipsum</h4>
                                                            <p>Quae dolorem earum veritatis oditseno</p>
                                                            <p>30 min.</p>
                                                        </div>
                                                    </li>

                                                    <li class="dropdown-footer">
                                                    <a href="#">Voir toutes les notifications</a>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li class="nav-item dropdown pe-3">

                                                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                                    <img src="assets/img/profile-img.jpg" alt="" class="rounded-circle">
                                                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->username }}</span>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                                    <li class="dropdown-header">
                                                        <h6>{{ Auth::user()->username }}</h6>
                                                        <span>{{ Auth::user()->fonction }}</span>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            <i class="fa-solid fa-user"></i>
                                                            <span>Mon Profil</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>

                                                        <a class="dropdown-item d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                            <i class="fa-solid fa-right-from-bracket"></i>
                                                            {{ __('Se Deconnecter') }}
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </li>

                                        </ul>
                                </nav>

                            </header>

                            <aside id="sidebar" class="sidebar">
                                    <ul class="sidebar-nav" id="sidebar-nav">

                                        <li class="nav-item">
                                            <a class="nav-link " href="/home">
                                            <i class="fa-solid fa-gauge"></i>
                                            <span>Dashboard</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link collapsed d-flex justify-content-between" data-bs-target="#admin" data-bs-toggle="collapse" href="#">
                                            <i class="fa-solid fa-user"></i><span>Administrateur</span><i class="fa-solid fa-angle-down"></i>
                                            </a>
                                            <ul id="admin" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                                <li>
                                                    <a href="/utilisateur">
                                                        <i class="fa-solid fa-circle"></i><span>Utilisateurs</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/categorie">
                                                        <i class="fa-solid fa-circle"></i><span>Catégories</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/plat">
                                                        <i class="fa-solid fa-circle"></i><span>Plats</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/vente">
                                                        <i class="fa-solid fa-circle"></i><span>Ventes</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/panier">
                                                        <i class="fa-solid fa-circle"></i><span>Panier</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-solid fa-circle"></i><span>Transferts</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link collapsed d-flex justify-content-between" data-bs-target="#comptable" data-bs-toggle="collapse" href="#">
                                                <i class="fa-solid fa-receipt"></i><span>Comptables</span><i class="fa-solid fa-angle-down"></i>
                                            </a>
                                            <ul id="comptable" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                                <li>
                                                <a href="/consultation">
                                                    <i class="fa-solid fa-circle"></i><span>Consultation</span>
                                                </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-heading">Pages</li>

                                        <li class="nav-item">
                                            <a class="nav-link collapsed" href="#">
                                            <i class="bi bi-card-list"></i>
                                            <span>Enregistrement</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link collapsed" href="#">
                                            <i class="bi bi-box-arrow-in-right"></i>
                                            <span>Connexion</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link collapsed" href="#">
                                            <i class="bi bi-dash-circle"></i>
                                            <span>Erreur 404</span>
                                            </a>
                                        </li>

                                    </ul>
                            </aside>

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>Firewall Agency</span></strong>. Tous droits réservés
            </div>
            <div class="credits">
                Version 1.0
            </div>
        </footer>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa-sharp fa-solid fa-up"></i></a>

        @endguest
    </div>


    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>

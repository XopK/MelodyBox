<nav class="navbar navbar-expand-lg">
    <div class="container-fluid mx-5">
        <div class="navbar-brand">
            <a class="d-flex align-items-center" style="width: 180px" href="/">
                <img src="/img/logo.svg" alt="Logo" width="60" height="60"
                    class="d-inline-block align-text-top me-2">
                <div class="text-white">MelodyBox</div>
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#newAlbum">Новые альбомы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#newRealse">Новые релизы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#Genres">Жанры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="/like">Мой плейлист</a>
                </li>
            </ul>
        </div>
        <div class="dropdownn d-flex">
            <div class="btn-group">
                <div class="btn-group dropstart" role="group">
                    <form action="" class="search_form">
                        <input type="search" class="search_input">
                        <i class="fa fa-search"></i>
                    </form>
                </div>
            </div>
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight"><i class="icon-excel1"></i></button>
        </div>
    </div>
</nav>
<div class="offcanvas offcanvas-end text-white" style="background-color: #0C051E" tabindex="-1" id="offcanvasRight"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        @auth
            <h5 class="offcanvas-title d-flex" id="offcanvasRightLabel">Здравствуй, <p>{{ Auth::user()->name }}</p>
            </h5>
        @endauth
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        @guest
            <div class="hr1"></div>
            <li><button class="btn-modal py-2" data-bs-toggle="modal" data-bs-target="#Authorization">Вход</button></li>
            <div class="hr1"></div>
            <li><button class="btn-modal py-2" data-bs-toggle="modal" data-bs-target="#Registration">Регистрация</button>
            </li>
            <div class="hr1"></div>
        @endguest
        @auth
        <div class="hr1"></div>
        <li><a class="btn-modal py-2 d-block text-center" href="/personal_area">Настройка</a></li>
        <div class="hr1"></div>
        <li><a href="/logout" class="btn-modal py-2 d-block text-center">Выход</a></li>
        <div class="hr1"></div>
        @endauth
        
    </div>
</div>
<x-registration></x-registration>
<x-authorization></x-authorization>

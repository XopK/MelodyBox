<nav class="navbar navbar-expand-lg"
    style="background: linear-gradient(180deg, rgba(58,33,104,1) 0%, rgba(12,5,30,1) 100%);">
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
                    <a class="nav-link text-white" aria-current="page" href="#">Новые релизы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="">Жанры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('author') }}">Авторы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Новые альбомы</a>
                </li>
            </ul>
        </div>
        <div class="dropdownn d-flex">
            <div class="btn-group">
                <div class="btn-group dropstart" role="group">
                    <button type="button" class="btn btn-medium" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="icon-excel"></i>
                    </button>
                    <ul class="dropdown-menu">
                    </ul>
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
        <h5 class="offcanvas-title d-flex" id="offcanvasRightLabel">Здравствуй, <p>NAME</p>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="hr1"></div>
        <li><button class="btn-modal py-2" data-bs-toggle="modal" data-bs-target="#Authorization">Вход</button></li>
        <div class="hr1"></div>
        <li><button class="btn-modal py-2" data-bs-toggle="modal" data-bs-target="#Registration">Регистрация</button>
        </li>
        <div class="hr1"></div>
        <li><button class="btn-modal py-2">Настройка</button></li>
        <div class="hr1"></div>
        <li><button class="btn-modal py-2">Выход</button></li>
        <div class="hr1"></div>
    </div>
</div>
<x-registration></x-registration>
<x-authorization></x-authorization>

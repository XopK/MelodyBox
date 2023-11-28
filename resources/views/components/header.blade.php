<nav class="navbar navbar-expand-lg"
    style="background: rgb(58,33,104);
background: linear-gradient(0deg, rgba(58,33,104,1) 0%, rgba(58,33,104,0.8239496482186625) 100%);">
    <div class="container-fluid mx-5">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="/img/logo.svg" alt="Logo" width="60" height="60" class="d-inline-block align-text-top me-2">
            <div class="text-white">MelodyBox</div>
        </a>
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
                    <a class="nav-link text-white" href="#">Жанры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/author">Авторы</a>
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
            <div class="dropdown">
                <button class="btn btn-medium" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="icon-excel1"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="/authorization">Вход</a></li>
                    <li><a class="dropdown-item" href="/registration">Регистрация</a></li>
                    <li><a class="dropdown-item" href="/settings">Настройка</a></li>
                    <li><a class="dropdown-item" href="#">Выход</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

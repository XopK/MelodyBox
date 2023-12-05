<footer>
    <div class="footer d-flex justify-content-between align-items-center">
        <div class="logo">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="/img/logo.svg" alt="Logo" width="60" height="60"
                    class="d-inline-block align-text-top me-2">
                <div class="text-white fs-5">MelodyBox</div>
            </a>
        </div>
        <div class="footer-info">
            <ul class="footer-ul fs-6 mt-3">
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Пользовательские соглашения</a>
                </li>
                <li class="nav-item">
                    <button href="" class="nav-link text-white">Справка</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Поддержка </a>
                </li>
                @auth 
                <li class="nav-item">
                    <a class="nav-fix nav-link text-white" data-bs-toggle="modal" data-bs-target="#Artist">Стать
                        автором</a>
                </li>
                @endauth
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Следите за нами в:</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white"><img src="/img/Telegram.svg" alt="telegram"></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white"><img src="/img/OK.svg" alt="ok"></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white"><img src="/img/VK.svg" alt="vk"></a>
                </li>
                <li class="nav-item">
                    <p class="nav-link text-white mt-3">Электронная почта: melodybox1@gmail.com</p>
                </li>
            </ul>

        </div>
    </div>
</footer>
<x-artist></x-artist>

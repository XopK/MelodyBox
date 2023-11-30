<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Личный кабинет</title>
    <x-links></x-links>
</head>
<body>
    <x-header></x-header>
    <div class="container">
        <h1 class="personal-area-title">Личный кабинет</h1>
        <div class="persoanl-area-container">
            <div class="persoanl-area-container-navigation">
                <ul class="personal-nav-ul">
                    <div class="personal-nav p-n-first"><a href="/personal_area"><img src="/img/personal.svg" alt="personal.svg"> Персональные данные</a></div>
                    <li class="personal-nav"><a href="/album_create"><img src="/img/personal-plus.svg" alt="personal-plus.svg"> Добавить альбом</a></li>
                    <li class="personal-nav p-n-last"><img src="/img/personal-exit.svg" alt="personal-exit.svg"> Выход из аккаунта</li>
                </ul>
            </div>
            <div id="change" class="personal-profile">
                <h2 class="personal-info-title">Персональные данные</h2>
                <div class="bg-personal-area">
                    <div class="bg-personal-area-center">
                        <div class="bg-personal-area-left-img">
                            <img src="/img/egorletov.jpg" alt="">
                        </div>
                        <p>Егор Летов</p>
                    </div>
                </div>
                <form action="">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3 personal-bottom-area">
                    <div class="col">
                        <label class="personal_form_label" for="firstname">Имя</label>
                        <input class="personal_form_input" id="firstname" type="text">
                    </div>
                    <div class="col">
                        <label class="personal_form_label" for="lastname">Фамилия</label>
                        <input class="personal_form_input" id="lastname" type="text">
                    </div>
                    <div class="col">
                        <label class="personal_form_label" for="phone">Номер телефона</label>
                        <input class="personal_form_input" id="phone" type="text">
                    </div>
                    <div class="col">
                        <label class="personal_form_label" for="email">Электронная почта</label>
                        <input class="personal_form_input" id="email" type="email">
                    </div>
                    <div class="col">
                        <label class="personal_form_label" for="password">Пароль</label>
                        <input class="personal_form_input" id="password" type="password">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button class="button-form">Изменить</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        let links = document.querySelectorAll('li>a');
        let output = document.getElementById('change');
    
        let ajax = new XMLHttpRequest();
        ajax.addEventListener('readystatechange', function() {
            if (this.readyState == 4 && this.status == 200)
                output.innerHTML = this.responseText;
        });
    
        function loadHTML(evt) {
            ajax.open('GET', this.href, true);
            ajax.send();
            evt.preventDefault();
        }
        links.forEach((el) => {
            el.addEventListener('click', loadHTML);
        });
    </script>
</body>
</html>

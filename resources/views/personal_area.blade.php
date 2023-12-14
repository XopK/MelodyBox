<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Личный кабинет</title>
    <x-links></x-links>
    <script src="/script/jquery-3.7.1.min.js"></script>
</head>

<body>
    <x-header></x-header>
    <div class="container">
        <h1 class="personal-area-title">Личный кабинет</h1>
        <div class="persoanl-area-container">
            <div class="persoanl-area-container-navigation">
                <ul class="personal-nav-ul">
                    <a href="/personal_area"><li class="personal-nav p-n-first"><img src="/img/personal.svg" alt="personal.svg"> Персональные данные</li></a>
                    @if(isset(Auth::user()->artists) && Auth::user()->artists->status_num == 1)
                    <a href="/album_create"><li class="personal-nav"><img src="/img/personal-plus.svg" alt="personal-plus.svg"> Добавить альбом</li></a>
                    @endif
                    <a href="/logout"><li class="personal-nav p-n-last"><img src="/img/personal-exit.svg" alt="personal-exit.svg"> Выход из аккаунта</li></a>
                </ul>
            </div>
            <div id="change" class="personal-profile">
                <h2 class="personal-info-title">Персональные данные</h2>
                <div class="bg-personal-area">
                    <div class="bg-personal-area-center">
                        <div class="bg-personal-area-left-img">
                            <img src="/storage/img/{{ Auth::user()->profile_photo }}" alt="preview" id="imagePreview">
                        </div>
                        <p>{{Auth::user()->name}} {{Auth::user()->surname}} @if(isset(Auth::user()->artists) && Auth::user()->artists->status_num == 1)({{Auth::user()->artists->artist_name}})@endif</p>
                    </div>
                </div>
                <form action="/updateUser" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3 personal-bottom-area">
                        <div class="col">
                            <label class="personal_form_label" for="firstname">Имя</label>
                            <input class="personal_form_input" value="{{Auth::user()->name}}" id="firstname" type="text" name="firstname">
                        </div>
                        <div class="col">
                            <label class="personal_form_label" for="lastname">Фамилия</label>
                            <input class="personal_form_input" value="{{Auth::user()->surname}}" id="lastname" type="text" name="lastname">
                        </div>
                        <div class="col">
                            <label class="personal_form_label" for="phone">Номер телефона</label>
                            <input class="personal_form_input" value="{{Auth::user()->phone_number}}" id="phone" type="text" name="phone">
                        </div>
                        <div class="col">
                            <label class="personal_form_label" for="email">Электронная почта</label>
                            <input class="personal_form_input" value="{{Auth::user()->email}}" id="email" type="email" name="email">
                        </div>
                        <div class="col">
                            <label class="personal_form_label" for="password">Пароль</label>
                            <input class="personal_form_input" id="password" type="password" name="password">
                        </div>
                        @if(isset(Auth::user()->artists) && Auth::user()->artists->status_num == 1)
                        <div class="col">
                            <label class="personal_form_label" for="imageInput">Фото профиля</label>
                            <label for="imageInput" class="input_file-button">
                                <input class="input_file" id="imageInput" name="photo" type="file">
                                <span id="fileInfo">Выберите файл</span>
                            </label>
                        </div>
                        <div class="col">
                            <label class="personal_form_label" for="bgInput">Фон профиля</label>
                            <label for="bgInput" class="input_file-button">
                                <input class="input_file" id="bgInput" name="photoBg" type="file">
                                <span id="fileInfoBg">Выберите файл</span>
                            </label>
                        </div>
                        @endif
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button class="button-form">Изменить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
        // Обработчик изменения значения input с типом file
            $("#imageInput").change(function () {
                // Получаем выбранный файл
                var file = this.files[0];

                // Проверяем, что файл выбран и он изображение
                if (file && file.type.startsWith("image/")) {
                // Создаем объект FileReader
                var reader = new FileReader();

                // Обработчик события загрузки файла
                reader.onload = function (e) {
                    // Устанавливаем src изображения в атрибуте src тега img
                    $("#imagePreview").attr("src", e.target.result);
                    $("#fileInfo").text(file.name);
                };

                // Читаем содержимое файла как URL-адрес данных
                reader.readAsDataURL(file);
                }
            });

            $("#bgInput").change(function () {
                var file = this.files[0];
                if (file && file.type.startsWith("image/")) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#fileInfoBg").text(file.name);
                };
                reader.readAsDataURL(file);
                }
            });
        });
    </script>
</body>

</html>

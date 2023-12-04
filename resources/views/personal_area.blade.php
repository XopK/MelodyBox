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
                    <div class="personal-nav p-n-first"><a href="/personal_area"><img src="/img/personal.svg"
                                alt="personal.svg"> Персональные данные</a></div>
                    <p class="personal-nav"><a href="/album_create"><img src="/img/personal-plus.svg"
                                alt="personal-plus.svg"> Добавить альбом</a></p>
                    <p class="personal-nav p-n-last"><img src="/img/personal-exit.svg" alt="personal-exit.svg"> Выход
                        из аккаунта</p>
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
                <form action="" method="POST" enctype="multipart/form-data">
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
                        <div class="col">
                            <label class="personal_form_label" for="input_file">Фото</label>
                            <label id="label-profile-photo" for="input_file" class="input_file-button">
                                <input class="input_file" id="input_file" name="file" type="file">
                                <span>Выберите файл</span>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button class="button-form">Изменить</button>
                    </div>
                    <input type="file" id="imageInput" accept="image/*">
  <img src="" alt="Preview" id="imagePreview" style="max-width: 300px; max-height: 300px;">
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        let links = document.querySelectorAll('p>a');
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

        $('#label-profile-photo input[type=file]').on('change', function(){
            let file = this.files[0];
            $(this).next().html(file.name);
        });


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
      };

      // Читаем содержимое файла как URL-адрес данных
      reader.readAsDataURL(file);
    }
  });
});
    </script>
</body>

</html>

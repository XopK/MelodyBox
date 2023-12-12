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
                    <a href="/personal_area">
                        <li class="personal-nav p-n-first"><img src="/img/personal.svg" alt="personal.svg"> Персональные
                            данные</li>
                    </a>
                    <a href="/album_create">
                        <li class="personal-nav"><img src="/img/personal-plus.svg" alt="personal-plus.svg"> Добавить
                            альбом</li>
                    </a>
                    <li class="personal-nav p-n-last"><img src="/img/personal-exit.svg" alt="personal-exit.svg"> Выход
                        из аккаунта</li>
                </ul>
            </div>
            <div id="change" class="personal-profile">
                <h2 class="personal-info-title">Добавление альбома</h2>
                <div class="bg-personal-area">
                    <div class="bg-personal-area-center">
                        <div class="bg-personal-area-left-img">
                            <img src="/img/music_default.jpg" alt="Preview" id="imagePreview"
                                style="max-width: 300px; max-height: 300px;">
                        </div>
                        <form action="/album_create/create" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="albun-create-up-input">
                                <label class="personal_form_label" for="firstname">Название</label>
                                <input class="personal_form_input" id="firstname" name="title_album" type="text">
                            </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-1 row-cols-xl-2 g-3 personal-bottom-area">
                    <div class="col">
                        <label class="personal_form_label" for="imageInput">Обложка</label>
                        <label for="imageInput" class="input_file-button">
                            <input class="input_file" id="imageInput" type="file" accept="image/*" name="cover">
                            <span id="fileInfo">Выберите файл</span>
                        </label>
                    </div>
                    <div class="col">
                        <label class="personal_form_label" for="input_tracks">Треки</label>
                        <label for="input_tracks" class="input_file-button">
                            <input class="input_file" id="input_tracks" name="tracks[]" type="file" multiple>
                            <span id="field__file-fake">Выберите файлы</span>
                        </label>
                    </div>
                    <div class="col">
                        <label class="personal_form_label" for="genre">Жанр</label>
                        <input class="personal_form_input" id="genre" type="text" name="genre">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button class="button-form">Добавить</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#imageInput").change(function() {
                var file = this.files[0];
                if (file && file.type.startsWith("image/")) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $("#imagePreview").attr("src", e.target.result);
                        $("#fileInfo").text(file.name);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

        document.getElementById("input_tracks").addEventListener("change", function() {
            var fileInput = this;
            var spanElement = document.getElementById("field__file-fake");
            if (fileInput.files && fileInput.files.length > 0) {
                spanElement.textContent = "Выбрано файлов: " + fileInput.files.length;
            } else {
                spanElement.textContent = "Выберите файлы";
            }
        });
    </script>
</body>

</html>

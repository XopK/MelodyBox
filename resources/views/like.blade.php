<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
    <script src="script/script.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>


    <x-header />
    <section class="section_like">
        <div class="container cont-1">
            <div class="d-flex align-items-center">
                <img src="/img/like_img.svg" alt="Обложка мой плейлист">
                <div class="text_like">
                    <span>Плейлист</span>
                    <h2 class="fw-bold">Мой плейлист</h2>
                    <div class="d-flex gap-3">
                        <div class="play_click d-flex ">
                            <button class='button_like' onclick="showAlert"></button>
                            <p>Слушать</p>
                        </div>
                        <button class="button_points_like">• • •</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container releases">
            <div class="add_block">
                <button></button>
                <p class="fw-bold fs-4 ">Добавить трек</p>
            </div>
            <div class="releases_track d-flex flex-column gap-4">
                <div class="d-flex track align-items-center ">
                    <div class="d-flex gap-5 align-items-center text_track">
                        <span style="font-size: 40px;">1</span>
                        <img src="/img/avaauth.svg">
                        <span style="font-size: 24px;">Пустите меня на танцпол</span>
                        <span style="font-size: 12px;">HammAli & Navai</span>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <div class="button_border">
                            <button class='button' onclick="showAlert"></button>
                        </div>
                        <button class="button_points">• • • </button>
                    </div>
                </div>

                <div class="d-flex track align-items-center ">
                    <div class="d-flex gap-5 align-items-center text_track">
                        <span style="font-size: 40px;">1</span>
                        <img src="/img/avaauth.svg">
                        <span style="font-size: 24px;">Пустите меня на танцпол</span>
                        <span style="font-size: 12px;">HammAli & Navai</span>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <div class="button_border d-flex align-items-center">
                            <button class='button' onclick="showAlert"></button>
                        </div>
                        <button class="button_points">• • • </button>
                    </div>
                </div>





            </div>
        </div>
    </section>

    <x-footer />
</body>

<script src="script/script.js"></script>
<script>
    $(document).ready(function showAlert(btn) {
        var btn = $(".button_like");
        btn.click(function() {
            btn.toggleClass("paused");
            return false;
        });
    });
</script>

</html>

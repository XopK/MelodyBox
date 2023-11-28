<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="/script/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="/style/flickity.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="bg-index">
        <x-headerindex></x-headerindex>
        <div class="container bg-index-block">
            <h1 class="index-big-title">Музыка - это стенограмма эмоций</h1>
        </div>
    </div>
    <div class="container">
        <h1 class="new-index-title">НОВЫЕ АЛЬБОМЫ</h1>
        <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
            <div class="gallery-cell">
                <a href="">
                    <img src="/img/habib.png" alt="">
                    <div class="gallery-cell-text-block">
                        <p>Егор Летов</p>
                        <span>Вершки и корешки</span>
                    </div>
                </a>
            </div>
        </div>
        <h1 class="new-index-title">НОВЫЕ РЕЛИЗЫ</h1>
    </div>
</body>

</html>

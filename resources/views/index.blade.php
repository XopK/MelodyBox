<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MelodyBox</title>
    <script src="/script/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="/style/flickity.css">
    <x-links></x-links>
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
        <h1 class="new-index-title">ВЫБЕРИ СВОЙ <span>ЖАНР</span></h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
            <div class="col">
                <a href="">
                    <div class="genres-card-index">
                        <a href="/genres"><span>МилиРок</span></a>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>

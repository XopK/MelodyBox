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
        <h1 id="newAlbum" class="new-index-title">НОВЫЕ АЛЬБОМЫ</h1>
        <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
            <div class="gallery-cell">
                <a href="/playlist">
                    <img src="/img/habib.png" alt="">
                    <div class="gallery-cell-text-block">
                        <p>Егор Летов</p>
                        <span>Вершки и корешки</span>
                    </div>
                </a>
            </div>
        </div>
        <h1 id="newRealse" class="new-index-title">НОВЫЕ РЕЛИЗЫ</h1>
        <h1 id="Genres" class="new-index-title">ВЫБЕРИ СВОЙ <span>ЖАНР</span></h1>
        <div class="genres-block">
            <div class="col d-flex gap-4 flex-wrap ">
                @forelse ($genre as $genres)
                    <a href="/genres">
                        <div class="genres-card-index">
                            <span>{{$genres->title_genre}}</span>
                        </div>
                    </a>
                @empty
                    
                @endforelse

            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>

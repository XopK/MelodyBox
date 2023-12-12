<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <x-links />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/style/style.css">
</head>

<body>
    <x-header></x-header>
    <section class="section_like playlist-sec">
        <div class="container">
            <div class="playlistGeneral">
                <div class="playlistHead">
                    <div>
                        <img src="/storage/albums/{{$album->album_banner}}" alt="{{$album->album_banner}}">
                    </div>
                    <div class="playlistText">
                        <p>Альбом</p>
                        <h1>{{$album->title_album}}</h1>
                        <p>{{$album->artist->artist_name}}</p>
                        <p>{{$album->genre->title_genre}}</p>
                        <div class="d-flex gap-3">
                            <div class="play_click d-flex ">
                                <button class='button_like' onclick="showAlert"></button>
                                <p>Слушать</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <hr>
    <div class="playlistGenre container d-flex flex-column gap-4 m-auto">
        @php
        $count = 0;
        @endphp
        @foreach ($track as $tracks )
        @php
        $count += 1;    
        @endphp
        <audio src=""></audio>
        {{-- вот это вниз --}}
        <div class="d-flex track align-items-center justify-content-between px-3">
            <div class="d-flex gap-5 align-items-center text_track ">
                <span style="font-size: 40px;">{{$count}}</span>
                <img src="/img/avaauth.svg">
                <span style="font-size: 24px;">{{$tracks->title_track}}</span>
                <span style="font-size: 12px;">{{$tracks->album->artist->artist_name}}</span>
            </div>
            <div class="d-flex gap-2 align-items-center">
                <div class="button_border">
                    <button class='button'></button>
                </div>
                <button class="button_points">Лайк </button>
            </div>
        </div>
        @endforeach
    </div>
    </div>
    <script src="script/script.js"></script>
    <x-footer></x-footer>
</body>

</html>

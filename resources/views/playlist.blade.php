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
    <script src="/script/player.js"></script>
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
        <div id="audioPlayer">
            <audio  controls id="audio{{$count}}">
                <source src="/storage/tracks/{{$tracks->track}}">
            </audio>
        </div>
        <div class="block-track">
            <div class="block-track-left">
                <span>{{$count}}</span>
                <img src="/img/{{$artist->profile_img}}">
            </div>
            <div class="block-track-c-left">
                <span>{{$tracks->title_track}}</span>
                <span>{{$tracks->album->artist->artist_name}}</span>
            </div>
            <div class="block-track-c-right">
                <div class="time" id="time{{$count}}"></div>
            </div>
            <div class="block-track-right">
                <div class="d-flex justify-content-between">
                    <button class="btn btn-danger button_points" id="playPause{{$count}}">Играть</button>
                    @auth
                    <a href="/like/{{{$tracks->id}}}" class="btn btn-danger button_points">Лайк</a>
                    @endauth
                </div>
                <input type="range" id="volume{{$count}}" min="0" max="1" step="0.01" value="1">
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var audio = document.getElementById('audio{{$count}}');
                var volumeControl = document.getElementById('volume{{$count}}');
                var playPauseButton = document.getElementById('playPause{{$count}}');
                var time = document.getElementById('time{{$count}}');
                volumeControl.addEventListener('input', function () {
                audio.volume = volumeControl.value;
                });
                playPauseButton.addEventListener('click', function () {
                if (audio.paused) {
                    audio.play();
                    playPauseButton.textContent = 'Пауза';
                    audioPlay = setInterval(function() {
                        let audioTime = Math.round(audio.currentTime);
                        let audioLength = Math.round(audio.duration)
                        time.style.width = (audioTime * 100) / audioLength + '%';});
                } else {
                    audio.pause();
                    playPauseButton.textContent = 'Играть';
                }
                });
            });
        </script>
        @endforeach
    </div>
    </div>
    <x-footer></x-footer>
</body>

</html>

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
            @foreach ($album as $albums)
                <div class="gallery-cell">
                    <a href="/playlist/{{ $albums->id }}">
                        <img src="/storage/albums/{{$albums->album_banner}}" alt="{{$albums->banner_album}}">
                        <div class="gallery-cell-text-block">
                            <p>{{ $albums->artist->artist_name }}</p>
                            <span>{{ $albums->title_album }}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <h1 id="newRealse" class="new-index-title">НОВЫЕ РЕЛИЗЫ</h1>
        @php
        $count = 0;
        @endphp
        @foreach ($release as $releases )
        @php
            $count += 1;
        @endphp
        <div id="audioPlayer">
            <audio  controls id="audio{{$count}}">
                <source src="/storage/tracks/{{$releases->track}}">
            </audio>
        </div>
        <div class="block-track my-5">
            <div class="block-track-left">
                <span>{{$count}}</span>
                <a href="/author/{{$releases->album->artist->id}}"><img src="/storage/img/{{$releases->album->artist->profile_img}}"></a>
                
            </div>
            <div class="block-track-c-left">
                <span>{{$releases->title_track}}</span>
                <span>{{$releases->album->artist->artist_name}}</span>
            </div>
            <div class="block-track-c-right">
                <div class="time" id="time{{$count}}"></div>
            </div>
            <div class="block-track-right">
                <div class="d-flex justify-content-between">
                    <button class="btn btn-danger button_points" id="playPause{{$count}}">Играть</button>
                    @auth
                    <a href="/like/{{{$releases->id}}}" class="btn btn-danger button_points">Лайк</a>
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
        <h1 id="Genres" class="new-index-title">ВЫБЕРИ СВОЙ <span>ЖАНР</span></h1>
        <div class="genres-block">
            <div class="row row-cols-6 g-3">
                @forelse ($genre as $genres)
                    <div class="col">
                        <a href="/genres/{{$genres->id}}">
                            <div class="genres-card-index">
                                <span>{{ $genres->title_genre }}</span>
                            </div>
                        </a>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>

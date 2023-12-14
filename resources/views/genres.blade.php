<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-links />
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>

    <title>Отдельная страничка жанра</title>
</head>

<body>
    <x-header></x-header>
    <div class="colorHead">
        <h1>{{ $genre->first()->album->genre->title_genre }}</h1>
    </div>
    <div class="container">
        @php
            $count = 0;
        @endphp
        @foreach ($genre as $track)
            @php
                $count += 1;
            @endphp
            <div id="audioPlayer">
                <audio  controls id="audio{{$count}}">
                    <source src="/storage/tracks/{{$track->track}}">
                </audio>
            </div>
            <div class="block-track my-4">
                <div class="block-track-left">
                    <span>{{$count}}</span>
                   <a href="/author/{{$track->album->artist->id}}"><img src="/storage/img/{{ $track->album->artist->profile_img }}"></a> 
                </div>
                <div class="block-track-c-left">
                    <span>{{ $track->title_track }}</span>
                    <span>{{ $track->album->artist->artist_name }}</span>
                </div>
                <div class="block-track-c-right">
                    <div class="time" id="time{{$count}}"></div>
                </div>
                <div class="block-track-right">
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-danger button_points" id="playPause{{$count}}">Играть</button>
                        @auth
                        <a href="/like/{{{$track->id}}}" class="btn btn-danger button_points">Лайк</a>
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
    <script src="script/script.js"></script>
    <x-footer></x-footer>
</body>

</html>

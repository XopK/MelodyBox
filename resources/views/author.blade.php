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
<x-links/>
<script
src="https://code.jquery.com/jquery-2.2.4.js"
integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
crossorigin="anonymous"></script>
<script src="script/script.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="style/style.css">
</head>
<body>


    <x-header/>
    <section class="section_author" style="background-image: url('/img/{{$artist->banner_profile}}')">
        <div class="container cont-1">
            <div class="name_author d-flex flex-column justify-content-center  gap-3"> <img src="/img/{{$artist->profile_img}}" alt="аватарка автора"> <p class="fw-bold">{{$artist->artist_name}}</p></div>
        </div>
    </section>
        <section>
            <div class="container releases">
            <h2>Релизы</h2>
            <hr>
                <div class="releases_track d-flex flex-column gap-4">
                    @php
                    $count = 0;
                    @endphp
                    @foreach ($tracks as $track)
                    @php
                    $count += 1;
                    @endphp
                    <div id="audioPlayer">
                        <audio  controls id="audio{{$count}}">
                            <source src="/storage/tracks/{{$track->track}}">
                        </audio>
                    </div>
                    <div class="block-track">
                        <div class="block-track-left">
                            <span>{{$count}}</span>
                            <img src="/img/{{$artist->profile_img}}">
                        </div>
                        <div class="block-track-c-left">
                            <span>{{$track->title_track}}</span>
                            <span>{{$track->album->artist->artist_name}}</span>
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
            </div>
        </section>
        <section>

            <div class="container releases" >
                <h2>Альбомы</h2>
                <hr>
                    <div class="row row-cols-1 row-cols-xl-3 g-3">
                        <div class="col">
                            @foreach ($albums as $albumD)
                            <div class="author-album">
                                <a href="/playlist/{{$albumD->id}}">
                                    <img src="/storage/albums/{{$albumD->album_banner}}" alt="{{$albumD->album_banner}}">
                                    <div class="author-album-text-block">
                                        <p>{{$artist->artist_name}}</p>
                                        <span>{{$albumD->title_album}}</span>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                     


                    <div>
                        <div>
                        

                        
                    </div>
                    <div></div>
                    </div>
            </div>
        </section>
<x-footer/>
</body>

<script src="script/script.js"></script>
</html>

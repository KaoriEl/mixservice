@extends('layouts.main')
@section('content')
    <div class="container">
{{--  Это тупо, но я уже устал =)  --}}
        <br>
        <br>
        <br>
        <h1 class="nasa_title"></h1>
        <div class="nasa_forecast">
            <br>
        </div>

        <p class="nasa_desc"> </p>
        <div class="nasa_video"></div>
    </div>

@section('custom_js')
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
        fetch("https://api.nasa.gov/planetary/apod?api_key=v2aN4MPFWBozkfti9nolqOCrZfk0KVtnRl8WZNCj").then(function (resp) {return resp.json() }).then(function (data) {

            document.querySelector('.nasa_title').textContent = data.title ;

            document.querySelector('.nasa_forecast').textContent = data.date ;

            document.querySelector('.nasa_desc').textContent =  data.explanation ;

            document.querySelector('.nasa_video').innerHTML = `<iframe width="1080" height="350" src="${data.url}" frameborder="0" allowfullscreen>
</iframe>`;
        })

            .catch(function () {
                //Обрабатываем ошибки
            });
    </script>

@endsection


@endsection

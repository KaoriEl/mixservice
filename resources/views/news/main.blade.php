@extends('layouts.main')
@section('content')
    <div class="container">
        @section('custom_js')
            <script src="http://code.jquery.com/jquery-1.9.1.js"></script>


            <script type="text/javascript">
                fetch('http://api.openweathermap.org/data/2.5/weather?id=1496747&lang=ru&appid=1febc163c9400a9b2d040f8cb075377c').then(function (resp) {return resp.json() }).then(function (data) {
                    //добавляем название города
                    document.querySelector('.weather__city').textContent = data.name;
                    //data.main.temp содержит значение в Кельвинах, отнимаем от  273, чтобы получить значение в градусах Цельсия
                    document.querySelector('.weather__forecast').innerHTML = Math.round(data.main.temp - 273) + '&deg;';
                    //Добавляем описание погоды
                    document.querySelector('.weather__desc').textContent = data.weather[0]['description'];
                    //Добавляем иконку погоды
                    document.querySelector('.weather__icon').innerHTML = `<img src="https://openweathermap.org/img/wn/${data.weather[0]['icon']}@2x.png">`;
                })
                    .catch(function () {
                        //Обрабатываем ошибки
                    });
            </script>




        @endsection
            <div class="weather__city"></div>
            <div class="weather__forecast"></div>
            <div class="weather__desc"></div>
            <div class="weather__icon"></div>
    </div>
@endsection

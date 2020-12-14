@extends('layouts.main')
@section('content')
    <div class="container">
        @section('custom_js')
            <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
            <script type="text/javascript">
                $( document ).ready(function() {
                    $('.Region').change('change', function () {
                        let city_id = $('#SelectData option:selected').data('y');
                        fetch(city_id).then(function (resp) {return resp.json() }).then(function (data) {
                            //добавляем название города
                            document.querySelector('.weather__city').textContent = data.name;
                            //data.main.temp содержит значение в Кельвинах, отнимаем от  273, чтобы получить значение в градусах Цельсия
                            document.querySelector('.weather__forecast').innerHTML = Math.round(data.main.temp - 273) + '&deg;';
                            //Добавляем описание погоды
                            document.querySelector('.weather__desc').textContent = data.weather[0]['description'];
                            //Добавляем иконку погоды
                            document.querySelector('.weather__icon').innerHTML = `<img src="https://openweathermap.org/img/wn/${data.weather[0]['icon']}@2x.png" s>`;
                        })

                            .catch(function () {
                                //Обрабатываем ошибки
                            });
                    });
                });

            </script>
        @endsection
            <div class="RegionData" id="RegionData">
                <h1 class="h1"> Выберите ваш город для того что бы узнать погоду!</h1>
                <select  class="Region btn btn-primary dropdown-toggle" id="SelectData" style="width: 100%;" >
                    @foreach($weather as $data)
                        <option  data-y="http://api.openweathermap.org/data/2.5/weather?id={{$data -> city_id}}&lang=ru&appid=1febc163c9400a9b2d040f8cb075377c">{{$data -> city}}</option>
                    @endforeach
                </select>
                <div><h1 class="weather__city"></h1></div>
                <div><h1 class="weather__forecast"></h1></div>
                <div><h1 class="weather__desc"></h1> </div>
                <div class="weather__icon"></div>
            </div>

    </div>
@endsection

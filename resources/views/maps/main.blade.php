@extends('layouts.main')

@section('content')
{{--    @dd($city);--}}
{{-- Получение координат и название городов из бд, для вывода их в селект, после подтягиваются data атрибуты и заполняется карта--}}
    <div class="RegionData" id="RegionData">
        <select class="Region btn btn-primary dropdown-toggle" id="SelectData">
            @foreach($city as $data)
            <option data-x="{{$data -> data_x}}" data-y="{{$data -> data_y}}">{{$data -> city}}</option>
            @endforeach
        </select>
        <div id="map" style="width: 1280px; height: 450px"></div>
    </div>
@section('custom_js')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
        ymaps.ready(init);
        function init(){
            var myMap = new ymaps.Map("map", {
                center: [55.76, 37.64],
                zoom: 7
            });

            $('.Region').change('change', function () {
                let y = $('#SelectData option:selected').data('y');
                let x = $('#SelectData option:selected').data('x');
                myMap.setCenter([x, y],11);
            });
        }


    </script>
@endsection

@endsection

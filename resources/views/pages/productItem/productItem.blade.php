@extends('layouts.app')

@section('title', '')

@section('content')
    @include('pages.productItem.blocks.breadcrumb')
    @include('pages.productItem.blocks.carousel')
    @include('pages.productItem.blocks.description')
    @include('pages.productItem.blocks.map')
    @include('pages.productItem.blocks.comments')
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#addacomment').on('click', function () {
                $('#addcomment').toggle();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            let latitude = 55.76; //значение по умолчанию (Москва)
            let longitude = 37.64; //значение по умолчанию (Москва)
            let flag = false;
            if({{$product->latitude}} && {{$product->longitude}}){
                flag = true;
                latitude = {{$product->latitude}};
                longitude = {{$product->longitude}};
            }

            // Функция ymaps.ready() будет вызвана, когда
            // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
            ymaps.ready(init);
            function init(){

                // Создание карты.
                var myMap = new ymaps.Map("map", {
                    // Координаты центра карты.
                    // Порядок по умолчанию: «широта, долгота».
                    // Чтобы не определять координаты центра карты вручную,
                    // воспользуйтесь инструментом Определение координат.
                    center: [latitude, longitude],
                    // Уровень масштабирования. Допустимые значения:
                    // от 0 (весь мир) до 19.
                    zoom: 7
                })
                // Вспомогательный класс, который можно использовать
                // вместо GeoObject c типом геометрии «Point» (см. предыдущий пример)
                if(flag){
                    var myPlacemark = new ymaps.Placemark([latitude, longitude], {}, {
                        preset: 'islands#redIcon'
                    });
                    myMap.geoObjects.add(myPlacemark);
                }
            }

        });
    </script>
@endsection

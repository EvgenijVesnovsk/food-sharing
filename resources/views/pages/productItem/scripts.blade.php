<script>
    $(document).ready(function () {
        $('#addacomment').on('click', function () {
            $('#addcomment').toggle();
        });
        $('#commentStore').on('click', function () {

            let comment = $('#textComment').val();
            let today = "@php echo now()->format('d-m-Y'); @endphp";
            if (comment) {
                $.ajax({
                    url: "/product/comment",
                    method: "post",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                        id: {{$product->id}},
                        comment: comment,
                    },
                    success: function (result) {
                        console.log('успех');
                        console.log(result);
                        $('#comments').append('' +
                            '<div class="row-comment comment">' +
                            '    <div class="head-comment">' +
                            '        <small><strong class="user-comment">' + result.user_name + '</strong> ' + result.created_at + '</small>' +
                            '    </div>' +
                            '    <p>' + result.comment + '</p>' +
                            '</div>');
                        result.comment

                    },
                    error: function (q, w, e) {
                        console.log('неуспех');
                        console.log(e);
                    }
                });
            }

        })
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        let latitude = 55.76; //значение по умолчанию (Москва)
        let longitude = 37.64; //значение по умолчанию (Москва)
        let flag = false;
        if ({{$product->latitude}} && {{$product->longitude}})
        {
            flag = true;
            latitude = {{$product->latitude}};
            longitude = {{$product->longitude}};
        }

        // Функция ymaps.ready() будет вызвана, когда
        // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
        ymaps.ready(init);

        function init() {

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
            if (flag) {
                var myPlacemark = new ymaps.Placemark([latitude, longitude], {}, {
                    preset: 'islands#redIcon'
                });
                myMap.geoObjects.add(myPlacemark);
            }
        }

    });
</script>

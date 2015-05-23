(function () {

    Sortable.create(foo, {
        animation: 150,
        onEnd: function(evt){ 

                //Выстраиваем новый порядок
                var count = 1;
                
                $('#foo').find(".new_value").each(function () {

                    $(this).val(count);

                    count++;
                });

                //Собираем массив новых значений
                var order = {};
                var i = 0;

                $('#order').find(".order").each(function () {

                    var order_array = {};

                    $(this).find(":input").each(function () {

                        order_array[$(this).attr('name')] = $(this).val();

                    });

                    order[i] = order_array;

                    i++;

                });

                //Переводим в JSON и отправляем изменения на сервер
                var json_text = JSON.stringify(order);

                $.post("/admin/gallerylist/itemsupdate", {
                    position: json_text
                }, function(response){
                    //alert(response);
                });

        }
    });

})();
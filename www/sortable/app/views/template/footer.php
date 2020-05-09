<div class="footer">
    <div class="row">
        <a href="https://github.com/lukinysega/sortable" target="_blank" title="Проект на Github"><i class="fab fa-github"></i></a>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!-- Bootstrap 4 requires Popper.js -->
<script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>

<script src="https://designmodo.github.io/Flat-UI/dist/scripts/flat-ui.js"></script>
<script>
    $('[data-toggle="select"]').select2()

    $(function() {
        $.ajax({
            url: 'api/get',
        })
        .done(function(response) {
            updateTable(response)
            $(".preloader").remove()
        })
        .fail(function() {
            $(".preloader").remove()
            $(".container").remove()
            $("body").prepend("<div class=\"fail\"><i class=\"fas fa-exclamation-triangle\"></i><h6>Что то пошло не так...</h6><p>Ошибка загрузки</p></div>")
        })  
    })

    function updateTable(data){
        var table = ""
        if (Object.keys(data.data).length == 0) {
            table += "<td colspan=\"4\">Нет записей...</td>"
        } else {
            for (var i = 0; i < Object.keys(data.data).length; i++) {
                table += "<tr><td>"+data.data[i].date+"</td><td>"+data.data[i].title+"</td><td>"+data.data[i].quantity+"</td><td>"+data.data[i].distance+"</td></tr>"
            }
        }
         $("tbody").html(table)
        paginator(data.meta)
    }

    function sortable(field,op,str,order,page){
        $.ajax({
            url: 'api/get',
            data: {field: field, op: op, str: str, order: order, page: page},
        })
        .done(function(response) {
            updateTable(response)
        })
        .fail(function() {
            alert("danger","Ошибка!","Не удалось загрузить данные!")
        })
        
    }

    $("[data-toggle=\"select\"]").on('change', function (event) {
        sortable($("#field-select").val(),$("#op-select").val(),$("input[name=\"str\"]").val(),$("#sort-btn").attr("data-value"))
    });

    $("input[name=\"str\"]").on('input', function (event) {
        sortable($("#field-select").val(),$("#op-select").val(),$("input[name=\"str\"]").val(),$("#sort-btn").attr("data-value"))
    });

    $("#sort-btn").on('click', function () {
        if ($("#sort-btn").attr("data-value") == "ASC") {
            $("#sort-btn").attr("data-value", "DESC")
            $("#sort-btn > i.fas").removeClass("fa-sort-down")
            $("#sort-btn > i.fas").addClass("fa-sort-up")
        } else {$("#sort-btn").attr("data-value", "ASC")
                $("#sort-btn > i.fas").removeClass("fa-sort-up")
                $("#sort-btn > i.fas").addClass("fa-sort-down")
            }
        sortable($("#field-select").val(),$("#op-select").val(),$("input[name=\"str\"]").val(),$("#sort-btn").attr("data-value"))
    });

    $(".pagination-plain").on('click', function(event) {
        if (event.target.tagName == "A") {
            sortable($("#field-select").val(),$("#op-select").val(),$("input[name=\"str\"]").val(),$("#sort-btn").attr("data-value"),$(event.target).attr("data-page"))

        }
    });

    function paginator(meta){
        var paginator_elem = "";
        if (meta.lastPage != 0) {
            if (meta.previousPage != null) {
            paginator_elem += "<li class=\"previous\"><a data-page=\""+(parseInt(meta.currentPage) - 1)+"\">Назад</a></li>"
            }
            for (var i = 1; i <= meta.lastPage; i++) {
                if (i == meta.currentPage) {
                    paginator_elem += "<li class=\"active\"><a data-page=\""+i+"\">"+i+"</a></li>"
                } else paginator_elem += "<li><a data-page=\""+i+"\">"+i+"</a></li>"
            }
            if (meta.nextPage != null) {
                paginator_elem += "<li class=\"next\"><a data-page=\""+(parseInt(meta.currentPage) + 1)+"\">Вперед</a></li>"
            }
        }
        $("ul.pagination-plain").html(paginator_elem)
    }

    function alert(type, title, text){
        alert_elem = "<div class=\"alert alert-"+type+" alert-dismissible\" role=\"alert\"><p><strong>"+title+"</strong> "+text+"</p><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>"
        $("body").prepend(alert_elem)
    }
</script>
</body>

</html>
<div class="preloader">
    <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="container">
    <h1>Sortable</h1>
    <div class="row">
        <div class="col sort d-flex align-items-center">
            <div class="col-3">
                <select class="form-control select select-default select-sm mrs" id="field-select" data-toggle="select">
                    <?php $select_options = [
                        "title" => "Название",
                        "quantity" => "Количество",
                        "distance" => "Расстояние"
                    ];

                    foreach ($select_options as $option => $value) { ?>
                        <option value="<?= $option ?>"><?= $value ?></option>
                    <?php } ?>
                </select>
                <select class="form-control select select-default select-sm mrs" id="op-select" data-toggle="select">
                    <?php $select_options = [
                        "equally" => "Равно",
                        "contains" => "Содержит",
                        "more" => "Больше",
                        "less" => "Меньше"
                    ];

                    foreach ($select_options as $option => $value) { ?>
                        <option value="<?= $option ?>"><?= $value ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-4">
                <input type="text" name="str" class="form-control input-sm" placeholder="Значение"/>
            </div>
            <div class="col">
                <button class="btn btn-default" id="sort-btn" data-value="ASC">
                    <i class="fas fa-sort-down"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Дата</th>
                    <th scope="col">Название</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Расстояние</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>demo</td>
                    <td>demo</td>
                    <td>demo</td>
                    <td>demo</td>
                </tr>
                <tr>
                    <td>demo</td>
                    <td>demo</td>
                    <td>demo</td>
                    <td>demo</td>
                </tr>
                <tr>
                    <td>demo</td>
                    <td>demo</td>
                    <td>demo</td>
                    <td>demo</td>
                </tr>
                <tr>
                    <td>demo</td>
                    <td>demo</td>
                    <td>demo</td>
                    <td>demo</td>
                </tr>
                <tr>
                    <td>demo</td>
                    <td>demo</td>
                    <td>demo</td>
                    <td>demo</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row mt-3">
        <ul class="pagination-plain">
            <li class="previous">
                <a href="">Назад</a>
            </li>
            <li class="active">
                <a href="">1</a>
            </li>
            <li>
                <a href="">2</a>
            </li>
            <li>
                <a href="">3</a>
            </li>
            <li>
                <a href="">4</a>
            </li>
            <li>
                <a href="">5</a>
            </li>
            <li class="next">
                <a href="">Вперед</a>
            </li>
        </ul>
    </div>
</div>
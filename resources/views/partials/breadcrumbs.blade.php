@if(isset($value))
    <?php
    $temp = $value->name;
    $value->name = ' ';
    ?>

    <div class="container bg-white ">
        <div class="row">
            <div class="col-12 p-0" style="margin-bottom: 0!important;">
                {{ Breadcrumbs::render($type, $value) }}
                <?php
                $value->name = $temp;
                ?>
            </div>
        </div>
    </div>
@else
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 p-0">
                {{ Breadcrumbs::render($type) }}
            </div>
        </div>
    </div>
@endif

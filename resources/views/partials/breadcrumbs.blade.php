@if(isset($value))
    <?php
        $value1=$value;
    $value1->name = \Illuminate\Support\Str::limit($value1->name,30,'...');
    ?>
    <div class="container bg-white ">
        <div class="row">
            <div class="col-12 p-0" style="margin-bottom: 0!important;">
                {{ Breadcrumbs::render($type, $value1) }}
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

<div class="container bg-white pb-5 pt-4">
    <h2 class="text-uppercase">Наши проекты</h2>
    <div class="row text-center">
        <div class="col-12">
            @foreach($projects as $project)
                <div class="col-3">
                    <a href="">
                        <img src="{{ asset('storage/small/' . $project->image) }}" class="img-fluid mr-4" alt="Ishker Aim">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container pb-5 pt-4">
    <h2 class="text-uppercase">Наши проекты</h2>
    <div class="row text-center">
        <div class="col-12">
            @foreach($projects as $project)
                <a href="">
                    <img src="{{ asset('storage/small/' . $project->image) }}" class="img-fluid mr-4" alt="Ishker Aim">
                </a>
            @endforeach
        </div>
    </div>
</div>

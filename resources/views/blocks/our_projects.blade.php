<div class="container bg-white pb-5 pt-4">
    <h2 class="text-uppercase">{{ __('main.all_projects') }}</h2>
    <div class="row text-center">
        <div class="col-12">
            @foreach($projects as $project)
                    <a href="">
                        <img src="{{ asset('storage/small/' . $project->image) }}" class="img-fluid mr-4 pt-2" alt="Ishker Aim" style="height: 100px;">
                    </a>
            @endforeach
        </div>
    </div>
</div>

<div class="col-12 col-md-6 pb-4">
    <div class="card">
        <img src="{{ asset('storage/small/' . $article->logo) }}" class="card-img-top"
             alt="...">
        <div class="card-body pl-0">
            @if($article->tags->count())
                <div class="row m-0 text-white">
                    <p class=" col-auto small" style="border-bottom-right-radius: 15px;
                                                border-top-right-radius: 15px;
                                                background-color: #008500;margin-top: -2.10rem;">{{ $article->tags->take(2)->implode('name', ', ') }}</p>
                </div>
            @endif
            <h6 class="pl-3 text-left">{{ $article->name }}</h6>
            <div class="card-footer d-flex justify-content-end bg-white border-0 pt-0 m-0 p-0">
                <div class="ml-auto d-flex align-items-center">
                    <img src="{{ asset('icons/eyes_iocn.png') }}" alt="">&nbsp;<span
                        class="p-1">90</span>
                    <img src="{{ asset('icons/comment.png') }}" alt=""><span class="p-1">20</span>

                </div>
            </div>
        </div>
    </div>
</div>

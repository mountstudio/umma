<div class="card-header border-0 font-weight-bold ">4 comments</div>
@foreach($comments as $comment)
    <div class="media mt-4">
        <div class="media-body">
            <h5 class="font-weight-bold mt-0">
                <p>{{ $comment->full_name }}</p>
                @if(Auth::check())
                    @if(Auth::admin() == 1)
                        <a href="" class="pull-right">
                            <i class="fas fa-reply"></i>
                        </a>
                    @endif
                @endif
            </h5>
            {!! $comment->content !!}
            @if($comment->children->count())
                <div class="media mt-3">
                    <a class="mr-3" href="#">
                    </a>
                    <div class="media-body">
                        <h5 class="font-weight-bold mt-0">
                            <a href="">{{ $comment->children->full_name }}</a>
                            <i class="fas fa-reply"></i>
                            </a>
                        </h5>
                        {!! $comment->children->content !!}
                    </div>
                </div>
            @endif
        </div>
    </div>
@endforeach
<div class="form-group mt-4">
    @if(!Auth::check())
        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput"
                   placeholder="Введите свое имя:">
        </div>
        <div class="form-group">
            <label for="exampleInputPhone">Your telephone number:</label>
            <input type="text" class="form-control" id="exampleInputPhone"
                   placeholder="Введите свой номер телефона:">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail"
                   aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                else.
            </small>
        </div>
    @endif
    <label for="quickReplyFormComment">Your comment</label>
    <textarea class="form-control" id="quickReplyFormComment" rows="5"></textarea>

    <div class="text-center my-4">
        <button class="btn btn-primary btn-sm" type="submit">Написать</button>
    </div>
</div>


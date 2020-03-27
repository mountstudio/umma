<section>
    <div class="container">
        <div class="col-12 row justify-content-center">
            <button type="button" class="btn btn-primary modal-open" data-toggle="modal" data-target="#modalForComment">
                Оставить отзыв
            </button>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="modal fade" id="modalForComment" tabindex="-1" role="dialog"
                     aria-labelledby="modalForComment" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{ route('user.comment.store') }}" id="comment_form" method="POST">
                                <div class="modal-body">
                                    @csrf
                                    @if(!Auth::user())
                                        <div class="form-group">
                                            <label for="phone-input">Телефон:</label>
                                            <input name="phone" class="form-control" id="phone-input" type="text"
                                                   placeholder="Телефон">
                                        </div>
                                        <div class="form-group">
                                            <label for="mail-input">mail:</label>
                                            <input name="mail" class="form-control" id="mail-input" type="text" placeholder="Почта">
                                        </div>
                                        <div class="form-group">
                                            <label for="name-input">ФИО:</label>
                                            <input name="full_name" class="form-control" id="name-input" type="text" placeholder="Имя">
                                        </div>
                                        <input hidden name="user_id" value="0">
                                    @else
                                        <input hidden name="user_id" value="{{ Auth::user()->id }}">
                                    @endif
                                    <div class="form-group">
                                        <label for="content-area">Коментарии:</label>
                                        <textarea class="form-control" name="content"
                                                  placeholder="Коментарии"
                                                  id="content-area"></textarea>
                                    </div>
                                    <input hidden name="article_id" value="{{ $article->id }}">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть
                                    </button>
                                    <button type="submit" class="btn btn-primary">Отправить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <section class="my-5">
                    <div class="card-header border-0 font-weight-bold">{{ $comments->count() }} comments</div>
                    @foreach($comments as $comment)
                        @if($comment->parent_id)
                            @continue
                        @endif
                        <div class="media my-5 col-12" id="play">
                            <div class="media-body  text-center text-md-left px-4">
                                <h5 class="font-weight-bold mt-0 d-flex">
                                    <p class="pr-2">{{ $comment->full_name }}</p>
                                    @admin
                                    <a href="#" data-toggle="modal" data-target="#modalForComment"
                                       data-id="{{ $comment->id }}" class="pull-right answer">
                                        <i class="fas fa-reply"></i>
                                    </a>
                                    @endadmin
                                </h5>
                                <h6 class="ml-3">{!! $comment->content !!}</h6>
                                @foreach($comment->children as $answer)
                                    <div class="media d-block d-md-flex mt-1">
                                        <div class="media-body text-center text-md-left ml-md-5 ml-0">
                                            <h5 class="font-weight-bold mt-0">
                                                <p>{{ $answer->full_name }}</p>
                                            </h5>
                                            {{ $answer->content }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        $('.answer').click(e => {
            e.preventDefault();
            let answer = $(e.currentTarget);
            let id = answer.data("id");
            let input = document.createElement("input");
            input.value = id;
            input.name = "parent_id";
            input.id = "parent_id";
            input.hidden = true;
            if (document.getElementById('parent_id') == null) {
                document.getElementById('comment_form').appendChild(input);
            }
        })
        $('.modal-open').click(e => {
            if (document.getElementById('parent_id') != null) {
                document.getElementById('parent_id').remove();
            }
        })
    </script>
@endpush


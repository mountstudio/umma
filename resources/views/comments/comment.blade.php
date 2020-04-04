<section>
    <div class="container">
        <div class="col-12 row justify-content-center">
            <button type="button" class="button button--isi button--border-thick button--round-l button--size-s text-white modal-open" data-toggle="modal" data-target="#modalForComment">
                Оставить отзыв
            </button>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="modal fade" id="modalForComment" tabindex="-1" role="dialog"
                     aria-labelledby="modalForComment" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Заполнить форму чтобы оставить отзыв</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('user.comment.store') }}" id="comment_form" method="POST">
                                <div class="modal-body">
                                    @csrf
                                    @if(!Auth::user())
                                        <div class="form-group">
                                            <label for="name-input">ФИО:</label>
                                            <input name="full_name" class="form-control" id="name-input" type="text" placeholder="Бакыт">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone-input">Телефонный номер:</label>
                                            <input name="phone" class="form-control" id="phone-input" type="text"
                                                   placeholder="+996550121212">
                                        </div>
                                        <div class="form-group">
                                            <label for="mail-input">E-mail:</label>
                                            <input name="mail" class="form-control" id="mail-input" type="text" placeholder="anya@gmail.com">
                                        </div>
                                        <input hidden name="user_id" value="0">
                                    @else
                                        <input hidden name="user_id" value="{{ Auth::user()->id }}">
                                    @endif
                                    <div class="form-group">
                                        <label for="content-area">Коментарии:</label>
                                        <textarea class="form-control" name="content"
                                                  placeholder="Коментарии"
                                                  id="content-area"  rows="5"></textarea>
                                    </div>
                                    <input hidden name="article_id" value="{{ $article->id }}">
                                </div>
                                <div class="modal-footer">
                                    <button class="button button--nina button--text-thick button--text-upper button--size-s"
                                            data-text="Отправить">
                                        <span>О</span><span>т</span><span>п</span><span>р</span><span>а</span><span>в</span><span>и</span><span>т</span><span>ь</span>
                                    </button>
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
                        <div class="media my-5 col-12 px-0" id="play">
                            <div class="media-body text-md-left px-0">
                                <h5 class="font-weight-bold my-0 d-flex ">
                                    <p class="pr-2">{{ $comment->full_name }}</p>
                                    @admin
                                    <a href="#" data-toggle="modal" data-target="#modalForComment"
                                       data-id="{{ $comment->id }}" class="pull-right answer">
                                        <i class="fas fa-reply"></i>
                                    </a>
                                    @endadmin
                                </h5>
                                <h6 class="ml-3 font-weight-light">{!! $comment->content !!}</h6>
                                @foreach($comment->children as $answer)
                                    <div class="media d-block d-md-flex mt-1">
                                        <div class="media-body text-center text-md-left ml-md-5 ml-0">
                                            <h5 class="font-weight-bold mt-0">
                                               {{ $answer->full_name }}
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


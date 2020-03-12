@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="post-header d-flex">
                    <img class="mx-2" src="{{ asset('img/news.png') }}" alt="" style="width: 60px;height: 60px;">
                    <h2 class="title">{{ $article->name }}</h2>
                </div>
                <div class="author">
                    Автор:
                    @foreach($article->authors as $author)
                        <a href="" target="_blank">{{ $author->full_name . ($loop->last ? '' : ',') }} </a>
                    @endforeach
                </div>
                <div class="py-2">
                    <img src="{{ asset('storage/medium/' . $article->logo) }}" alt="">
                </div>
                <div>
                    <p>{!! $article->content !!}</p>
                </div>
                <div class="tags">
                    <h5 class="widget-title">Теги:</h5>
                    @foreach($article->tags as $tag)
                        <a href="" target="_blank">{{  $tag->name . ($loop->last ? '' : ',') }} </a>
                    @endforeach
                </div>
                <div class="d-flex py-2" style="background-color: #FFE8F8">
                    <a href="https://www.instagram.com/ummamagkg/"><img class="px-3"
                                                                        src="{{ asset('img/instagram-sketched (1).png') }}"
                                                                        alt=""></a>
                    <p class="p-1 m-0">Подписывайтесь на нашу страницу в <a href="https://www.instagram.com/ummamagkg/">Instagram</a>
                    </p>
                </div>

                <div class="post-share py-2 ">
                    <div class="text d-flex">
                        <img src="{{ asset('img/reading (1).png') }}" alt="">
                        <p>Материал принес пользу? Поделитесь ссылкой с друзьями в социальных сетях.</p>
                    </div>

                    <div class="icons" style="position: relative;right: -9%;margin-top: -25px;">
                        <div class="">
                            <a href="https://facebook.com/sharer.php?u={{ request()->fullUrl() }}"><i
                                        class="fab fa-facebook fa-lg text-orange mr-3"></i></a>
                            <a class="" href="https://vk.com/share.php?url={{ request()->fullUrl() }}" title="VK"
                               rel="nofollow noopener" target="_blank">
                                <i class="fab fa-vk fa-lg text-orange mr-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <section class="my-5">
                    <div class="card-header border-0 font-weight-bold ">4 comments</div>
                    <div class="media mt-4">
                        <img src="..." class="mr-3" alt="...">
                        <div class="media-body">
                            <h5 class="font-weight-bold mt-0">
                                <a href="">Sylvester the Cat</a>
                                <a href="" class="pull-right">
                                    <i class="fas fa-reply"></i>
                                </a>
                            </h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin.
                            Cras
                            purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                            nisi
                            vulputate fringilla. Donec lacinia congue felis in faucibus.

                            <div class="media mt-3">
                                <a class="mr-3" href="#">
                                    <img src="..." class="mr-3" alt="...">
                                </a>
                                <div class="media-body">
                                    <h5 class="font-weight-bold mt-0">
                                        <a href="">Sylvester the Cat</a>
                                        <a href="" class="pull-right">
                                            <i class="fas fa-reply"></i>
                                        </a>
                                    </h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                    turpis.
                                    Fusce
                                    condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                                    faucibus.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <label for="quickReplyFormComment">Your comment</label>
                        <textarea class="form-control" id="quickReplyFormComment" rows="5"></textarea>

                        <div class="text-center my-4">
                            <button class="btn btn-primary btn-sm" type="submit">Написать</button>
                        </div>
                    </div>

                    <div class="media d-block d-md-flex mt-3">
                        <img class="card-img-64 d-flex mx-auto mb-3" src=""
                             alt="Generic placeholder image">
                        <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <h5 class="font-weight-bold mt-0">
                                <a href="">Sylvester the Cat</a>
                                <a href="" class="pull-right">
                                    <i class="fas fa-reply"></i>
                                </a>
                            </h5>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                            velit, sed
                            quia non numquam eius modi
                            tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </div>
                    </div>
                    <div class="media d-block d-md-flex mt-3">
                        <img class="card-img-64 d-flex mx-auto mb-3" src=""
                             alt="Generic placeholder image">
                        <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <h5 class="font-weight-bold mt-0">
                                <a href="">Caroline Horwitz</a>
                                <a href="" class="pull-right">
                                    <i class="fas fa-reply"></i>
                                </a>
                            </h5>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti
                            atque corrupti
                            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                            similique
                            sunt in culpa
                            officia deserunt mollitia animi, id est laborum et dolorum fuga.
                        </div>
                    </div>

                    <!--Pagination -->
                    <nav class="d-flex justify-content-center mt-5">
                        <ul class="pagination pg-blue mb-0">

                            <!--First-->
                            <li class="page-item disabled">
                                <a class="page-link">First</a>
                            </li>

                            <!--Arrow left-->
                            <li class="page-item disabled">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>

                            <!--Numbers-->
                            <li class="page-item active">
                                <a class="page-link">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link">5</a>
                            </li>

                            <!--Arrow right-->
                            <li class="page-item">
                                <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>

                            <!--Last-->
                            <li class="page-item">
                                <a class="page-link">Last</a>
                            </li>

                        </ul>
                    </nav>
                </section>
            </div>
            <div class="col-12 col-lg-4 pb-3">
                @include('blocks.right-sidebar.new')
                <div class="pt-3">
                    @include('blocks.right-sidebar.animation')
                </div>
                <h2 class="text-center py-2">Статьи</h2>
                @include('blocks.right-sidebar.new')
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.social-share-btn').click(e => {
            let btn = $(e.currentTarget);
            let social = btn.data('social');
            let url = btn.data('url');
            let text = btn.data('text');

            if (social == 'facebook') {
                url = 'https://facebook.com/sharer/sharer.php?u=' + url;
                window.open(url, "popupWindow", "width=600,height=600,scrollbars=yes");
            }
            if (social == 'vk') {
                url = 'https://vk.com/share.php?url=' + url;
                window.open(url, "popupWindow", "width=600,height=600,scrollbars=yes");
            }
            // if (social == 'instagram') {
            //     window.open($(this).attr("href", 'https://vk.com/share.php?url=' + url), "popupWindow", "width=600,height=600,scrollbars=yes");
            // }
        })
    </script>
@endpush

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                @include('breadcrumb.bread')
                <div class="author d-flex justify-content-between">
                    <a class="text-dark" href="" target="_blank">Автор: Кадыр Маликов</a> <span>12.03.2020</span>
                </div>
                <div class="post-header d-flex py-2">
                    <img class="d-none d-md-block mx-2" src="{{ asset('img/news.png') }}" alt=""
                         style="width: 60px;height: 60px;">
                    <h2 class="title">
                        Более 60 брендов были представлены на осенней ярмарке Family Bazaar 2019
                    </h2>
                </div>
                <div class="py-2">
                    <img class="img-fluid" src="{{ asset('img/Group (1).png') }}" alt="">
                </div>
                <div>
                    <p>Аяты из Корана о Курбан-байраме:
                        «Сделал Аллах (Бог, Господь) Каабу, Священный Дом, опорой людям [поддержкой в приобретении
                        земных и вечных благ]. А также и священные месяцы [Зуль-ка‘да, Зуль-хиджа, аль-Мухаррам и
                        Раджаб], и жертвенное животное [мясо которого во время паломничества раздают бедным и неимущим],
                        и украшения [которыми люди отмечали этих животных, чтобы отличить их от обычных][1]. [Господь
                        заложил во всем этом благо.] Это для того, чтобы вы поняли: Бог знает все то, что на небесах, и
                        все то, что на Земле. Он обо всякой вещи сведущ» (Св. Коран, 5:97);

                        *

                        «Сделали Мы [говорит Господь Миров] жертвенное животное (верблюда и верблюдицу) [а также быка и
                        корову, заклание каждого из которых производится от семи человек, в отличие от баранов и овец,
                        которые лишь от одного] обрядом, в нем благо для вас [мирское и вечное]. Упоминайте над ним имя
                        Бога[2] [при заклании]. [Если производите данный процесс над верблюдами] оставьте их стоящими на
                        ногах [лучше на трех ногах][3]. И когда [после выхода основной части крови] они упадут [когда
                        очевидно, что животное испустило душу, можете начать разделывать тушу], а полученным мясом как
                        сами питайтесь, так и накормите бедного, который не попросит [довольствуясь имеющимся малым], а
                        также просящего. Поймите же, Мы подчинили их [домашний скот[4], да и всех животных] на службу
                        вам [к примеру, те же самые верблюды, несмотря на их силу и мощь, смиренны во время смертельного
                        для них процесса], будьте же благодарны [за это Творцу, заложившему определенные законы и
                        закономерности в природе]» (Св. Коран, 22:36);

                        *

                        «Молись Господу твоему [совершая праздничную молитву] и принеси в жертву [животное]» (Св. Коран,
                        108:2).

                        Некоторые хадисы о Курбан-байраме:
                        «Самое лучшее пред Всевышним деяние в дни праздника жертвоприношения — это пускание крови
                        жертвенного животного. Поистине, придет это животное со своими рогами, копытами и шерстью в
                        Судный День [живым свидетелем совершенного обряда]. И будет кровь его возвеличена пред Господом
                        еще до того, как успеют капли ее упасть на землю. Пусть же души ваши будут спокойны» [5];</p>
                </div>
                <div class="tags">
                    <h5 class="widget-title">Теги:</h5>
                </div>
                @include('subscription.subscribe')
                @include('share.share_buttons')

                <section class="my-5">
                    @include('comments.comment')
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

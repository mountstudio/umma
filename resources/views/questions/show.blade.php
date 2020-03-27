@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="text-right">
                    <span class="text-orange   font-weight-bold">Анонимно / 22 апреля 2017</span>
                </div>
                <div class="text-center">
                    <span class="text-orange h5  font-weight-bold">Категория вопроса: Ихсан</span>
                </div>
                <p class="text-dark"><span class="pr-2 h5">Вопрос:</span>Я русская принявшая недавно ислам зрелая никях.
                    Мне очень
                    хорошо в моей религии. Я гармонична в
                    ней. Замужем почти год. У мужа 2 неудачных брака за спиной. 3 е детей. А у меня 1 ребенок.
                    Сын
                    мой на инвалидности. Мы не говорящие аутисты. Я хочу познать счастье воспитания обычного
                    здорового ребёнка, а муж не хочет. Что делать? Разводиться?</p>

                <hr>
                <p class="text-dark"><span class="pr-2 h5">Ответ:</span>Вы не должны желать или стремиться к разводу (по
                    этой
                    причине), а наоборот поговорить с мужем.
                    Тем более Вы всего 1 год с ним, и у вас обоих дети, за которых вы двое также несете
                    ответственность, чтобы воспитывать их. Муж должен обеспечивать детей и Вас. Возможно ему
                    тяжело
                    зарабатывать и поэтому дайте ему время. Поговорите с ним. Делайте дува (молитву) Аллаху.
                </p>
                <div class="text-right">
                    <span class="text-orange text-right  font-weight-bold">Кадыр маликов</span>
                </div>
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


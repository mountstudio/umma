<div class="list-group">
    <div class="">
        <a href="{{ route('admin.dashboard') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
            <i class="fas fa-chart-line pr-3"></i>{{ __('Dashboard') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.article.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/article*') ? 'active' : '' }}">
            <i class="far fa-newspaper pr-3"></i>{{ __('Статьи') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.longread.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/longread*') ? 'active' : '' }}"><i
                class="fas fa-newspaper pr-3"></i>{{ __('Лонгрид') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.digest.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/digest*') ? 'active' : '' }}"><i
                class="far fa-paper-plane pr-3"></i>{{ __('Дайджест') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.new.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/new*') ? 'active' : '' }}"><i
                class="fab fa-leanpub pr-3"></i>{{ __('Новости') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.multimedia.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/multimedia*') || request()->is('admin/media*') ?  'active' : '' }}"><i
                class="fab fa-medium pr-3"></i>{{ __('Мультимедиа') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.category.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/category*') ? 'active' : '' }}"><i
                class="fas fa-bars pr-3"></i>{{ __('Категории статьи') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.author.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/author*') ? 'active' : '' }}">
            <i class="fas fa-address-card pr-3"></i>{{ __('Авторы') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.hadith.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/hadith*') ? 'active' : '' }}">
            <i class="fas fa-quran pr-3"></i>{{ __('Хадисы') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.magazine.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/magazin*') ? 'active' : '' }}">
            <i class="fas fa-swatchbook pr-3"></i>{{ __('Журналы') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.project.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/project*') ? 'active' : '' }}">
            <i class="fas fa-project-diagram pr-3"></i>{{ __('Проекты') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.questionCategory.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/questionCategor*') ? 'active' : '' }}">
            <i class="far fa-question-circle pr-3"></i>{{ __('Категории вопросов') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.question.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/question*') && !request()->is('*Categor*') ? 'active' : '' }}">
            <i class="fas fa-question pr-3"></i>{{ __('Вопросы') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.tag.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/tag*') ? 'active' : '' }}">
            <i class="fas fa-tags pr-3"></i>{{ __('Теги') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.photographer.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/photographer*') ? 'active' : '' }}">
            <i class="fas fa-camera pr-3"></i>{{ __('Фотографы') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.poster.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/poster*') && !request()->is('*Type*') ? 'active' : '' }}">
            <i class="fas fa-blog pr-3"></i>{{ __('Афиша') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.posterType.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/posterType*') ? 'active' : '' }}">
            <i class="fas fa-mail-bulk pr-3"></i>{{ __('Типы афиш') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.comment.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/comment*') ? 'active' : '' }}">
            <i class="fas fa-comments pr-3"></i>{{ __('Комментарии') }}</a>
    </div>
    <div>
        <a href="{{ route('admin.subscriber.datatable') }}"
           class="list-group-item list-group-item-action {{ request()->is('admin/subscriber*') ? 'active' : '' }}">
            <i class="fas fa-plus-circle pr-3"></i>{{ __('Подписчики') }}</a>
    </div>
    <div>
        <a href="#" onclick="event.preventDefault();$('.logout-form').submit();"
           class="list-group-item list-group-item-action text-danger">
            <i class="far fa-times-circle pr-3"></i>{{ __('Выход') }}</a>
    </div>
</div>
<form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
    @csrf
</form>

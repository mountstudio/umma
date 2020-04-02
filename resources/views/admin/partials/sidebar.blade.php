<div class="list-group">
    <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action {{ request()->is('admin/dashboard*') ? 'active' : '' }}">{{ __('Dashboard') }}</a>
    <a href="{{ route('admin.article.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/article*') ? 'active' : '' }}">{{ __('Статьи') }}</a>
    <a href="{{ route('admin.longread.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/longread*') ? 'active' : '' }}">{{ __('Лонгрид') }}</a>
    <a href="{{ route('admin.digest.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/digest*') ? 'active' : '' }}">{{ __('Дайджест') }}</a>
    <a href="{{ route('admin.multimedia.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/multimedia*') ? 'active' : '' }}">{{ __('Мультимедиа') }}</a>
    <a href="{{ route('admin.category.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/category*') ? 'active' : '' }}">{{ __('Категории статьи') }}</a>
    <a href="{{ route('admin.author.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/author*') ? 'active' : '' }}">{{ __('Авторы') }}</a>
    <a href="{{ route('admin.hadith.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/hadith*') ? 'active' : '' }}">{{ __('Хадисы') }}</a>
    <a href="{{ route('admin.magazine.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/magazin*') ? 'active' : '' }}">{{ __('Журналы') }}</a>
    <a href="{{ route('admin.project.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/project*') ? 'active' : '' }}">{{ __('Проекты') }}</a>
    <a href="{{ route('admin.questionCategory.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/questionCategor*') ? 'active' : '' }}">{{ __('Категории вопросов') }}</a>
    <a href="{{ route('admin.question.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/question*') ? 'active' : '' }}">{{ __('Вопросы') }}</a>
    <a href="{{ route('admin.tag.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/tag*') ? 'active' : '' }}">{{ __('Теги') }}</a>
    <a href="{{ route('admin.photographer.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/photographer*') ? 'active' : '' }}">{{ __('Фотографы') }}</a>
    <a href="{{ route('admin.poster.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/poster') ? 'active' : '' }}">{{ __('Афиша') }}</a>
    <a href="{{ route('admin.posterType.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/posterType*') ? 'active' : '' }}">{{ __('Типы афиш') }}</a>
    <a href="{{ route('admin.comment.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/comment*') ? 'active' : '' }}">{{ __('Комментарии') }}</a>
    <a href="{{ route('admin.subscriber.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/subscriber*') ? 'active' : '' }}">{{ __('Подписчики') }}</a>
    <a href="#" onclick="event.preventDefault();$('.logout-form').submit();" class="list-group-item list-group-item-action text-danger">{{ __('Выход') }}</a>
</div>
<form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
    @csrf
</form>

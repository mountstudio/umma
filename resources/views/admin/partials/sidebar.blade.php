<div class="list-group">
    <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action {{ request()->is('admin/dashboard*') ? 'active' : '' }}">{{ __('Dashboard') }}</a>
    <a href="{{ route('admin.articles.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/article*') ? 'active' : '' }}">{{ __('Статьи') }}</a>
    <a href="{{ route('admin.multimedia.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/multimedia*') ? 'active' : '' }}">{{ __('Мультимедиа') }}</a>
    <a href="{{ route('admin.category.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/category') ? 'active' : '' }}">{{ __('Категории') }}</a>
    <a href="{{ route('admin.author.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/author') ? 'active' : '' }}">{{ __('Авторы') }}</a>
    <a href="{{ route('admin.hadisi.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/hadisi') ? 'active' : '' }}">{{ __('Хадисы') }}</a>
    <a href="{{ route('admin.magazines.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/magazines') ? 'active' : '' }}">{{ __('Журналы') }}</a>
    <a href="{{ route('admin.project.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/project') ? 'active' : '' }}">{{ __('Проекты') }}</a>
    <a href="{{ route('admin.tag.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/tag') ? 'active' : '' }}">{{ __('Теги') }}</a>
    <a href="{{ route('admin.photograph.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/photograph') ? 'active' : '' }}">{{ __('Фотографы') }}</a>
    <a href="#" onclick="event.preventDefault();$('.logout-form').submit();" class="list-group-item list-group-item-action text-danger">{{ __('Выход') }}</a>
</div>
<form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
    @csrf
</form>

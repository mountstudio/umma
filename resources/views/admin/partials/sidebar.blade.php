<div class="list-group">
    <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action {{ request()->is('admin/dashboard*') ? 'active' : '' }}">{{ __('Dashboard') }}</a>
    <a href="{{ route('admin.articles.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/article*') ? 'active' : '' }}">{{ __('Статьи') }}</a>
    <a href="{{ route('admin.authors.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/author*') ? 'active' : '' }}">{{ __('Авторы') }}</a>
    <a href="{{ route('admin.categories.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/category') ? 'active' : '' }}">{{ __('Категории') }}</a>
    {{--<a href="{{ route('admin.order.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/order') ? 'active' : '' }}">Заказы</a>--}}
    <a href="#" onclick="event.preventDefault();$('.logout-form').submit();" class="list-group-item list-group-item-action text-danger">{{ __('Выход') }}</a>
</div>
<form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
    @csrf
</form>

<div class="row justify-content-center">
    <form name="delete-form" method="POST" action="{{ route('admin.'.$type.'.destroy', $model) }}">
        @csrf
        @method('DELETE')
        <button type="button" onclick="deleteConfirm()" title="{{ __('Удалить') }}" class="btn n btn-danger"><i
                    class="fas fa-trash-alt"></i>
        </button>
    </form>
    <a class="btn btn-primary ml-1" href="{{ route('admin.'.$type.'.edit', $model) }}"><i class="fas fa-pen"></i></a>

</div>
    <script>
        function deleteConfirm() {
            if (confirm('Вы дествительно хотите удалить ?')) {
                document.forms["delete-form"].submit();
            }
        }
    </script>
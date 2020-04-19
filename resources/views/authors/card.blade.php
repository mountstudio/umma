<a href="{{ route('show.author', ['author' => $author]) }}">
    <img class="rounded-circle" style="width: 100px;height: 100px;"
         src="{{ asset('storage/medium/' . $author->photo) }}" alt="">
    <h3 class="font-weight-bold h5 pt-2 text-dark">{{ $author->full_name }}</h3>
</a>

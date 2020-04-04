
<h1>Салам Алейкум</h1>
<h2>Заголовок: {{ $article->name }}</h2>
<h3><b>Категория:</b> {{ $article->category->name }}</h3>
<img src="{{ $message->embed(asset('storage/medium/' . $article->logo)) }}">
<p>{!! $article->content !!} </p>
<a href="{{ route('show.article', $article) }}">читать статью!</a>
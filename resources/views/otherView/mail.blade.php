
<h1>Салам алейкум</h1>
<h3>{{ $article->name }}</h3>
<p>{!! $article->content !!} </p>
<a href="{{ route('show.article', $article) }}">читать статью!</a>
<div class="card border-0 shadow  shadow-on-hover transition-200 h-100">
    <div class="position-relative">
        <img src="{{ asset('storage/large/' . $article->logo) }}"
             style="min-height: 150px; max-height: 150px; object-fit: cover;filter: brightness(80%);"
             class="card-img-top" alt="...">
        <p class="position-absolute text-white font-weight-bold"
           style="top: 10px; left: 10px;">{{ $article->category->name }}</p>
    </div>
    <div class="card-body py-2">
        <small class="text-muted font-weight-bold py-3">{{ \Carbon\Carbon::make($article->created_at)->format('M d Y') }}</small>
        <h3 class="h4 font-weight-bold card-title pt-3 m-0">{{ $article->name }}</h3>
        <p class="card-text small" style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
</div>

<div class="card mb-4">
    <a href="{{ route('article.show', $article->slug) }}">
        <img src="{{ $article->img_preview }}" class="card-img-top" alt="{{ $article->title }}">
    </a>
    <div class="card-body">
        <a href="{{ route('article.show', $article->slug) }}">
            <h5 class="card-title">{{ $article->title }}</h5>
        </a>
        <p class="card-text">{{ $article->text_preview }}</p>

        <span data-id="{{ $article->id }}" class="like"><i class="far fa-heart"></i>{{ $article->likes }}</span>
        <span class="float-end"><i class="far fa-eye"></i>{{ $article->views }}</span>
    </div>
</div>

@forelse($tags as $tag)
    @if($link)
        <a href="{{ route('article.index') }}?tag={{ $tag->title }}">
            <span class="badge bg-primary">{{ $tag->title }}</span>
        </a>
    @else
        <span class="badge bg-primary">{{ $tag->title }}</span>
    @endif
@empty
    <p>Нет тегов</p>
@endforelse

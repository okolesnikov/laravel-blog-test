@extends('layout.blog')

@section('title', 'Каталог статей')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('article.include.tag', ['tags' => $tags, 'link' => true])
            </div>
            <div class="col-lg-9">
                @forelse($articles as $article)
                    @include('article.include.article', ['article' => $article])
                @empty
                    <p>Записей нет</p>
                @endforelse

                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection

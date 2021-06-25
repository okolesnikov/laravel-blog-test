@extends('layout.blog')

@section('title', 'Главная')

@section('content')
    @include('layout.include.banner')

    <div class="container">
        <div class="row">
            @forelse($articles as $article)
                <div class="col-lg-4">
                    @include('article.include.article', ['article' => $article])
                </div>
            @empty
                <p>Записей нет</p>
            @endforelse

            {{ $articles->links() }}
        </div>
    </div>
@endsection

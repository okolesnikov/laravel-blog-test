@extends('layout.blog')

@section('title', "$article->title")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-9">
                <h2 class="mb-2">{{ $article->title }}</h2>

                <span data-id="{{ $article->id }}" class="like"><i class="far fa-heart"></i>{{ $article->likes }}</span>
                <span data-id="{{ $article->id }}" id="articleView" class="float-end"><i class="far fa-eye"></i>{{ $article->views }}</span>

                <div class="mt-2">
                    @include('article.include.tag', ['tags' => $article->tags, 'link' => false])
                </div>

                <p class="mt-2">{{ $article->text }}</p>

{{--                <h4>Комментарии</h4>--}}
{{--                @forelse($article->comments as $comment)--}}
{{--                    {{ $comment->subject }}--}}
{{--                @empty--}}
{{--                    <p>Нет комментариев</p>--}}
{{--                @endforelse--}}

                @include('article.include.comment', ['id' => $article->id])
            </div>
        </div>
    </div>
@endsection

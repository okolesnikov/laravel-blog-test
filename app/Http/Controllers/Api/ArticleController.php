<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Jobs\ProcessComment;
use App\Jobs\ProcessLikes;
use App\Jobs\ProcessViews;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Exception;

class ArticleController extends Controller
{
    public function comment(Article $article, CommentRequest $request): JsonResponse
    {
        try {
            ProcessComment::dispatch($article, $request);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }

        return response()->json(['success' => true, 'message' => 'Ваше сообщение успешно отправлено']);
    }

    public function likes(Article $article): JsonResponse
    {
        try {
            ProcessLikes::dispatch($article);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }

        return response()->json(['success' => true, 'likes' => $article->likes]);
    }

    public function views(Article $article): JsonResponse
    {
        try {
            ProcessViews::dispatch($article);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }

        return response()->json(['success' => true, 'views' => $article->views]);
    }
}

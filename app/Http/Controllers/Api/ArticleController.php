<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\JsonResponse;
use Exception;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function comment(Article $article, CommentRequest $request): JsonResponse
    {
        try {
            DB::beginTransaction();
            sleep(600);
            $comment = new Comment($request->all());
            $article->comments()->save($comment);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }

        DB::commit();
        return response()->json(['success' => true, 'message' => 'Ваше сообщение успешно отправлено']);
    }

    public function likes(Article $article): JsonResponse
    {
        try {
            DB::beginTransaction();
            $article->increment('likes');
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }

        DB::commit();
        return response()->json(['success' => true, 'likes' => $article->likes]);
    }

    public function views(Article $article): JsonResponse
    {
        try {
            DB::beginTransaction();
            $article->increment('views');
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }

        DB::commit();
        return response()->json(['success' => true, 'views' => $article->views]);
    }
}

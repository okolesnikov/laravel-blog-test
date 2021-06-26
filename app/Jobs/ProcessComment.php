<?php

namespace App\Jobs;

use App\Http\Requests\CommentRequest;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessComment implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $article;
    protected $comment;
    protected $request;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Article $article, CommentRequest $request)
    {
        $this->article = $article;
        $this->request = $request->only(['subject', 'body']);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->comment = new Comment($this->request);
        $this->article->comments()->save($this->comment);
    }
}

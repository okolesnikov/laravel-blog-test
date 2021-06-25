<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;


class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'body',
        'article_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function article(): belongsTo
    {
        return $this->belongsTo(Article::class);
    }
}

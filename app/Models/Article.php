<?php

namespace App\Models;

use App\Models\Traits\Slug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    use Slug;

    protected $fillable = [
        'title',
        'text',
        'img_preview',
        'img_detail',
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments(): BelongsTo
    {
        return $this->belongsTo(Comment::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = self::get($model->title);
        });

        static::updating(function ($model) {
            $model->slug = self::get($model->title);
        });
    }
}

<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait Slug
{
    public static function get(string $title): string
    {
        $slug = Str::slug($title);
        $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag',
        'title',
        'slug',
        'excerpt',
        'body',
        'published_at',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'date',
    ];

    protected static function booted(): void
    {
        static::saving(function (Article $article) {
            if (empty($article->slug)) {
                $article->slug = Str::slug($article->title).'-'.Str::random(5);
            }
        });
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderByDesc('published_at');
    }
}

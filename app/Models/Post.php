<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method search-filter()
 */
class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'posts';

    // make sure optout modules when you call model if not needed
    protected $with = ['category', 'user', 'comments'];

    // I am lazy so i dont want to list all fillables here
    protected $guarded = [];

    protected $dates = ['deleted_at'];

    /**
     * @param $query
     * @param array $filter
     * @return void
     */
    public function scopeSearchFilter($query, array $filter): void
    {

        $query->when(
            $filter['search'] ?? false,
            fn($query, $search) => $query
                ->where(fn($query) => $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%'))
        );

        $query->when(
            $filter['category'] ?? false,
            fn($query, $category) => $query
                ->whereHas('category', fn($query) => $query
                    ->where('slug', $category))
        );

        $query->when(
            $filter['user'] ?? false,
            fn($query, $user) => $query
                ->whereHas('user', fn($query) => $query
                    ->where('id', $user))
        );
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }

    public static function findorfail($slug)
    {
        $post = static::find($slug);

        if (!$post) {
            throw new ModelNotFoundException();
        }

        return $post;
    }
}
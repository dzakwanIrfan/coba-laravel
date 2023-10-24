<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;
    use HasFactory;
    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'user'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search']) ? $filters['search'] : false) {
        //     return $query   ->where('title','LIKE','%'. $filters['search'].'%')
        //                     ->orWhere('body','LIKE','%'. $filters['search'].'%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query   ->where('title','LIKE','%'. $search .'%')
                            ->orWhere('body','LIKE','%'. $search .'%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['user'] ?? false, function($query, $user){
            return $query->whereHas('user', function($query) use($user){
                $query->where('username', $user);
            });
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

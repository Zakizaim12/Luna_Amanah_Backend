<?php

namespace App\Models;

use App\Models\Durasi;
use App\Models\Category;
use App\Models\booking;
use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use Sluggable;
    use HasFormatRupiah;

    //protected $fillable = ['title', 'body'];
    protected $guarded = ['id'];
    protected $with = ['author','category'];
    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('title', 'like', '%' . $search . '%')
                             ->orWhere('body', 'like', '%' . $search . '%');
             });
         });
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });
        $query->when($filters['author'] ?? false, function($query, $author){
            return $query->whereHas('author', function($query) use ($author){
                $query->where('username', $author);
            });
        });
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function booking(){
        return $this->hasMany(booking::class);
    }
    public function durasi(){
        return $this->belongsTo(Durasi::class);
    }
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guared = ['id', 'created_at', 'updated_at'];
    const MODERATION = 1, PUBLISHED = 2;

    protected $fillable = [
        'name', 'slug', 'extract', 'body', 'status',
        'user_id', 'category_id', 'coordinate_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    /**
     * Relacion uno a muchos inversa
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relacion muchos a muchos
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Relacion uno a muchos polimorfica
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}

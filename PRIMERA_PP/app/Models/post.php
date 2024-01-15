<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'content',
        'image_path',
        'is_published',
        'category_id'];


    // relcion una muchos inversa

    public function category() {
        return $this->belongsTo(Category::class);
    }
     // relcion muchos a muchos
    // Post.php (Post model)
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}

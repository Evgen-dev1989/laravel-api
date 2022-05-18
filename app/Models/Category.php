<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    protected $fillable =['content','title'];

    public static function create(array $all)
    {
    }

    public function category(): BelongsToMany
    {
        return $this->belongsToMany(Category::class,'article_category','category_id','article_id');
    }


}

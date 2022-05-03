<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Article extends Model
{
    protected $fillable=['content','title'];
    public function article()
    {
        return $this->belongsToMany(Category::class,'article_category','article_id','category_id');
    }

    public function category(): BelongsToMany
    {
        return $this->belongsToMany(Category::class,'article_category','category_id','article_id');
    }
}

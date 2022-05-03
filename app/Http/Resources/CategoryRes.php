<?php

namespace App\Http\Resources;
use App\Http\Resources\ArticleRes;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryRes extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'content'=>$this->content,
            'title'=>$this->title,
            'category'=>ArticleCategoryRes::collection($this->category),
            'pivot' => $this->pivot,
        ];
    }
}

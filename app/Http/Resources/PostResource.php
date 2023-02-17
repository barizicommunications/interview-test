<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        // dd($request);
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'body' => $this->body,
            'featured_image_url' => $this->featured_image_url,
            'author' => $this->author->name,
            'category' => $this->category->name,
            'created_at' => $this->created_at,
        ];
    }
}

<?php

namespace App\Http\Resources;

use App\Models\newsComments;
use Illuminate\Http\Resources\Json\JsonResource;
use function GuzzleHttp\Promise\all;

class NewsResource extends JsonResource
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
          'id' => $this->id,
          'name' => $this->name,
          'summary' => $this->summary,
          'content' => $this->content,
          'date' => $this->date,
          'image' => $this->image,
          'likes' => $this->image,
          'views' => $this->image,
            'comments'=> newsComment::collection(newsComments::all()),
        ];
    }
}

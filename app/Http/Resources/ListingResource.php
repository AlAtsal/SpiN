<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ListingTypeResource;

class ListingResource extends JsonResource
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
            'description' => $this->description,
            'type' => ListingTypeResource::collection($this->listingTypes),
            'availability' => $this->availability,
            'location' => $this->location,
            'square_meters' => $this->square_meters,
            'price' => $this->price
        ];
    }
}

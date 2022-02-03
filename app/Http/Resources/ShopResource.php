<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'prefectureId' => $this->prefecture_id,
            'prefecture' => $this->prefecture->prefecture,
            'areaId' => $this->area_id,
            'genderId' => $this->gender_id,
            'gender' => $this->gender->gender,
            'city' => $this->city,
            'address' => $this->address,
            'building' => $this->building,
            'access' => $this->access,
            'latitude' => $this->latitude,
            'logitude' => $this->logitude,
            'phoneNumber' => $this->phone_number,
            'instagramUrl' => $this->instagram_url,
            'holiday' => $this->holiday,
            'businessHour' => $this->business_hour,
            'imageUrl' => $this->image_url,
            'likesNumber' => $this->likes_number,
            'reviewsNumber' => $this->reviews_number,
        ];
    }
}
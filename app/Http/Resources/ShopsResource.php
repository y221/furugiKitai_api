<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Infrastructure\Aws\S3;

class ShopsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $s3 = new S3;

        $shops = [];
        foreach ($this->getShops() as $shop) {
            $shops[] = [
                'id' => $shop->id,
                'name' => $shop->name,
                'prefectureId' => $shop->prefecture_id,
                'prefecture' => $shop->prefecture->prefecture,
                'areaId' => $shop->area_id,
                'genderId' => $shop->gender_id,
                'gender' => $shop->gender->gender,
                'city' => $shop->city,
                'address' => $shop->address,
                'building' => $shop->building,
                'access' => $shop->access,
                'latitude' => $shop->latitude,
                'logitude' => $shop->logitude,
                'phoneNumber' => $shop->phone_number,
                'instagramUrl' => $shop->instagram_url,
                'holiday' => $shop->holiday,
                'businessHour' => $shop->business_hour,
                'imageUrl' => $s3->getPath($shop->image_url),
                'likesNumber' => $shop->likes_number,
                'reviewsNumber' => $shop->reviews_number,
            ];
        }

        return [
            'shops' => $shops,
            'count' => $this->getShopsAll()->count(),
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PrefecturesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       $data = [];
       foreach ($this->all()->sortBy('sort_number') as $prefecture) {
           $data[] = [
               'id' => $prefecture->id,
               'regionId' => $prefecture->region_id,
               'prefecture' => $prefecture->prefecture,
               'shop_count' => $prefecture->shop_count
           ];
       }

       return $data;
    }
}

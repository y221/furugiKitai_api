<?php

namespace App\Http\Resources\Condition;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PrefecturesResource;

class PrefecturesGroupByRegionResource extends JsonResource
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
       foreach ($this->getRegions() as $region) {
           $data[] = [
               'name' => $region->name,
               'prefectures' => new PrefecturesResource($region->prefectures) 
           ];
       }

       return $data;
    }
}

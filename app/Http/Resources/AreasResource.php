<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AreasResource extends JsonResource
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
       foreach ($this->all() as $area) {
           $data[] = [
               'id' => $area->id,
               'prefectureId' => $area->prefecture_id,
               'name' => $area->name
           ];
       }

       return $data;
    }
}

<?php

namespace App\Http\Resources\condition;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\AreasResource;

class AreasGroupByPrefectureResource extends JsonResource
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
        foreach ($this->getPrefectures() as $prefecture) {
            
            // エリアが空の場合
            if (empty($prefecture->areas->all())) {
                continue;
            }
            $data[] = [
                'prefecture' => $prefecture->prefecture,
                'areas' => new AreasResource($prefecture->areas) 
            ];
        }
        return $data;
    }
}

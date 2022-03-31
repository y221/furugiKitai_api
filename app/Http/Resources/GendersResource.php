<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GendersResource extends JsonResource
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
        foreach ($this->all() as $gender) {
            $data[] = [
                'id' => $gender->id,
                'gender' => $gender->gender
            ];
        }

        return $data;
    }
}

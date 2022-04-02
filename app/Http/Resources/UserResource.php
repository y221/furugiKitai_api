<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Infrastructure\Aws\S3;

class UserResource extends JsonResource
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

        return [
            'id' => $this->id,
            'icon' => $s3->getPath($this->icon),
            'name' => $this->name,
            'favorite' => $this->favorite,
            'profile' => $this->profile,
            'instagram' => $this->instagram,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
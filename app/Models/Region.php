<?php

namespace App\Models;

use App\Models\Prefecture;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function getRegions()
    {
        $query = $this->newQuery();
        $query->with('prefectures');
        return $query->get();
    }

    /**
     * 都道府県データをリレーション
     * 
     * @return object
     */
    public function prefectures() :object
    {
        return $this->hasMany(Prefecture::class);
    }
}

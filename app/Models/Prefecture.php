<?php

namespace App\Models;

use App\Models\Area;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    /**
     * 取得
     * @return object
     */
    public function getPrefectures()
    {
        $query = $this->newQuery();
        $query->with('areas');
        return $query->get();
    }

    /**
     * idから取得
     *
     * @param int $id
     * @return object
     */
    public function getPrefecture($id)
    {
        return $this->where('id', $id)->first();
    }

    /**
     * エリアデータをリレーション
     * 
     * @return object
     */
    public function areas() :object
    {
        return $this->hasMany(Area::class);
    }
}

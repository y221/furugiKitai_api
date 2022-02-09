<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    use HasFactory;

    /**
     * 取得
     * @param array $ids
     * @return object
     */
    public function getPrefectures($ids)
    {
        $query = $this->newQuery();
        if (!empty($ids)) {
            $query->whereIn('id', $ids);
        }
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
}

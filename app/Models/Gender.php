<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gender extends Model
{
    use HasFactory;

    /**
     * 全件取得
     *
     * @return object
     */
    public function getGenders()
    {
        return $this->get();
    }

    /**
     * idから取得
     *
     * @param int $id
     * @return object
     */
    public function getGender($id)
    {
        return $this->where('id', $id)->first();
    }
}

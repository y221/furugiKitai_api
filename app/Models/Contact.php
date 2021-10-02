<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'content'
    ];
    /**
     * お問い合わせフォーム取得
     *
     * @param array $contact
     * @return void
     */
    public function insertContact(array $contact) :void
    {
        $this->fill($contact)->save();
    }
}

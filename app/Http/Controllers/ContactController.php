<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    protected $contact;

/**
 * お問い合わせ入力情報登録
 */

    public function create(Request $requsest) :array
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->content = $request->content;
        $contact->save();
        return ['msg' => 'お問い合わせいただきありがとうございます'];
    } 
    //
}

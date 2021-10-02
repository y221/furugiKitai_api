<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Post;
use App\Library\MyFunction;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    protected $contact;
    protected $myFunction;

    /**
     * コンストラクタ
     *
     * @param Contact $contact
     * @param MyFunction $myFunction
     */
    public function __construct(Contact $contact, MyFunction $myFunction)
    {
        $this->contact = $contact;
        $this->myFunction = $myFunction;
    }

    /**
     * 登録
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request) {
        $request->input();
        $this->contact->insertContact($request->input());
        return ['msg' => 'お問い合わせいただきありがとうございました'];
    }

}

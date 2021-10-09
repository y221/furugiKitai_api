<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Library\MyFunction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactsController extends Controller
{
    protected $contact;
    protected $myFunction;

    const CONTACT_VALIDATE_RULE = [
        'name' => 'required|max:50',
        'email' => ['required', 'email:strict,dns,spoof', 'max:250'],
        'content' => 'required|max:1000',
    ];
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
     * @return array
     */
    public function create(Request $request) :array
    {
        $validator = Validator::make($request->input(), self::CONTACT_VALIDATE_RULE);
        if ($validator->fails()) return ['errors' => $validator->errors()];
        $contact = $validator->validated();
        $this->contact->insertContact($request->input());
        return ['msg' => 'お問い合わせいただきありがとうございました'];
    }

}


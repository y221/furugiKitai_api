<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Post;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    protected $contact;
    protected $myFunction;

    public function create() {
        return ['msg' => 'お問い合わせいただきありがとうございました'];
    }

    public function add(Request $request) {

        $post = new Post();
        $post->name = $request->name;
        $post->email = $request->email;
        $post->content = $request->content;
        $post->save();

        return redirect('/');
    }

}




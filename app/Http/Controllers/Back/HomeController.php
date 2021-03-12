<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Back\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return redirect()->route('back.course.types.index');
    }

    public function settings(Request $request)
    {
        $id = auth()->id();

        if ($request->isMethod('post')) {
            $request->validate([
                'name'=>'required|min:2|max:50',
                'username'=> 'required|min:5|max:50|unique:App\Models\Back\Admin,username,' . $id, // unique:table,column,except,idColumn
                'password'=>'required|min:6|max:20'
            ]);

            $contact = \App\Models\Back\Admin::findOrFail($id);
            $contact->name =  $request->get('name');
            $contact->username = $request->get('username');
            $contact->password = Hash::make($request->get('password'));
            $contact->save();

            return redirect()->route('back.settings')->with('success', 'Profile information updated!');
        }
        else {
            return view('back.settings', ([
                'admin' => Admin::findOrFail($id)
            ]));
        }
    }

}

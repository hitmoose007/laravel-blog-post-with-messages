<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
        //show edit form
        public function index(){
            return view('users.edit');
        }

        //update
        public function update(Request $request){
            $user_id=auth()->user()->id;
            $user=User::findOrFail($user_id);
            $formFields=$request->validate([
                'name'=>'required',
                'username'=>'required',
                'pic'=>'required'
            ]);
            $user->update($formFields);
            return redirect ('/dashboard');

        }
}

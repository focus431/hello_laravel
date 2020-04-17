<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials= $this->validate($request,[
            'email'=> 'required|email|max:255',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials, $request->has('remember'))){
            session()->flash('success','歡迎回來～！');
            return redirect()->route('users.show',[Auth::user()]);
        }else{
            session()->flash('danger','很抱欺，您的資料不匹配');
            return redirect()->back()->withInput();
        }
        
    }
    public function destroy(){
        Auth::logout();
        session()->flash('success','您己成功退出');
        return redirect('login');

    }
}

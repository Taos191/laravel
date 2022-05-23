<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserFormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function profile(){
        return view('profile');
    }

    public function profile_edit(UserFormRequest $request, $user_id){
        $data = $request->validated();

        $users = User::find($user_id);
        $users->name=$data['fullname'];
        $users->email=$data['email'];
        
        if($request->hasfile('image')){
            $destination = 'uploads/profile/'.$users->avatar;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/profile/', $filename);
            $users->avatar = $filename;
        }


        $users-> update();

        return redirect('profile')->with('success','Profile updated successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $users = User::where('role_id', 1)->get();
        return view('dashboard.users.index', compact('users'));

    }


    public function create()
    {

        return view('dashboard.users.create');

    }

    
    public function store(Request $request)
    {
        $request->validate([
            'user_name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'role_id'=>'required'
        ]);

        
        if($request->hasFile('user_img')){
            
                $file = $request->user_img;
                $new_file = time() . $file->getClientOriginalName();
                $file->move('uploads', $new_file);

                User::create([
                    "role_id"   => $request->role_id,
                    "user_name" => $request->user_name,
                    "email"     => $request->email,
                    "password"  => bcrypt($request->password),
                    "user_img"  => './uploads/' . $new_file,
                ]);
        }else{
                User::create([
                    "role_id"   => $request->role_id,
                    "user_name" => $request->user_name,
                    "email"     => $request->email,
                    "password"  => $request->password,
                ]);
        }

        return redirect()->route('user.index');

    }

//  show user Profile
    public function showProfile()
    {
        $user = Auth::user();
        $Subscriptions = Subscription::where('user_id', $user->id)->get();
        // echo '<pre>';
        // print_r($Subscriptions);
        // echo '</pre>';
        // die;
        return view('public.userProfile', compact('user', 'Subscriptions'));
    }

   
    public function edit($id)
    {
        $userEdit = User::find($id);
        return view('dashboard.users.edit', compact('userEdit'));
    }


    public function update(Request $request, $id)
    {
       
        // dd($request);
        $userUpdate = User::find($id);
        if($request->hasFile('user_img')){
            $file = $request->user_img;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads', $new_file);
            $userUpdate->user_img =  './uploads/' . $new_file ;
        }
        $userUpdate->user_name = $request->user_name ;
        $userUpdate->email     = $request->email ;
        $userUpdate->password  = bcrypt($request->password) ;
        
        $userUpdate->update();
        return redirect()->route('user.index');
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'user_name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5|max:30',
            'role_id'=>'required'
        ]);
        // dd($request);
        $userUpdate = User::find($id);
        if($request->hasFile('user_img')){
            $file = $request->user_img;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads', $new_file);
            $userUpdate->user_img =  './uploads/' . $new_file ;
        }
        $userUpdate->user_name = $request->user_name ;
        $userUpdate->email     = $request->email ;
        $userUpdate->password  = $request->password ;
        
        $userUpdate->update();
        return redirect()->route('public.userProfile');
    }


    public function destroy($id)
    {
        $userDestroy = User::find($id);
        $userDestroy->destroy($id);
        return redirect()->route('user.index');
    }
}

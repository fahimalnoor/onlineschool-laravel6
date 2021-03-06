<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use Image;
use App\User;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('student.profile.profile', array('user' => Auth::user()));
    }

    public function updateAvatar(Request $request)
    {
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('uploads/avatars/'.$filename));
        
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();

            return view('student.profile.profile', array('user' => Auth::user()));
        }
    }


    public function edit($id)
    {
        $user = User::find($id);
        
        return view('student.profile.edit', compact('user', 'user'));
    }

    public function proup(Request $req){

        $data=array();
    
          $data['name'] = $req->name;
          $data['email'] = $req->email;

        $update = DB::table('users')->where('id', auth::user()->id)->limit(1)->update(['name' => $data['name'], 'email' => $data['email']]); 
            
            if($update){
                return redirect()->action('DashboardController@index')->with('success', 'Profile updated successfully!');
            }else{
                echo "Updating Failed!";
            }
    
        }

   
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ],[
            'name.required' => 'Name field is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->action('DashboardController@index')->with('success', 'Profile updated successfully!');
    }

    public function delete($email)
    {
        $dlt = DB::table('users')->where('email', $email)->delete();
        if($dlt){
            echo "Your ID Is Deleted!";
        }else{

            echo "ID Deleting Failed!";
        }
    }
}

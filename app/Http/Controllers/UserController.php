<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users =DB::table('users')->orderBy('id','desc')->paginate(6);
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'role'=>'required',
            'password'=>'required|min:5|max:12',
           ]);
           $user=new User();
           $user->name=$request->name;
           $user->email=$request->email;
           $user->role=$request->role;
           $user->password=Hash::make($request->password);
           $res=$user->save();
                
                return redirect()->route('user.index')->with('success','User has been created successfully.');
               
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, User $user)
    {

        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|',
            'role'=>'required',
        // 'password'=>'required|min:5|max:12',
    ]);
        
        $user->name=$request->name;
        $user->email=$request->email;
        $user->role=$request->role;
        // $user->password=Hash::make($request->password);
        // User::whereId(auth()->user()->id)->update([
        //     'password' => Hash::make($request->password)]);
        
        // $res=$user->save();
        $user->fill($request->post())->save();
        return redirect()->route('user.index')->with('success','User has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success','service has been deleted successfully.');
    }

    public function updatPassword(Request $request)
    {
        $request->validate([
            'oldPassword'=>'required|min:5|max:12',
            'password'=>'required|min:5|max:12|',
        ]);
        $currentPassword=Hash::check($request->oldPassword,auth()->user()->password);
        if($currentPassword){
            User::findOrFail(Auth::user()->id)->update([
                'password'=>Hash::make($request->password),
            ]);
        return redirect()->route('user.index')->with('success','service has been deleted successfully.');
        }else{
            return redirect()->back()->with('message','Error');
        }
    }

   
}

<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
class ProfileController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
           
            'email' => ['string', 'email', 'max:255', 'unique'],
            'password' => ['string', 'min:8', 'confirmed'],
           
        ]);
    }

   public function index(){
return view('UserProfile');
   }
   public function update(Request $request){
   
    $user = Auth::user();
 $user->update($request->all());
 return back() ->with('success','Your profile has been updated!');
 
   }
}

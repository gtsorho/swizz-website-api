<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($token = auth()->guard('api')->attempt($credentials)) {
            return $this->respondWithToken($token);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->guard('api')->factory()->getTTL() * 1440
        ]);
    }


    
    public function settings(request $request){
        $logo = request()->file->store('uploads', 'public');
        $sql = admin::where('id', auth()->gaurd('api')->id())->update(['logo' => $logo]);
    }
    
    public function display(){
        $details = admin::all();
        return response()->json($details);
    }

    public function validateData(){
        // image update
         request()->validate([
                'file' => 'file|image|max:5000'
            ]);
    }

}

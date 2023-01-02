<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;
use DB;

class UserController extends Controller
{

    public function __construct(){

        $user = new User();
    }

    public function register(Request $request){

        $this->user = new User();

        $this->user->fName = $request->input('first_name');

        $this->user->lName = $request->input('last_name');

        $this->user->save();


        return response()->json(["success" => true, "Message" => "Thanks for registration."]);
    }

}
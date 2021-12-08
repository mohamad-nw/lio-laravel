<?php
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;



class UserController extends Controller
{
    public function getIndex() {


        $data = ['a' => 'Mohamad', 'b' => 'Hussam'];

            return view('welcome', compact('data'));
        
    }
}

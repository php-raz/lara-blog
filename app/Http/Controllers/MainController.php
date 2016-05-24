<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function check(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'agree'=>'accepted',
            'image'=>'image',
        ]);
//        $this->validate($request, [
//            'about'=>'required_if:name,Sergey',
//        ]);
        return "Проверка пройдена";
    }
}
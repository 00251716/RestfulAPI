<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index() {
        $users = Student::all();
        return response()->json($users, 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'carnet' => 'required',
            'password' => 'required'
        ]);

        $user = Student::where('carnet', $request->input('carnet'))->first();
        if (is_null($user)) {
            return response()->json(['status' => 'fail', 'message' => 'El usuario no existe'], 401);
        }
        if (Hash::check($request->input('password'), $user->password)) {
            $apikey = base64_encode(str_random(60));
            Student::where('carnet', $request->input('carnet'));
            return response()->json(['status' => 'success', 'api_key' => $apikey]);
        } else {
            return response()->json(['status' => 'fail', 'message' => 'Contraseña incorrecta'], 401);
        }
    }
}

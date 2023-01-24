<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Http\Requests\StudentCreateRequest;
//use App\Http\Requests\StudentUpdateRequest;

class StudentController extends Controller
{
    // Método para obtener todas los alumnos
    public function getALl(Request $request) {

        $student = DB::table('students')->get();

        return response()->json([
            'succes' => true,
            'message' => 'Obtengo todos alumnos',
            'data' => $student
        ]);
    }

    // Método para obtener el alumno por id
    public function getById(Request $request, $id) {

        $student = DB::table('students')->where('id', $id)->get();

        return response()->json([
            'succes' => true,
            'message' => 'Obtengo un alumno concreto',
            'data' => $student
        ]);
    }

    // Método para crear un alumno
    public function create(Request $request) {

        $datos = $request->validate([
            'name' => 'required|max:32',
            'phone' => 'max:16',
            'age' => 'numeric',
            'password' => 'required|max:64',
            'email' => 'required|email|unique:students|max:64',
            'sex' => 'required',
        ]);

        DB::table('students')->insert($datos);

        return response()->json([
            'succes' => true,
            'message' => 'Creo un alumno',
        ],
            201 // Creado
        );
    }

    // Método para borrar un alumno
    public function delete(Request $request, $id) {

        DB::table('students')->where('id', $id)->delete();

        return response()->json([
            'succes' => true,
            'message' => 'Borro el alumno con id ' . $id,
        ]);
    }

    // Método para modificar un alumno
    public function update(Request $request, $id) {

        $datos = $request->validate([
            'name' => 'required|max:32',
            'phone' => 'max:16',
            'age' => 'numeric',
            'password' => 'required|max:64',
            'email' => 'required|email|max:64',
            'sex' => 'required',
        ]);

        DB::table('students')->where('id', $id)->update($datos);

        return response()->json([
            'succes' => true,
            'message' => 'Modifico el alumno con id ' . $id,
        ]);
    }
}

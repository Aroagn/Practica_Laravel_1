<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentsCreateRequest;
use App\Http\Requests\StudentsUpdateRequest;

class StudentsController extends Controller
{
    // Método para obtener todas los alumnos
    public function getALl(Request $request) {
        $students = DB::table('students')->get();

        return response()->json([
            'succes' => true,
            'message' => 'Obtengo todos alumnos desde el controller',
            'data' => $students
        ]);
    }

    // Método para obtener el alumno por id
    public function getById(Request $request, $id) {
        $students = DB::table('students')->where('id', $id)->get();

        return response()->json([
            'succes' => true,
            'message' => 'Obtengo un alumno concreto',
            'data' => $students
        ]);
    }

    // Método para crear un alumno
    public function create(StudentsCreateRequest $request) {

        DB::table('students')->insert([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'age' => $request->input('age'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
            'sex' => $request->input('sex')
        ]);

        return response()->json([
            'succes' => true,
            'message' => 'Creo un alumno desde el controller',
        ],
            201 // Creado
        );
    }

    // Método para borrar un alumno
    public function delete(Request $request, $id) {
        DB::table('students')->where('id', $id)->delete();
        return response()->json([
            'succes' => true,
            'message' => 'Borro el alumno con id ' . $id . ' desde el controller',
        ]);
    }

    // Método para modificar un alumno
    public function update(StudentsUpdateRequest $request, $id) {

        DB::table('students')->where('id', $id)->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'age' => $request->input('age'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
            'sex' => $request->input('sex')
        ]);

        return response()->json([
            'succes' => true,
            'message' => 'Modifico el alumno con id ' . $id . ' desde el controller',
        ]);
    }
}

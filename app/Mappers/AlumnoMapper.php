<?php

namespace App\Mappers;

use App\Models\Alumno;
use App\Data\AlumnoData;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AlumnoMapper
{
    public static function toAlumno(AlumnoData $alumnoData)
    {
        return new Alumno([
            'dni' => $alumnoData->dni,
            'nombre' => $alumnoData->nombre,
            'apellido' => $alumnoData->apellido,
            'email' => $alumnoData->email,
            'contrasenia' => Hash::make($alumnoData->contrasenia),
            'fecha_modificacion' => Carbon::now(),
            'fecha_creacion' => Carbon::now()

        ]);
    }

    public static function toAlumnoData(Alumno $alumno)
    {
        return new AlumnoData(
            $alumno->dni,
            $alumno->nombre,
            $alumno->apellido,
            $alumno->email,
            $alumno->contrasenia
        );
    }

}

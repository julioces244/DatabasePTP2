<?php

namespace App\Exports;

use App\Alumno;
use Maatwebsite\Excel\Concerns\FromCollection;


class EstudiantesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Alumno::all();
    }
}

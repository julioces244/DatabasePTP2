<?php

namespace App\Imports;

use App\Instrumento;
use Maatwebsite\Excel\Concerns\{Importable, ToModel, WithHeadingRow};

class InstrumentosImport implements ToModel, WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Instrumento([
            'idinstrumento' => $row['idinstrumento'],
            'especialidad' => $row['especialidad'],
            'cantidad' => $row['cantidad'],
            'unidades' => $row['unidades'],
            'descripcion' => $row['descripcion'],
            'serie' => $row['serie'],
            'codigoptp' => $row['codigoptp'],
            'codigo' => $row['codigo'],
            'estado' => $row['estado'],
            'ambientes_idambiente' => $row['ambientes_idambiente'],
        ]);
    }
}

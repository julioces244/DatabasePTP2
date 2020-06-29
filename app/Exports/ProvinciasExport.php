<?php

namespace App\Exports;

use App\Province;
use Maatwebsite\Excel\Concerns\FromCollection;


class ProvinciasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Province::all();
    }
}

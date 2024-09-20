<?php

namespace App\Exports;

use App\Models\Categoria;
use App\Models\Libro;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\User;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class ExportName implements FromView, ShouldAutoSize
{
    public function View(): view
    {
        return view('table',['item'=>Libro::all()]);
    }
}

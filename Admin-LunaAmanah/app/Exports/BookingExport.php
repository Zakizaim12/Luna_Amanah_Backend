<?php

namespace App\Exports;

use App\Models\booking;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookingExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return booking::all();
    }
}

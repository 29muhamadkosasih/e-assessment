<?php

namespace App\Imports;

use App\Models\Skema;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class SkemaImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Skema([
            'nama_skema' => $row[1],

        ]);
    }

    public function startRow(): int
    {
        return 3;
    }
}
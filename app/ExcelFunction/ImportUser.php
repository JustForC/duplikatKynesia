<?php

namespace App\ExcelFunction;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class ImportUser implements ToModel, WithUpserts, WithHeadingRow
{
    public function model(array $row)
    {
        return new User([

        ]);
    }

    public function uniqueBy()
    {
        return 'email';
    }
}

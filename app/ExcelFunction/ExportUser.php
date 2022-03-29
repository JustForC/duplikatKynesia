<?php

namespace App\ExcelFunction;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class ExportUser implements FromCollection, WithHeadings, WithStrictNullComparison
{
    public function collection()
    {
        return User::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'Email',
            'Verified',
            'Admin',
            'Status Seleksi Satu',
            'Status Seleksi Dua',
            'Link Wawancara',
            'Tanggal Wawancara',
        ];
    }
}

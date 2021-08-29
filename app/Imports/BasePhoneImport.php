<?php

namespace App\Imports;

use App\Models\BasePhone;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BasePhoneImport implements ToModel, WithHeadingRow, WithCustomCsvSettings
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BasePhone([
            'carteira' => $row['carteira'],
            'tn' => $row['tn'],
            'contrato' => $row['contrato'],
            'cpf' => $row['cpf'],
            'tipo_contato' => $row['tipo_contato'],
            'contato' => $row['contato'],
            'classificacao' => $row['classificacao'],
            'origem' => $row['origem'],
            'score' => $row['score'],
            'data_modificacao' => $row['data_modificacao'],
            'whatsapp' => $row['whatsapp'],
        ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';',
        ];
    }
}

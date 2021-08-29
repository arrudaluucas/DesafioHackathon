<?php

namespace App\Service;

use Illuminate\Support\Facades\Storage;

class ExportFileSms
{
    protected function setName($typeSms, $portfolio, $costCenter, $date, $begin, $trie, $sector, $count)
    {
        return $typeSms.' ['.$portfolio.'] '.$costCenter.' - '.$date.' '.$begin.' as '.$trie.' - '.$sector.' ['.$count.'] – 22.txt';
    }


    /**
     * @param $params array
     * @param $typeSms string - S = tipo do SMS ex: short cold
     * @param $portfolio string - Carteira
     * @param $costCenter float - Centro de custo
     * @param $date string ddmmYYYY - data do envio
     * @param $begin int horário que se iniciará o primeiro disparo
     * @param $trie int Horario que será feita a tentativa da entrega
     * @param $sector string - padrão de identificação do setor 
     * @param $count int - quantidade de envio (total de linhas do txt)
     */
    public function generate($params, $typeSms, $portfolio, $costCenter, $date, $begin, $trie, $sector, $count)
    {
        $fileName = $this->setName(
            $typeSms,
            $portfolio,
            $costCenter,
            $date,
            $begin,
            $trie,
            $sector,
            $count
        );

        $contents = [];
        foreach($params as $register) {
            $contents[] = $register['phone'].'|'.$register['message'].'|'.$register['tpn_document'];
        }

        Storage::disk('local')->put($fileName, implode("\n", $contents));
    }
}
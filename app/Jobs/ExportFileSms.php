<?php

namespace App\Jobs;

use App\Service\ExportFileSms as ServiceExportFileSms;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Throwable;

class ExportFileSms implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $params;
    protected $typeSms;
    protected $portfolio;
    protected $costCenter;
    protected $date;
    protected $begin;
    protected $trie;
    protected $sector;
    protected $count;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($params, $typeSms, $portfolio, $costCenter, $date, $begin, $trie, $sector, $count)
    {
        $this->params = $params;
        $this->typeSms = $typeSms;
        $this->portfolio = $portfolio;
        $this->costCenter = $costCenter;
        $this->date = $date;
        $this->begin = $begin;
        $this->trie = $trie;
        $this->sector = $sector;
        $this->count = $count;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $serviceExportFileSms = new ServiceExportFileSms();
        $serviceExportFileSms->generate(
            $this->params,
            $this->typeSms,
            $this->portfolio,
            $this->costCenter,
            $this->date,
            $this->begin,
            $this->trie,
            $this->sector,
            $this->count
        );
    }

    public function failed(Throwable $exception)
    {
        Log::info('Falha para gerar o arquivo sms', [$exception]);
    }
}

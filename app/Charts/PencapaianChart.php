<?php

namespace App\Charts;

use App\Models\PencapaianPelatih;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PencapaianChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $pencapaianPelatih = PencapaianPelatih::get();
        $data = [
            $pencapaianPelatih->where('individu')->count(),
            $pencapaianPelatih->where('trofi')->count()
        ];

        $label = [
            'Total Trofi Tim',
            'Total Penghargaan Individu',
        ];

        return $this->chart->donutChart()
            ->setTitle('Pencapaian Pelatih')
            ->setSubtitle(date('Y'))
            ->setWidth(400)
            ->setHeight(400)
            ->addData($data)
            ->setLabels($label);
    }
}

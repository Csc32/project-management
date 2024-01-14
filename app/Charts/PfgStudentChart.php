<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class PfgStudentChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('estudiantes')->setFontFamily('montserrat')->setFontColor("#1e1e1e")
            ->setSubtitle('Season 2021.')
            ->addData([40, 50, 30])
            ->setLabels(['Player 7', 'Player 10', 'Player 9']);
    }
}

<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class PfgTeacherChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Profesores')->setFontFamily('montserrat')->setFontColor("#1e1e1e")
            ->addData([10, 20, 30])
            ->setLabels(['Player 7', 'Player 10', 'Player 9']);
    }
}

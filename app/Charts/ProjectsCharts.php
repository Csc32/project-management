<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class ProjectsCharts
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->addData([
                \App\Models\Projects::where("isPresent", "=", true)->count("id"),
                \App\Models\Projects::where("isPresent", "=", false)->count("id")
            ])
            ->setLabels(['Presentados', "por presentar"])->setDataLabels(true);
    }
}

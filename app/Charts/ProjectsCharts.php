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
                \App\Models\Projects::with("student_id")->where("presented_at", "!=", null)->count("student_id"),
                \App\Models\Projects::with("student_id")->where("presented_at", "!=", "2000-01-01")->count("student_id")
            ])
            ->setLabels(['Presentados', "por presentar"])->setDataLabels(true);
    }
}

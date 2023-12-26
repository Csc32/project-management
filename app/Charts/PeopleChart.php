<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class PeopleChart
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
                \App\Models\User::with("role_fk")->where("rol_fk", "=", 2)->count("id"),
                \App\Models\User::with("role_fk")->where("rol_fk", "=", 3)->count("id"),
            ])
            ->setLabels(["Profesores", "Estudiantes"]);
    }
}

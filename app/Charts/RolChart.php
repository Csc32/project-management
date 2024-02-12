<?php

namespace App\Charts;

use App\Models\Roles;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class RolChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $roles = Roles::withCount('users')->get();

        $data = $roles->pluck('users_count');
        $arrayData = $data->toArray();

        return $this->chart->pieChart()
            ->setTitle('Total Usuarios')->setFontFamily('montserrat')->addData($arrayData)->setLabels($roles->pluck('name')->toArray());
    }
}

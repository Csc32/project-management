<?php

namespace App\Charts;

use App\Models\Pfgs;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Database\Eloquent\Builder;

class PfgTeacherChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $studentByPfg = Pfgs::withCount(['user' => function (Builder $query) {
            $query->where('users.rol_fk', '=', 2);
        }])->get();
        $data = $studentByPfg->pluck('user_count');

        $arrayData = $data->toArray();

        return $this->chart->pieChart()
            ->setTitle('Total de profesores')->setFontFamily('montserrat')
            ->addData($arrayData)
            ->setLabels($studentByPfg->pluck('name')->toArray());
    }
}

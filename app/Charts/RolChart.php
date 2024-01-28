<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class RolChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $roles = Roles::withCount('users')->get();
        $userCount = $roles->pluck('users_count');
        $chart = $this->chart->barChart()
            ->setTitle('Total de Ususarios por roles')
            ->setFontFamily('montserrat');
        foreach ($roles as $role) {
            $userCount = $role->users_count;
            $chart->addData($role->name, [$userCount]);
        }
        $chart->setLabels(['Total de usuarios'])->setFontFamily('montserrat');
        return $chart;
    }
}

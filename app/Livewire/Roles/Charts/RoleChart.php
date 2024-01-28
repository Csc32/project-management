<?php

namespace App\Livewire\Roles\Charts;

use Livewire\Component;
use App\Charts\RolChart;

class RoleChart extends Component
{
    public function render(RolChart $rolChart)
    {
        return view('livewire.roles.charts.role-chart', ['rolChart' => $rolChart->build()]);
    }
}

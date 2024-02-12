<?php

namespace App\Livewire\Roles\Charts;

use App\Charts\RolChart;
use Livewire\Component;

class RoleChart extends Component
{
    public function render(RolChart $rolChart)
    {
        return view('livewire.roles.charts.role-chart', ['rolChart' => $rolChart->build()]);
    }
}

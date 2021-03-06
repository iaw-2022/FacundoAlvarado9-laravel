<?php

namespace App\View\Components\Variedad;

use Illuminate\View\Component;
use App\Models\Tostaduria;

class FilterTostaduriaDropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.variedad.filter-tostaduria-dropdown', [
            'tostadurias' => Tostaduria::all(),
            'currentTostaduria' => Tostaduria::firstWhere('nombre', request('tostaduria'))
        ]);
    }
}

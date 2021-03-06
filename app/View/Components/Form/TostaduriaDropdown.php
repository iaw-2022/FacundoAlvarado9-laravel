<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use App\Models\Tostaduria;

class TostaduriaDropdown extends Component
{
  public $variedad;
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($variedad = NULL)
  {
      $this->variedad = $variedad;
  }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.tostaduria-dropdown', [
            'tostadurias' => Tostaduria::all()
        ]);
    }
}

<?php

namespace Paksuco\Slider\Components;

use Livewire\Component;

class Admin extends Component
{
    public function mount()
    {
    }

    public function render()
    {
        return view("paksuco-slider::admin")
            ->layout(config("paksuco-slider.template_to_extend", "layouts.app"));
    }
}

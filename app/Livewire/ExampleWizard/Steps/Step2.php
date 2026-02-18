<?php

namespace App\Livewire\ExampleWizard\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class Step2 extends StepComponent
{
    public function render()
    {
        return view('checkout-wizard.steps.step-2');
    }
}

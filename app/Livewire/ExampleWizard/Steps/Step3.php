<?php

namespace App\Livewire\ExampleWizard\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class Step3 extends StepComponent
{
    public function render()
    {
        return view('checkout-wizard.steps.step-3');
    }
}

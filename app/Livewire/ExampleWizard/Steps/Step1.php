<?php

namespace App\Livewire\ExampleWizard\Steps;

use Livewire\Attributes\Validate;
use Spatie\LivewireWizard\Components\StepComponent;

class Step1 extends StepComponent
{
    public int $number;

    #[Validate('required')]
    public string $stepText;

    public function render()
    {
        return view('checkout-wizard.steps.step-1');
    }

    public function nextStep()
    {
        $this->validate();

        parent::nextStep();
    }
}

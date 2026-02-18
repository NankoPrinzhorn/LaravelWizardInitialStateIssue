<?php

namespace App\Livewire\ExampleWizard;

use App\Livewire\ExampleWizard\Steps\Step1;
use App\Livewire\ExampleWizard\Steps\Step2;
use App\Livewire\ExampleWizard\Steps\Step3;
use Spatie\LivewireWizard\Components\WizardComponent;
use Spatie\LivewireWizard\Support\State;

class ProductState extends State
{
    public function getStep1Data()
    {
        $data = $this->forStepClass(Step1::class);
        $data = $this->forStep('example-wizard.steps.step1');

        return [
            'number' => $data['number'],
            'stepText' => $data['stepText'], // This will throw an error in step 3
        ];
    }
}

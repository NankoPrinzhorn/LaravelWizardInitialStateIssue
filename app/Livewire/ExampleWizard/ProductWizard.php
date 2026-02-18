<?php

namespace App\Livewire\ExampleWizard;

use App\Livewire\ExampleWizard\Steps\Step1;
use App\Livewire\ExampleWizard\Steps\Step2;
use App\Livewire\ExampleWizard\Steps\Step3;
use Spatie\LivewireWizard\Components\WizardComponent;

class ProductWizard extends WizardComponent
{
    public int $number;

    public function steps(): array
    {
        return [
            Step1::class,
            Step2::class,
            Step3::class,
        ];
    }

    public function stateClass(): string
    {
        return ProductState::class;
    }

    public function initialState(): ?array
    {
        return [
            'example-wizard.steps.step1' => [
                'number' => $this->number,
                // 'stepText' => 'fake text to simulate it resets', // Uncomment to see it reset
            ],
        ];
    }
}

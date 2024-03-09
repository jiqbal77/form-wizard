<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class FormFirstStep extends Component
{
    public string $currentStep = 'initial';
    public string $previousStep = 'initial';

    public string
        $firstName,
        $lastName,
        $address,
        $city,
        $country,
        $day,
        $month,
        $year,
        $martialStatus,
        $marriageCountry,
        $marriageDay,
        $marriageMonth,
        $widowed,
        $everMarried,
        $marriageYear,
        $isUserAdult;

    public array $stepsRules = [
        'initial' => [
            'firstName' => 'required',
            'lastName' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
        ],
        'second' => [
            'martialStatus' => 'required',
            'marriageDay' => 'required_if:martialStatus,yes',
            'marriageMonth' => 'required_if:martialStatus,yes',
            'marriageYear' => 'required_if:martialStatus,yes',
            'marriageCountry' => 'required_if:martialStatus,yes',
            'widowed' => 'required_if:martialStatus,no',
            'everMarried' => 'required_if:martialStatus,no',
        ],
    ];


    public function mount()
    {
        $this->martialStatus = 'no';
        $this->isUserAdult = 'yes';
    }

    public function render()
    {
        return view('livewire.form-first-step');
    }

    public function updateStep($step, $previous = false)
    {
        if (!$previous)
            $this->validate($this->stepsRules[$this->currentStep]);
        $this->previousStep = ($this->currentStep == 'result') ? 'initial' : $this->currentStep;
        $this->currentStep = $step;
    }

    public function updated($propertyName)
    {
        if ($propertyName == 'marriageYear' && $this->martialStatus == 'yes') {
            $this->isUserAdult = $this->isUserAdult();
        } else {
            $this->isUserAdult = true;
        }
    }

    // checking age based on years only
    public function isUserAdult(): bool
    {
        return (($this->marriageYear - $this->year) >= 18);
    }
}

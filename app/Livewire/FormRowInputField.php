<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class FormRowInputField extends Component
{
    public $label, $type, $colSpan, $classes, $id, $model, $reactive;

    public function mount($label, $type, $colSpan, $id, $model,$reactive = false,$classes = ''): void
    {
        $this->label = $label;
        $this->type = $type;
        $this->reactive = $reactive;
        $this->colSpan = $colSpan;
        $this->classes = $classes;
        $this->id = $id;
        $this->model = $model;
    }

    public function render(): View
    {
        return view('livewire.form-row-input-field');
    }
}

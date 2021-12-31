<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminAddHomeSliderComponent extends Component
{
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;

    public function mount()
    {
        $this->status = 0;
    }


    public function render()

    {
        return view('livewire.admin.admin-add-home-slider-component')->layout('layouts.base');
    }
}

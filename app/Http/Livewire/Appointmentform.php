<?php

namespace App\Http\Livewire;
use App\Models\requestedappointment;
use Livewire\Component;

class Appointmentform extends Component
{
    public $name;
    public $email;
    public $phone;
    public $address;
    public $message;

    public function store_requested_appointment()
    {
        $this->validate([
            'name' => 'required|',
            'email' => 'required|email',
            'phone' => 'required|numeric|max:10000000000000',
            'address' => 'required',
            'message' => 'required|max:550',
        ]);

        requestedappointment::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'message' => $this->message
        ]);

        //unset variables
        $this->name = "";
        $this->email = "";
        $this->phone = "";
        $this->address = "";
        $this->message = "";

        session()->flash('message', 'Görüşünüz uğurla əlavə edildi.');
    }
    public function render()
    {
        return view('livewire.appointmentform');
    }
}

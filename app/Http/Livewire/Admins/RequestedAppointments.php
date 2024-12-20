<?php

namespace App\Http\Livewire\Admins;

use App\Models\patient;
use App\Models\requestedAppointment;
use Livewire\Component;
use Livewire\WithPagination;


class RequestedAppointments extends Component
{
    use WithPagination;

    public $name;
    public $email;
    public $phone;
    public $message;
    public $address;
    public $_page;

    public function mount()
    {
        $this->_page = 'index';
    }

    public function add_appointment()
    {
        $this->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "message" => "required",
            "address" => "required",
        ]);

        requestedAppointment::create([
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            "message" => $this->message,
            "address" => $this->address,
        ]);

    }

    public function delete($id)
    {
        $project = requestedAppointment::findOrFail($id);
        $project->delete();

        session()->flash('message', 'Proyekt uğurla silindi.');
    }

    public function show_create_form()
    {
        $this->_page = "create";
    }

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $this->_page == "index";
        return view('livewire.admins.requested-appointments.index', [
            'appointments' => requestedAppointment::latest()->paginate(10),
        ])->layout('admins.layouts.app');
    }
}

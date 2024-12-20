<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admins.dashboard', [
            'subscribers' => \App\Models\subscriber::count(),
            'requestedAppointment' => \App\Models\requestedAppointment::count(),
            'messagesCount' => \App\Models\Contact::count(),
            'projectscount' => \App\Models\Project::count(),
        ])->layout('admins.layouts.app');
    }
}


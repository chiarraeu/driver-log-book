<?php

namespace App\Http\Livewire;

use App\Models\Travel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Tables extends Component
{
    public function render()
    {
        $travels = $this->getTravels();
        return view('livewire.tables', compact('travels'));
    }

    private function getTravels()
    {
        if (Auth::user()->role_id == 3) {
            return Travel::orderBy('created_at', 'desc')->get();
        }

        return Travel::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
    }
}

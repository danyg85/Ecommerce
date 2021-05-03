<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
    
    public $link;

    public function link($link)
    {
      $this->link = $link;

      $this->emit('link', $this->link);
      
    }
    
    public function render()
    {
        return view('livewire.admin.sidebar');
    }
}

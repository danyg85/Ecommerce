<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;

use Livewire\Component;
use App\Models\Product;
use App\Models\User;



class Mainadmin extends Component
{
    
      
    public $link = 'mainadmin';

    public $products; 
    
    public $users;


    protected $listeners = ['link'];

    public function mount(){

        $this->users = User::All();

        $this->products = Product::All();

    }

    public function link($link){

        $this->link = $link;

    }


    public function render()

    {               
        return view('livewire.admin.'.$this->link);
    }
}

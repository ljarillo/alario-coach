<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public string $resource;
    public string $reference;
    public string $idreference;
    public array $columns;
    public string $show;
    public string $edit;
    public string $delete;

    public function render()
    {
        if(isset($this->reference) && isset($this->idreference)){
            return view('livewire.table', [
                'items' => app("App\Models\\" . $this->resource)->where($this->reference, $this->idreference)->paginate(10)
            ]);
        }
        return view('livewire.table', [
            'items' => app("App\Models\\" . $this->resource)->paginate(10)
        ]);
    }
}

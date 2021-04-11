<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class CompaniesCreate extends Component
{
    
    use WithFileUploads;

    public $name, $logo, $url;

    protected $rules = [
        'name' => 'required',
        'logo' => 'nullable|image|mimes:jpg,jpeg,gif,png|max:1024'
    ];

    public function save()
    {
        $this->validate();
        Company::create([
            'name' => $this->name,
            'logo' => $this->logo,
            'url' => Str::slug($this->name)
        ]);
         $this->reset(['name', 'logo', 'url']);
         $this->emitTo('companies-index','render');

    }

    public function render()
    {
        return view('livewire.companies.companies-create');
    }
}

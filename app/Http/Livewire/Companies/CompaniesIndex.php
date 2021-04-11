<?php

namespace App\Http\Livewire\Companies;


use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;

class CompaniesIndex extends Component
{
    use WithPagination;

    public $search = '';

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'render' => 'render'
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $companies = Company::where('name', 'LIKE', '%' . $this->search . '%' )
                      ->latest()
                      ->paginate(3);
        
        return view('livewire.companies.companies-index', compact('companies'));
    }
}

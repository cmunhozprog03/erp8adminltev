<div>
    <div class="row">
        <div class="col-md-3">
            <h2>Empresas</h2>
        </div>
        <div class="col-md-3 my-3">
            @livewire('companies.companies-create')
        </div>
        
        <div class="col-md-6">
            <input type="text" class="w3-input my-3 w3-border-dark-gray" wire:model="search" placeholder="Pesquisar...">
        </div>
    </div>
    @if ($companies->count())
    <div class="w3-card-4">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="w3-dark-gray">
                    <tr>
                        <td width="7%">ID</td>
                        <td width="58%">EMPRESA</td>
                        <td width="20%">LOGO</td>
                        <td width="15%">AÇÕES</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td class="w3-center">{{ $company->id }}</td>
                            <td>{{ $company->name }}</td>
                            <td class="w3-center">{{ $company->logo }}</td>
                            <td class="w3-center">
                                <a href="">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$companies->links()}}
        </div>
    </div>
    @else
        <div class="w3-card-4 alert alert-secondary p-3">
            Nenhum registro encontrado.
        </div>
    @endif
    
  
  
  
  
    
</div>

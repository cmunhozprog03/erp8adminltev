<div>
    <a href="" class="btn w3-dark-gray" data-toggle="modal" data-target="#companiesModal">
        <i class="fas fa-plus-circle"></i>&nbsp;&nbsp;Adicionar</a>


    <!-- Modal -->
  <div class="modal fade" id="companiesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w3-animate-zoom modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header w3-dark-gray">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar Empresa</h5>
          <button type="button" class="close w3-text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="" >
            <label for="">Nome:</label>
            <input type="text" class="w3-input" wire:model.defer="name">
            @error('name')
                <span class="text-red-700">{{ $message }}</span>
            @enderror


            <label for="">Logotipo</label>
            <input type="file" class="w3-input" wire:model="logo">
            @error('logo')
                <span class="text-red-700">{{ $message }}</span>
            @enderror
            <div class="row justify-content-around">
                <button type="button" class="btn btn-outline-dark my-2" data-dismiss="modal">Cancelar</button>
                <button wire:click="save" class="btn btn-secondary my-2">Salvar</button>
            </div>
            
        </form>
        </div>
        
      </div>
    </div>
  </div>
    
</div>

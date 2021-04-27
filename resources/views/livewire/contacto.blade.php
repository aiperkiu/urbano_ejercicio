<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">


      <x-form-section>

        <x-slot name="form" >

          <div class="col-span-6 sm:col-span-2">

              <x-label for="contacto.nombre" class="block text-sm">
                <x-input type="text" wire:model="contacto.nombre"
                  placeholder="Nombre..." />
                  <x-input-error for="contacto.nombre" class="mt-2" />
              </x-label>

          </div>

          <div class="col-span-6 sm:col-span-2">

              <x-label for="contacto.apellido" class="block text-sm">
                <x-input type="text" wire:model="contacto.apellido"
                    placeholder="Apellido..." />
                    <x-input-error for="contacto.apellido" class="mt-2" />
              </x-label>

          </div>

          <div class="col-span-6 sm:col-span-2">

              <x-label for="contacto.edad" class="block text-sm">
                <x-input type="text" wire:model="contacto.edad"
                      placeholder="Edad.." />
                      <x-input-error for="contacto.edad" class="mt-2" />
              </x-label>

          </div>

          <x-slot name="actions">

              <x-button wire:click="triggerSave" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  {{ __('Guardar') }}
              </x-button>

          </x-slot>






        </x-slot>


    </x-form-section>

    <div wire:poll.keep-alive wire:ignore>

      <livewire:datatable
          model="App\Models\Contact"
          with=""
          sort="nombre|asc"
          include="id, nombre, apellido, edad"
          searchable="nombre, apellido"
          hide=""
          dates=""
          times=""
          editable="nombre,apellido"
          hideable="select"
          exportable
      />

    </div>



</div>

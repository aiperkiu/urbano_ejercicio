<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">


      <x-form-section>

        <div class="grid flex flex-wrap grid-cols-1">

            <x-slot name="form" >


              <div class="col-span-12 sm:col-span-2">

                  <x-label for="grupo.nombre" class="block text-sm">
                    <x-input type="text" wire:model="grupo.nombre"
                      placeholder="Nombre..." />
                      <x-input-error for="grupo.nombre" class="mt-2" />
                  </x-label>

              </div>


          <x-slot name="actions">

              <x-button wire:click="triggerSave" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  {{ __('Guardar') }}
              </x-button>

          </x-slot>






        </x-slot>

          </div>

    </x-form-section>



</div>

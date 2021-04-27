<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">


      <x-form-section>

        <div class="grid flex flex-wrap grid-cols-1">

            <x-slot name="form" >


              <div class="col-span-12 sm:col-span-2">

                  <x-label for="contacto.nombre" class="block text-sm">
                    <x-input type="text" wire:model="contacto.nombre"
                      placeholder="Nombre..." />
                      <x-input-error for="contacto.nombre" class="mt-2" />
                  </x-label>

              </div>

              <div class="col-span-12 sm:col-span-2">

                  <x-label for="contacto.apellido" class="block text-sm">
                    <x-input type="text" wire:model="contacto.apellido"
                        placeholder="Apellido..." />
                        <x-input-error for="contacto.apellido" class="mt-2" />
                  </x-label>

              </div>

              <div class="col-span-12 sm:col-span-8">

                  <x-label for="contacto.email" class="block text-sm">
                    <x-input type="text" wire:model="contacto.email"
                          placeholder="Email.." />
                          <x-input-error for="contacto.email" class="mt-2" />
                  </x-label>

              </div>

              <div class="col-span-12 sm:col-span-12">

                  <x-label for="contacto.observaciones" class="block text-sm">
                    <x-input type="text" wire:model="contacto.observaciones"
                          placeholder="Observaciones.." />
                          <x-input-error for="contacto.observaciones" class="mt-2" />
                  </x-label>

              </div>



              <div class="col-span-12 sm:col-span-3">

                   <select class=" bg-white border p-2 border-gray-150 text-sm rounded-sm" wire:model="contacto.fk_grupo">

                       <option value=""> Seleccione Grupo </option>

                       @foreach($grupos as $grupo)

                           <option value="{{ $grupo->id }}" >{{ $grupo->nombre }}</option>

                       @endforeach

                   </select>

                   <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
                       @foreach ($errors->get('contacto.fk_grupo') as $message)
                       <span>{{ $message }} </span>
                       @endforeach
                   </ul>

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

<x-app-layout title="Form-Contact">
  <div class="container grid px-6 mx-auto">
      <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
          Grupos
      </h2>

      <!-- General elements -->
      <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
          Añadir nuevo grupo de clientes
      </h4>


      <livewire:grupo.create />


      <!-- General elements -->
      <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
          Busque y edite los grupos en linea
      </h4>

      <div wire:poll.keep-alive wire:ignore>



        <livewire:grupo.grupodatatables/>



      </div>


  </div>
</x-app-layout>

<x-app-layout title="Form-Contact">
  <div class="container grid px-6 mx-auto">
      <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
          Clientes
      </h2>

      <!-- General elements -->
      <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
          Añadir nuevo cliente
      </h4>


      <livewire:contact.create />


      <!-- General elements -->
      <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
          Busque y edite los clientes en linea
      </h4>

      <!-- llamada al Controlador Livewire para modelar -->
      <div class="grid grid-cols-1 flex-wrap">
        <livewire:contact.contactodatatables />

      </div>

  </div>
</x-app-layout>

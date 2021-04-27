<?php

namespace App\Http\Livewire\Grupo;

#use App\Contact;
use App\Models\Grupo ;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
Use Alert;

class Create extends Component
{

    public Grupo $grupo;

     protected $rules = [
         'grupo.nombre' => 'required|min:4'
     ];

     protected $listeners = [
         'confirmed',
         'cancelled',
     ];

     protected $messages = [
         'grupo.nombre.required' => 'El campo nombre no puede estar vacio.',
         'grupo.nombre.min' => 'El campo nombre debe tener minimo 4 caracteres.',
     ];

     /*public function render(){
       return view('livewire.contacto');
     }*/

     public function mount(Grupo $grupo)
      {
        $this->grupo = $grupo;

      }


      public function confirmed()
      {
          // Example code inside confirmed callback
          #$this->validate();

          if ( $this->grupo->save() )
          {

              $this->flash('success', 'Grupo Creado', [
                    'position' =>  'top-end',
                    'timer' =>  3000,
                    'toast' =>  true,
                    'text' =>  ''
              ]);

              return redirect()->to('/grupo');


          }else {
            // code...
          }



      }

      public function cancelled()
      {
          // Example code inside cancelled callback

          #$this->alert('info', 'mmmmm...');
      }

      public function triggerSave()
      {

        if ( $this->validate() ) {

          $this->confirm('Desea crear el grupo?', [
              'toast' => true,
              'position' => 'center',
              'showConfirmButton' => true,
              'confirmButtonText' => "Si",
              'cancelButtonText' => "No",
              'onConfirmed' => 'confirmed',
              'onCancelled' => 'cancelled'
          ]);

        }


      }




}

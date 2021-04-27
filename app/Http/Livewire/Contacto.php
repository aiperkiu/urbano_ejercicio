<?php

namespace App\Http\Livewire;

#use App\Contact;
use App\Models\Contact ;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
Use Alert;

class Contacto extends Component
{

    public Contact $contacto;

     protected $rules = [
         'contacto.nombre' => 'required|min:4',
         'contacto.apellido' => 'required',
         'contacto.edad' => 'required|numeric',
     ];

     protected $listeners = [
         'confirmed',
         'cancelled',
     ];

     protected $messages = [
         'contacto.nombre.required' => 'El campo nombre no puede estar vacio.',
         'contacto.nombre.min' => 'El campo nombre debe tener minimo 4 caracteres.',
         'contacto.apellido.required' => 'El campo apellido no puede estar vacio.',
         'contacto.edad.required' => 'El campo edad no puede estar vacio.',
         'contacto.edad.numeric' => 'Debe ser un valor numerico.',
     ];

     /*public function render(){
       return view('livewire.contacto');
     }*/

     public function mount(Contact $contacto)
      {
        $this->contacto = $contacto;

      }


      public function confirmed()
      {
          // Example code inside confirmed callback
          #$this->validate();

          if ( $this->contacto->save() )
          {

              $this->flash('success', 'Contacto Creado!', [
                    'position' =>  'top-end',
                    'timer' =>  3000,
                    'toast' =>  true,
                    'text' =>  ''
              ]);

              return redirect()->to('/contacto');


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

          $this->confirm('Desea crear el contacto?', [
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

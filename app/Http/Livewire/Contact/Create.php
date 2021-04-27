<?php

namespace App\Http\Livewire\Contact;

#use App\Contact;
use App\Models\Contact;
use App\Models\Grupo;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
Use Alert;

class Create extends Component
{

    public Contact $contacto;
    public Grupo $grupo;


     protected $rules = [
         'contacto.nombre' => 'required|min:4',
         'contacto.apellido' => 'required',
         'contacto.email' => 'required|email:rfc,dns',
         'contacto.observaciones' => 'required',
         'contacto.fk_grupo' => 'required',

     ];

     protected $listeners = [
         'confirmed',
         'cancelled',
     ];

     protected $messages = [
         'contacto.nombre.required' => 'El campo nombre no puede estar vacio.',
         'contacto.nombre.min' => 'El campo nombre debe tener minimo 4 caracteres.',
         'contacto.apellido.required' => 'El campo apellido no puede estar vacio.',
         'contacto.observaciones.required' => 'El campo observaciones no puede estar vacio.',
         'contacto.email.required' => 'El campo email no puede estar vacio.',
         'contacto.email.email' => 'El email no tiene la forma correcta (@, .com, etc).',
         'contacto.fk_grupo.required' => 'El grupo es necesario',
     ];

     public function render(){

       return view('livewire.contact/create', [
                  'grupos' => Grupo::all(),
              ]);

     }

     public function mount(Contact $contacto, Grupo $grupo)
      {
        $this->contacto = $contacto;
        #$grupo = Grupo::all();
        #$this->grupo_fk = Grupo::find();

      }


      public function confirmed()
      {
          // Example code inside confirmed callback
          #$this->validate();

          if ( $this->contacto->save() )
          {

              $this->flash('success', 'Contacto Creado', [
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

          $this->confirm('¿Desea crear el contacto?', [
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

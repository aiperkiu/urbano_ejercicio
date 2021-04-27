<?php

namespace App\Http\Livewire\Grupo;

use App\Models\Grupo;
use App\Models\Contact;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
Use Alert;

class Grupodatatables extends LivewireDatatable
{
    public $grupo = Grupo::class;

    public function builder()
        {
            return Grupo::query();
        }


    protected $rules = [
        'grupo.nombre' => 'required|min:4'
    ];


    public function columns()
    {
        return [
            NumberColumn::name('id'),

            Column::name('nombre')->filterable()->searchable()->editable(),




        ];
    }

    /*public function render(){
      return view('livewire.contacto');
    }*/


     public function confirmed()
     {
         // Example code inside confirmed callback
         #$this->validate();

         /*if ( $this->contacto->save() )
         {

             $this->flash('success', 'Contacto Creado', [
                   'position' =>  'top-end',
                   'timer' =>  3000,
                   'toast' =>  true,
             ]);

             #return redirect()->to('/contacto');


         }else {
           // code...
         }*/



     }

     public function cancelled()
     {
         // Example code inside cancelled callback

         #$this->alert('info', 'mmmmm...');
     }

     /*public function triggerSave()
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


     }*/


    public function delete($id){

      if ( Contact::where('id',$id)->delete() ){
        #$this->emit('notify-delete');
        #Alert::success('Success Title', 'Success Message');
        #toast('Your Post as been submited!','success');

      }


    }
}

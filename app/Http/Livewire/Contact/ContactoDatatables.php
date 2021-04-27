<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

Use Alert;

class Contactodatatables extends LivewireDatatable
{
    public $model = Contact::class;

    public function builder()
        {
            return Contact::query()->leftJoin('grupo', 'grupo.id', 'contacts.fk_grupo');;
        }


    protected $rules = [
        'nombre' => 'required|min:4',
        'apellido' => 'required',
        'email' => 'required|email:rfc,dns',
        'observaciones' => 'required',
    ];


    public function columns()
    {
        return [

            Column::delete()->label('borrar')->alignRight(),

            #NumberColumn::name('id'),
            Column::name('nombre')->filterable()->searchable()->editable(),

            Column::name('apellido')->filterable()->searchable()->editable(),

            Column::name('observaciones')->filterable()->searchable()->editable(),

            #Column::name('email')->filterable()->searchable()->editable(),
            Column::name('email')->filterable()->searchable()->editable(),

          Column::name('grupo.nombre')->filterable()->searchable()->label('Grupo'),




        ];
    }

    public function getGrupoProperty()
    {
        return Grupo::pluck('nombre');
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

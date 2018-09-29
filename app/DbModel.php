<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class DbModel extends Model
{
    public function dBase($idTab)
    {
      $tbl = DB::table('bid_'.$idTab)->get();
      // dd($tbl);
      return $tbl;

    }

    // public function buildForm()
    // {
    //     $this
    //         ->add('title', 'text')
    //         ->add('body', 'textarea')
    //         ->add('tags', 'collection', [
    //             'type' => 'text',
    //             'property' => 'name',    // Which property to use on the tags model for value, defualts to id
    //             'data' => [],            // Data is automatically bound from model, here we can override it
    //             'options' => [    // these are options for a single type
    //                 'label' => false,
    //                 'attr' => ['class' => 'tag']
    //             ]
    //         ]);
    // }
}

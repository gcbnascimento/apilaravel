<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\MasterApiController;
use App\Models\Documento;

class DocumentoApiController extends MasterApiController
    {
        protected $model;
        protected $upload;
        protected $path;
     
         public function __construct(Documento $doc, Request $request)
         {
             $this->model = $doc;
             $this->request = $request;
         }

         public function cliente($id){
             
        if(!$data = $this->model->with('cliente')->find($id)){
            return response()->json(['error'=> 'Nada foi encontrado!'],404);
        }else{
        return response()->json($data);
        }
         } 
     
     
     
     
     }
     
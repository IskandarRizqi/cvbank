<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class TemplateController extends Controller
{
    public function index()
    {
        
       $data['informasipribadi']=DB::table('informasipribadi')->latest()->first();
       $data['pengalamanumum']=DB::table('pengalamanumum')->get();
       $data['pengalamanbank']=DB::table('pengalamanbank')->get();
       $data['formal']=DB::table('formal')->get();
       $data['nonformal']=DB::table('nonformal')->get();
       $data['medsos']=DB::table('medsos')->get();

        return view('admin.pages.preview.template',$data);
    }

}

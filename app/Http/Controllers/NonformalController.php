<?php

namespace App\Http\Controllers;

use App\Models\NonFormalModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class NonformalController extends Controller
{
    public function index()
    {
        $data['nonformal'] = NonFormalModel::get();
        return view('admin.pages.pendidikan.nonformal.index',$data);
    }

    public function create()
    {
        return view('admin.pages.pendidikan.nonformal.tambah');
    }

    public function store(Request $request)
    {
        $data = $request;
      
        for ($i=0; $i < count($data->no); $i++) { 
            NonFormalModel::create([
                'no'=>$data->no[$i],'namakursus'=>$data->namakursus[$i],'institusi'=>$data->institusi[$i], 'tahun'=>$data->tahun[$i], 'lokasi'=>$data->lokasi[$i]
            ]);
        }
            return redirect('/nonformal')->with('ss', 'Berhasil tambah ');
    }

        public function show(string $id)
        {
            $data['edit'] = NonFormalModel::where('id', $id)->first();
            return view('admin.pages.nonformal.edit', $data);
        }

        public function edit(string $id)
        {
            //
        }

        public function update(Request $request, string $id)
        {
            $validator = Validator::make($request->all(), [
                'no'  => 'required',
                'namakursus'  => 'required',
                'institusi'=> 'required',
                'tahun'=> 'required',
                'lokasi'=> 'required',
              
         
               
            ]);
    
            // response error validation
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }
            NonFormalModel::where('id', $id)->update([
                'id' => $request->idnonformal,
                'no' => $request->no,
                'namakursus' => $request->namakursus,
                'institusi' => $request->institusi,
                'tahun' => $request->tahun,
                'lokasi' => $request->lokasi,
            
       
            ]);
            return redirect('/nonformal')->with('success', 'Berhasil edit ');
        }

        public function destroy(string $id)
        {
            NonFormalModel::where('id', $id)->delete();
            return redirect('/nonformal')->with('success', 'Berhasil hapus data');
        }
}

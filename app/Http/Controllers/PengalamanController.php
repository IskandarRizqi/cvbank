<?php

namespace App\Http\Controllers;

use App\Models\PengalamanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class PengalamanController extends Controller
{
    public function index()
    {
        return view('admin.pages.pengalamanumum.index');
    }

    public function create()
    {
        return view('admin.pages.pengalamanumum.tambah');
    }

    public function store(Request $request)
    {
        $data = $request;
      
        for ($i=0; $i < count($data->tahun); $i++) { 
            PengalamanModel::create([
                'tahun'=>$data->tahun[$i],'perusahaan'=>$data->perusahaan[$i],'posisikerja'=>$data->posisikerja[$i],'tanggungjawab'=>$data->tanggungjawab[$i],'prestasi'=>$data->prestasi[$i],'penghargaan'=>$data->penghargaan[$i]
            ]);
        }
        // Simpan data ke dalam database
        // SosialLinkModel::create($data);
         
   
            return redirect('/pengalamanumum')->with('ss', 'Berhasil tambah ');
        }

        public function show(string $id)
        {
            $data['edit'] = PengalamanModel::where('id', $id)->first();
            return view('admin.pages.pengalamanumum.edit', $data);
        }

        public function edit(string $id)
        {
            //
        }

        public function update(Request $request, string $id)
        {
            $validator = Validator::make($request->all(), [
                'tahun'  => 'required',
                'perusahaan'=> 'required',
                'posisikerja'=> 'required',
                'tanggungjawab'=> 'required',
                'prestasi'=> 'required',
                'penghargaan'=> 'required',
                
         
               
            ]);
    
            // response error validation
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }
            PengalamanModel::where('id', $id)->update([
                'id' => $request->idpengalaman,
                'tahun' => $request->tahun,
                'perusahaan' => $request->perusahaan,
                'posisikerja' => $request->posisikerja,
                'tanggungjawab' => $request->tanggungjawab,
                'prestasi' => $request->prestasi,
                'penghargaan' => $request->penghargaan,
               
        
       
            ]);
            return redirect('/pengalamanumum')->with('success', 'Berhasil edit ');
        }

        public function destroy(string $id)
        {
            PengalamanModel::where('id', $id)->delete();
            return redirect('/pengalamanumum')->with('success', 'Berhasil hapus data');
        }
}

<?php

namespace App\Http\Controllers;

use App\Models\PengalamanBankModel;
use App\Models\PengalamanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class PengalamanBankController extends Controller
{
    public function index()
    {
        return view('admin.pages.pengalamanbank.index');
    }

    public function create()
    {
        return view('admin.pages.pengalamanbank.tambah');
    }

    public function store(Request $request)
    {
        $data = $request;
      
        for ($i=1; $i < count($data->tahun); $i++) { 
            PengalamanBankModel::create([
                'tahun'=>$data->tahun[$i],'perusahaan'=>$data->perusahaan[$i],'posisikerja'=>$data->posisikerja[$i],'tanggungjawab'=>$data->tanggungjawab[$i],'prestasi'=>$data->prestasi[$i],'penghargaan'=>$data->penghargaan[$i],'omset'=>$data->omset[$i],
            ]);
        }
            return redirect('/pengalamanbank')->with('ss', 'Berhasil tambah ');
        }

        public function show(string $id)
        {
            $data['edit'] = PengalamanBankModel::where('id', $id)->first();
            return view('admin.pages.pengalamanbank.edit', $data);
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
                'omset'=> 'required',
                
         
               
            ]);
    
            // response error validation
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }
            PengalamanBankModel::where('id', $id)->update([
                'id' => $request->idpengalaman,
                'tahun' => $request->tahun,
                'perusahaan' => $request->perusahaan,
                'posisikerja' => $request->posisikerja,
                'tanggungjawab' => $request->tanggungjawab,
                'prestasi' => $request->prestasi,
                'penghargaan' => $request->penghargaan,
                'omset' => $request->omset,
               
        
       
            ]);
            return redirect('/pengalamanbank')->with('success', 'Berhasil edit ');
        }

        public function destroy(string $id)
        {
            PengalamanModel::where('id', $id)->delete();
            return redirect('/pengalamanbank')->with('success', 'Berhasil hapus data');
        }
}

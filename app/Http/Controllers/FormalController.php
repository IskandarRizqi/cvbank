<?php

namespace App\Http\Controllers;

use App\Models\FormalModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class FormalController extends Controller
{
    public function index()
    {
        $data['formal'] = FormalModel::get();
        return view('admin.pages.pendidikan.formal.index');
    }


    public function create()
    {
        return view('admin.pages.pendidikan.formal.tambah');
    }

    public function store(Request $request)
    {

        $data = $request;

      for ($i=0; $i < count($data->tingkatansekolah); $i++) { 
            FormalModel::create([
                'tingkatansekolah'=>$data->tingkatansekolah[$i],'tahun'=>$data->tahun[$i], 'namasekolah'=>$data->namasekolah[$i],'jurusan'=>$data->jurusan[$i] ,'gelar'=>$data->gelar[$i]
            ]);
        }
        // Simpan data ke dalam database
        // SosialLinkModel::create($data);
    
        return redirect('/formal')->with('success', 'Data berhasil disimpan.');
    }

        public function show(string $id)
        {
            $data['edit'] = FormalModel::where('id', $id)->first();
            return view('admin.pages.formal.edit', $data);
        }

        public function edit(string $id)
        {
            //
        }

        public function update(Request $request, string $id)
        {
            $validator = Validator::make($request->all(), [
                'tingkatansekolah'  => 'required',
                'tahun'  => 'required',
                'namasekolah'=> 'required',
                'jurusan'=> 'required',
                'gelar'=> 'required',
                ]);
    
            // response error validation
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }
            FormalModel::where('id', $id)->update([
                'id' => $request->idformal,
                'tingkatansekolah' => $request->tingkatansekolah,
                'tahun' => $request->tahun,
                'namasekolah' => $request->namasekolah,
                'jurusan' => $request->jurusan,
                'gelar' => $request->gelar,
            ]);
            return redirect('/formal')->with('success', 'Berhasil edit ');
        }

        public function destroy(string $id)
        {
            FormalModel::where('id', $id)->delete();
            return redirect('/formal')->with('success', 'Berhasil hapus data');
        } 
  
}

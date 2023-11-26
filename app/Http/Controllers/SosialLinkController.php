<?php

namespace App\Http\Controllers;

use App\Models\SosialLinkModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


 class SosialLinkController extends Controller
{
    public function index()
    {
        $data['medsos'] = SosialLinkModel::get();
        return view('admin.pages.medsos.index', $data);
    }

    public function create()
    {
        return view('admin.pages.medsos.tambah');
    }

    public function store(Request $request)
    {

        $data = $request;
      
        for ($i=0; $i < count($data->no); $i++) { 
            SosialLinkModel::create([
                'no'=>$data->no[$i],'media'=>$data->media[$i],'link'=>$data->link[$i]
            ]);
        }
        // Simpan data ke dalam database
        // SosialLinkModel::create($data);
    
        return redirect('/medsos')->with('success', 'Data berhasil disimpan.');
    }

        public function show(string $id)
        {
            $data['edit'] = SosialLinkModel::where('id', $id)->first();
            return view('admin.pages.medsos.edit', $data);
        }

        public function edit(string $id)
        {
            //
        }

        public function update(Request $request, string $id)
        {
            $validator = Validator::make($request->all(), [
                'no' => 'required',
                'media' => 'required',
                'link' => 'required',
               
               
            ]);
    
            // response error validation
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }
            SosialLinkModel::where('id', $id)->update([
                'id' => $request->idmedsos,
                'no' => $request->no,
                'media' => $request->media,
                'link' => $request->link,
              
                
            ]);
            return redirect('/medsos')->with('success', 'Berhasil edit ');
        }

        public function destroy(string $id)
        {
            SosialLinkModel::where('id', $id)->delete();
            return redirect('/medsos')->with('success', 'Berhasil hapus data');
        }

    
    }

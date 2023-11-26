<?php

namespace App\Http\Controllers;

use App\Models\InformasiPribadiModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class InformasiPribadiController extends Controller
{
    public function index()
    {
    
        $data['informasipribadi'] = InformasiPribadiModel::get();
        return view('admin.pages.informasipribadi.index',$data) ;
    }

    public function create()
    {
     


        return view('admin.pages.informasipribadi.tambah'); 
        
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {

            if ($request->hasFile('gambar')) { 
                $file = $request->file('gambar')->store('informasipribadi/' . time());
   
            $validator = Validator::make($request->all(), [
                'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'namalengkap' => 'required',
                'namapanggilan' => 'required',
                'ttl' => 'required',
                'agama' => 'required',
                'rumah' => 'required',
                'domisili' => 'required',
                'status' => 'required',
                'deskripsi' => 'required',
                
                
            ]);

            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }
    
            InformasiPribadiModel::Create([
                'id' => $request->idinformasipribadi,
                'gambar' => $file,
                'namalengkap' => $request->namalengkap,
                'namapanggilan' => $request->namapanggilan,
                'ttl'=> $request->ttl,
                'agama' => $request->agama,
                'rumah'=> $request->rumah,
                'domisili'=> $request->domisili,
                'status'=> $request->status,
                'deskripsi'=> $request->deskripsi,
                
               
                
                
            ]);

            return redirect('/informasipribadi')->with('sukses', 'Berhasil disimpan');
        }
    }
       
    


    // public function getkabupaten($id){
    //     return DB::table('kabupatens')->where('provinsi_id',$id)->get();
    // }
    // public function getkecamatan($id) {
       
    //     return DB::table('kecamatans')->where('kota_id',$id)->get();
    // }
    // public function getkelurahan($id) {
     
    //     return DB::table('kelurahans')->where('kecamatan_id',$id)->get();
    // }
    public function show(string $id)
    {
        $data['edit'] = InformasiPribadiModel::where('id', $id)->first();
        return view('admin.pages.informasipribadi.edit', $data);
    }

    // public function edit(string $id)
    // {
    //     //
    // }

    public function update(Request $request, string $id)
        {
            $validator = Validator::make($request->all(), [
                'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'namalengkap' => 'required',
                'namapanggilan' => 'required',
                'ttl' => 'required',
                'agama' => 'required',
                'rumah' => 'required',
                'domisili' => 'required',
                'status' => 'required',
                'deskripsi' => 'required',
              
                
               
            ]);
    
            // response error validation
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar')->store('informasipribadi/' . time());
            
            InformasiPribadiModel::where('id', $id)->update([
                'id' => $request->idinformasipribadi,
                'gambar'=> $file,
                'namalengkap' => $request->namalengkap,
                'namapanggilan' => $request->namapanggilan,
                'ttl'=> $request->ttl,
                'agama' => $request->agama,
                'rumah'=> $request->rumah,
                'domisili'=> $request->domisili,
                'status'=> $request->status,
                'deskripsi'=> $request->deskripsi,
             
                
            ]);
            return redirect('/informasipribadi')->with('success', 'Berhasil edit ');
        }

        // public function destroy(string $id)
        // {
        //     InformasiPribadiModel::where('id', $id)->delete();
        //     return redirect('/informaspribadi')->with('success', 'Berhasil hapus data');
        // }
    }

}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<style>
    table {
        border-collapse: collapse;
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
    }

    .table th,
    .table td {
        padding: 5pt;

        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table-bordered {
        border: 3px solid #000000;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #000000;
    }

    .table-bordered thead th,
    .table-bordered thead td {
        border-bottom-width: 2px;
    }

    .page-break {
        page-break-after: always;
    }

    @page {
        margin: 0cm 0cm;
    }

    body {
        margin-top: 60pt;
        margin-left: 70pt;
        margin-right: 70pt;
        margin-bottom: 10pt;
        /* margin: 0; */
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 6pt;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff;
    }

    .text-center {
        text-align: center !important;
    }

    b,
    strong {
        font-weight: bolder;
    }

    .text-uppercase {
        text-transform: uppercase !important;
    }

    .text-left {
        text-align: left;
    }

    .text-right {
        text-align: right;
    }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .float-left {
        float: left !important;
    }

    .float-right {
        float: right !important;
    }

    .float-none {
        float: none !important;
    }

    .fw-bold {
        font-weight: 700 !important;
    }

    h1,
    .h1 {
        font-size: 2.5rem;
    }

    h2,
    .h2 {
        font-size: 2rem;
    }

    h3,
    .h3 {
        font-size: 1.75rem;
    }

    h4,
    .h4 {
        font-size: 1.5rem;
    }

    h5,
    .h5 {
        font-size: 1.25rem;
    }

    h6,
    .h6 {
        font-size: 1rem;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0;
        margin-bottom: 0.5rem;
    }

    .d-flex {
        display: -ms-flexbox !important;
        display: flex !important;
    }

    .flex-row {
        -ms-flex-direction: row !important;
        flex-direction: row !important;
    }

    .flex-column {
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }

    .flex-row-reverse {
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
    }

    .flex-column-reverse {
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
    }

    .p-2 {
        padding: 0.5rem !important;
    }

    header {
        position: fixed;
        top: 10pt;
        left: 0pt;
        right: 55pt;
        height: 1cm;
        background-color: #ffffff;
        text-align: center;
        line-height: 1.5pt;
    }

    /** Define the footer rules **/
    footer {
        position: fixed;
        bottom: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;

        background-color: #ffffff;
        text-align: center;
        line-height: 1.5cm;
    }

    .img {
        margin-left: 60px;
    }

    .bordin {
        border: 2px solid rgb(5, 5, 5);
        padding: 2pt;
        width: 90px;
        height: 90px;
    }
    body {
            font-family: 'Cambria', sans-serif; /* Ganti 'Cambria' dengan font yang diinginkan */
            margin-top: 30pt;
            margin-left: 80pt;
            margin-right: 80pt;
            font-size: 13px;
            /* Sesuaikan dengan ukuran font yang diinginkan */
            /* ... tambahkan properti lain sesuai kebutuhan ... */
        }
</style>
<body>
    <h3 style=" text-align: center; margin-bottom:40px;">Daftar Riwayat Hidup</h3>

    <div style="display: flex; justify-content: left; align-items: center;">
     
        <img src="/gambarprofil?rf={{ $informasipribadi->gambar }}" class="icon-for-print print-image" width="90" height="120" style="display: inline-block; margin-right: 10px;">
        <div>
            <table >
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>{{$informasipribadi->namalengkap}}</td>
                
               
            </tr>
            <tr>
                <td>Nama Panggilan</td>
                <td>:</td>
                <td>{{$informasipribadi->namapanggilan}}</td>
            </tr>
            <tr>
                <td>Tempat & Tanggal Lahir</td>
                <td>:</td>
                <td>{{$informasipribadi->ttl}}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{$informasipribadi->agama}}</td>
            </tr>
            <tr>
                <td>Alamat Rumah</td>
                <td>:</td>
                <td>{{$informasipribadi->rumah}}</td>
            </tr>
            <tr>
                <td>Alamat Domisili</td>
                <td>:</td>
                <td>{{$informasipribadi->domisili}}</td>
            </tr>
            <tr>
                <td>Status Pernikahan</td>
                <td>:</td>
                <td >{{$informasipribadi->status}}</td>
            </tr>
           
            </table >

        
        </div>
        
    </div>

     
          
                <tr  >
                    <td> Tentang Saya</td>
                    <td>:</td>
                    <td>{{$informasipribadi->deskripsi}}</td>
                </tr>
          
      
    

   
            
            <div>
              

                <h3 style=" margin-top:25px; text-align: left; font-size: 15px; font-weight: bold;" >RIWAYAT PENDIDIKAN </h3>
                
                <table class="table table-bordered" style="width: 100%;">
                    <thead>
                        <tr>
                        
                            <th style="width: 20%; height:25%; text-align: center;">Tingkatan</th>
                            <th style="width: 16.67%;  text-align: center;">Tahun</th>
                            <th style="width: 16.67%;  text-align: center;">Nama Institusi</th>
                            <th style="width: 16.67%;  text-align: center;">Fakultas/Jurusan</th>
                            <th style="width: 16.67%;  text-align: center;">Lulus/Gelar yang dicapai</th>
                        </div>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        @foreach($formal as $f)
                        <tr >
                            <td >{{$f->tingkatansekolah}}</td>
                            <td >{{$f->tahun}}</td>
                            <td>{{$f->namasekolah}}</td>
                            <td>{{$f->jurusan}}</td>
                            <td>{{$f->gelar}}</td>
                        </tr>
                        @endforeach
                   
                       
                    </tbody>
                    
                </table>

            </div>
                
          

            <h3 style="   margin-top:25px; text-align: left; font-size: 15px; font-weight: bold;" >PELATIHAN/KURSUS YANG PERNAH DIIKUTI</h3>
                <table class="table table-bordered" style="width: 100%;" >
                    <thead >
                        <tr>
                        
                            <th style="width: 10%; height: 25%; text-align: center;">No </th>
                            <th style="width: 35%;  text-align: center;">Nama Pelatihan / Kursus</th>
                            <th style="width: 10%;  text-align: center;">Tahun </th>
                            <th style="width: 25%;  text-align: center;">Penyelenggara</th>
                            <th style="width: 20%;  text-align: center;">Lokasi </th> 
                        </div>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        @foreach($nonformal as $n)
                        <tr>
                            <td>{{$n->no}}</td>
                            <td>{{$n->namakursus}}</td>
                            <td>{{$n->tahun}}</td>
                            <td>{{$n->institusi}}</td>
                            <td>{{$n->lokasi}}</td>
                        </tr>
                        @endforeach
                 
                       
                    </tbody>
                    
                </table>

            </div>
                
            

            <h3 style="  margin-top:25px;  text-align: left; font-size: 15px; font-weight: bold;" >RIWAYAT PEKERJAAN NON PERBANKAN</h3>
            <table class="table table-bordered" style="width: 100%;">
                <thead>
                    <tr>
                    
                        <th style="width: 10%; height: 25%;  text-align: center;">Tahun</th>
                        <th style="width: 10%;  text-align: center;">Perusahaan</th>
                        <th style="width: 10%;  text-align: center;">Jabatan</th>
                        <th style="width: 30%;  text-align: center;">Tanggung Jawab</th>
                        <th style="width: 20%;  text-align: center;">Prestasi </th> 
                        <th style="width: 20%;  text-align: center;">Penghargaan</th>
                    </div>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    @foreach($pengalamanumum as $p)
                    <tr>
                        <td>{{$p->tahun}}</td>
                        <td>{{$p->perusahaan}}</td>
                        <td>{{$p->posisikerja}}</td>
                        <td>{{$p->tanggungjawab}}</td>
                        <td>{{$p->prestasi}}</td>
                        <td>{{$p->penghargaan}}</td>
                      
                     
                    </tr>
                    @endforeach
              
                  
                   
                </tbody>
                
            </table>

        </div>
            
        

        <h3 style="  margin-top:25px; text-align: left; font-size: 15px; font-weight: bold;" >RIWAYAT PEKERJAAN  PERBANKAN</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                
                    <th style=" height: 25px; width: 12%; text-align: center;">Tahun</th>
                    <th style="width: 12%;  text-align: center;">Perusahaan</th>
                    <th style="width: 13%;  text-align: center;">Jabatan</th>
                    <th style="width: 25%;  text-align: center;">Tanggung Jawab</th>
                    <th style="width: 20%;  text-align: center;">Prestasi </th> 
                    <th style="width: 10%;  text-align: center;">Penghargaan</th>
                    <th style="width: 10%;  text-align: center;">Omset</th>
                </div>
                </tr>
            </thead>
            <tbody style="text-align: center;">
                @foreach($pengalamanbank as $p )
                <tr>
                    <td>{{$p->tahun}}</td>
                    <td>{{$p->perusahaan}}</td>
                    <td>{{$p->posisikerja}}</td>
                    <td>{{$p->tanggungjawab}}</td>
                    <td>{{$p->prestasi}}</td>
                    <td>{{$p->penghargaan}}</td>
                    <td>{{$p->omset}}</td>
                  
                 
                </tr>
                @endforeach
         
               
            </tbody>
            
        </table>

    </div>

    <h3 style="  margin-top:25px; text-align: left; font-size: 15px;  font-weight: bold;" >MEDIA KOMUNIKASI DAN SOSIAL</h3>
    
    <table class="table table-bordered">
        <thead>
            <tr>
            
                <th>
                    <div style=" height: 25px;  text-align: center;"> No </div>
                </th>
                <th> <div style=" text-align: center;"> Media</th>
                <th> <div style=" text-align: center;"> Link /  Nomor ID</th>
              
              
            </tr>
        </thead>
        <tbody style="text-align: center;">
            @foreach($medsos as $m)
            <tr>
              
                <td style="width: 10%;">{{$m->no}}</td>
                <td style="width: 30%;">{{$m->media}}</td>
                <td style="width: 60%;">{{$m->link}}</td>
  
             
            </tr>
            @endforeach
        
        
         
           
        </tbody>
        
    </table>

</div>
        
            
        
        </div>
        <script>
            window.print();
        </script>
</body>
</html>
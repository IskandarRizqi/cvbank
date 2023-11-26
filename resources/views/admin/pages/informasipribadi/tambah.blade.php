@extends('admin.layout.mainadmin')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<body style="background-color: #ffffff;">
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="{{route('informasipribadi.store')}}" method="POST" enctype="multipart/form-data" style="width: 1340px; height: 2000px;">

            @csrf
           
            <div class="row">
               
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                    <h5 class= "font-weight-bold " style="color: blue;" >Informasi Pribadi </h5>
                    <div class="widget widget-content-area br-1"  style="height: 100%;">
                        
                        <div class="widget-two">
                            
                          <div class="row m-1">

                          
                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Upload Foto</label>
                                    <label for="gambar" style="color: black; display: flex; align-items: center;">
                                        
                                        <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror" style="display: none;">
                                        <button type="button" id="selectButton" style="width: 20%; height: 35px; border-radius: 5px;">Choose File</button>
                                        <img id="previewImage" src="#" alt="" style="max-width: 100px; max-height: 120px; margin-left: 30px;">
                                    </label>
                                  
                                    @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>  
                                    @enderror
                                </div>
                       
                            
                          </div>

                            <div class="row m-2">

  
                                

                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Nama Lengkap</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <input type="text" name="namalengkap" class="form-control @error('namalengkap') is-invalid @enderror" placeholder="" value="{{old('namalengkap')}}">
                                    @error('namalengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Nama Panggilan</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <input type="text" name="namapanggilan" class="form-control @error('namapanggilan') is-invalid @enderror" placeholder="" value="{{old('namapanggilan')}}">
                                    @error('namapanggilan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row m-1">

                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Tempat & Tanggal Lahir</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <input type="text" name="ttl" class="form-control @error('ttl') is-invalid @enderror" placeholder=""value="{{old('ttl')}}">
                                    @error('ttl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

    

                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Agama</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <input type="text" name="agama" class="form-control @error('agama') is-invalid @enderror" placeholder="" value="{{old('agama')}}">
                                    @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                            
                       

                            <div class="row m-2">
                            <div class="col-lg-4 text-left">
                             <h6 class= "font-weight-bold " style="color: rgb(0, 0, 3);" >Alamat </h6>
                            </div>
                            </div>


                            <div class="row m-1">
                                <div class="col-lg-12">
                                    <label for="form-control" style="color: black;">Alamat Rumah</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <textarea cols="30" rows="5" class="form-control  @error('rumah') is-invalid @enderror" name="rumah"></textarea>
                                    @error('rumah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row m-1">
                                <div class="col-lg-12">
                                    <label for="form-control" style="color: black;">Alamat Domisili</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <textarea cols="30" rows="5" class="form-control  @error('domisili') is-invalid @enderror" name="domisili"></textarea>
                                    @error('domisili')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <label for="form-control" style="color:black">Status</label>
                                <input type="hidden" name="idinformasipribadi" value="">
                                <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" placeholder="" value="{{old('status')}}">
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            
                            </div>
                            <div class="row m-1">
                                <div class="col-lg-12 text-left">
                                    <label for="form-control" style="color: black;">Ringkasan Tentang Anda</label>
                                    <input type="hidden" name="idinformasipribadi" value="">
                                    <textarea cols="30" rows="5" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" oninput="checkWordCount(this)">{{ old('deskripsi') }}</textarea>
                                    <div id="wordCount">Kata: 0 / 250</div>
                                    @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

      
                    
                            <div class="col-lg-12 mt-3 text-right"> <!-- Menggeser tombol ke kanan -->
                                <!-- Tombol Create ditempatkan di sini -->
                                <button class="btn btn-primary btn-sm" type="submit">SIMPAN & LANJUTKAN</button>
                            </div>

                        </div>
                       
                    </div>
                </div>
            </div>
        </form>


        <script>
            document.getElementById('selectButton').addEventListener('click', function () {
                document.getElementById('gambar').click();
            });
        
            document.getElementById('gambar').addEventListener('change', function () {
                var fileInput = this;
                var previewImage = document.getElementById('previewImage');
        
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
        
                    reader.onload = function (e) {
                        previewImage.src = e.target.result;
                    };
        
                    reader.readAsDataURL(fileInput.files[0]);
                }
            });
        </script>
        

        <!-- CONTENT AREA -->

    </div>
</div>
</body>
<!--  END CONTENT AREA  -->
@endsection








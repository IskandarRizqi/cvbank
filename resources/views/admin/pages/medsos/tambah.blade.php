@extends('admin.layout.mainadmin')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="{{route('medsos.store')}}" method="POST" style="width: 1340px; height: 2000px;">
            @csrf
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                    <h5 class= "font-weight-bold " style="color: blue;" >Sosial Link </h5>
                    <div class="widget widget-content-area br-1"  style="height: 300%;">
                  

                
                        <div class="widget-two">
             
                            <div class="row m-1">
                                <div class="col-lg-12 mt-3 text-right"> <!-- Menggeser tombol ke kanan -->
                                   
                                    <!-- Tombol Tambah dengan kelas -->
                                    <button class="btn btn-primary btn-sm btn-tambah" type="button">Tambah</button>
                                    <button class="btn btn-primary btn-sm" type="submit" style="color: #502ACD">SIMPAN</button>

                                </div>
                              
                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">No</label>
                                    <input type="hidden" name="idsosmed" value="">
                                    <input type="text" name="no[]" class="form-control @error('no') is-invalid @enderror" placeholder="" value="{{old('no')}}">
                                    @error('no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                 
                           
                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Media</label>
                                    <input type="hidden" name="idsosmed" value="">
                                    <input type="text" name="media[]" class="form-control @error('media') is-invalid @enderror" placeholder="" value="{{old('media')}}">
                                    @error('media')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-4">
                                    <label for="form-control" style="color: black;">Link</label>
                                    <input type="hidden" name="idsosmed" value="">
                                    <input type="text" name="link[]" class="form-control @error('link') is-invalid @enderror" placeholder="" value="{{old('link')}}">
                                    @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

    
   
                            </div>

                         

                        </div>
                       
                    </div>
                </div>
            </div>
        </form>




        <!-- CONTENT AREA -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


        <script>
            $(document).ready(function () {
                // Counter untuk baris yang ditambahkan secara dinamis
                var rowCount = 1;
        
                // Fungsi untuk menambahkan set baru kolom input
                function addRow() {
                    rowCount++;
        
                    var newRow = `
                        <div class="row m-1" data-row-id="${rowCount}">
                            <div class="col-lg-4">
                                <label for="form-control" style="color: black;">No</label>
                                <input type="hidden" name="idsosmed" value="">
                                <input type="text" name="no[]" class="form-control @error('no') is-invalid @enderror" placeholder="" value="{{old('no')}}">
                                @error('no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label for="form-control" style="color: black;">Media</label>
                                <input type="hidden" name="idsosmed" value="">
                                <input type="text" name="media[]" class="form-control @error('media') is-invalid @enderror" placeholder="" value="{{old('media')}}">
                                @error('media')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label for="form-control" style="color: black;">Link</label>
                                <input type="hidden" name="idsosmed" value="">
                                <input type="text" name="link[]" class="form-control @error('link') is-invalid @enderror" placeholder="" value="{{old('link')}}">
                                @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Tambahkan kolom input lainnya di sini sesuai kebutuhan -->
                        </div>
                    `;
        
                    $('.widget-two').append(newRow);
                }
        
                // Penangan acara untuk tombol "Tambah"
                $('.btn-tambah').on('click', function (e) {
                    e.preventDefault();
                    addRow();
                });
            });
        </script>
        
        
        


    </div>
</div>
<!--  END CONTENT AREA  -->
@endsection





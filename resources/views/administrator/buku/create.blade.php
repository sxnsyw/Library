@extends('layout.app')
@section('title') Tambah Buku @endsection

@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Buku</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Buku</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form action="{{ route('admin.buku.store') }}" method="post" role="form" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                    @if($errors->any())
              <div class="alert alert-danger" role="alert">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{  $error }}</li>
                   @endforeach
               </ul>
            </div>
              @endif
              <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" class=" form-control">
                    <option value="">- Pilih -</option>
                    @foreach ($kategori as $item)
                    <option value="{{ $item->id_kategori }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul" required value="{{  old('judul') }}">
              </div>
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" name="pengarang" class="form-control" id="pengarang" placeholder="Pengarang" required value="{{  old('pengarang') }}">
              </div>
          <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Penerbit" value="{{  old('penerbit') }}">
          </div>
          {{-- <div class="form-group">
            <label for ="tahun_terbit">Tahun Terbit</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
              </div>
              <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy" data-mask>
            </div>
            <!-- /.input group -->
          </div> --}}
          <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" class="form-control" id="tahun_terbit" placeholder="Tahun Terbit" value="{{  old('tahun_terbit') }}">
          </div>
          <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" class="form-control" id="isbn" placeholder="ISBN" value="{{  old('isbn') }}">
          </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah" value="{{  old('jumlah') }}">
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="Lokasi" value="{{  old('lokasi') }}">
            </div>
            <div class="form-group">
                <label for="thumbnail">Upload Gambar</label>
                <input type="file" name="thumbnail" class="form-control-file" id="thumbnail" placeholder="Cover" value="{{  old('thumbnail') }}">
            </div>
            </div>
                        <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>
          <!--/.col (left) -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

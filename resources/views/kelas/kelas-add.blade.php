@extends('templates.defaultadmin')

@section('content')
<div class="justify-content-between">
    <div class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-right">
                                <a href="/siswa" class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-rotate-left"></i>
                                    Back
                                </a>
                            </div>
                        </div>
                        <form class="needs-validation" novalidate action="/create" method="POST">
                            @csrf
                            <div class="card-body">
                                <div>

                                    <div class="col-sm-12 col-md-6">
                                        <h4 class="card-title">Upload Thumbnail</h4>
                                        <form>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="foto_thumbnail" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Nama Kelas</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Berikan Nama Kelas" value="{{old('title')}}" required>
                                        @error('title')
                                        <span class="invalid-feedback text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mt-3" style="margin-left: 16px;">
                                    <label for="content">Deskripsi</label>
                                </div>


                                <div class="form-group mt-1" style="margin-left: 16px;">
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>

                                <div class="form-group mt-3" style="margin-left: 16px;">
                                    <label for="category">Category</label>
                                </div>

                                <p style="font-size: 14px; color: grey;margin-left: 16px; ">Klik shift untuk memilih lebih dari 1</p>

                                <div class="form-group" style="margin-left: 16px;">
                                    <form>
                                        <select multiple class="form-control " id="exampleFormControlSelect2">
                                            <option class="py-2">materi 1</option>
                                            <option class="py-2">materi 2</option>
                                            <option class="py-2">materi 3</option>
                                        </select>
                                    </form>
                                </div>


                                <button class="btn btn-success mt-4 mb-3" style="float: inline-end;" type="submit"><i class="fa-solid fa-floppy-disk"></i>
                                    Save</button>

                            </div>
                    </div>
                    <input type="hidden" name="url" value="{{ URL::previous() }}">
                    </form>
                </div>
            </div>
            <!-- /.content -->
        </div>
    </div>
</div>
@endsection
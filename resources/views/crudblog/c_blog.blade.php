@extends('templates.defaultadmin')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Create Blog</h2>
                        <p>Please enter data into the form below</p>
                        <form action="#">
                            <div class="form-body">

                                <label>The uploader's name will be automatically filled in as (your name)</label>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Sugiono marcopolo" disabled>
                                        </div>
                                    </div>
                                </div>
                                <label>Judul</label>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Input Judul">
                                        </div>
                                    </div>
                                </div>
                                <label for="">Kategori</label>
                                <div class="row pb-3">
                                    <div class="col-12">
                                        <div class="dropdown dropdown-category">
                                            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Pilih Kategori <span><i class="fas fa-angle-down"></i></span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <label for="Content">Content</label>
                                <div class="mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Content"></textarea>
                                </div>
                                <label>Thumbnail Blog</label>

                                <div class="row">
                                    <div class="col-5">
                                        <div class="mb-3">
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions mt-5 mb-3">
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <button type="reset" class="btn btn-dark">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
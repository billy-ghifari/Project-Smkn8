@extends('templates.defaultadmin')

@section('head')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="photo/dtc.png">
<title>DTC E-Learning</title>
<!-- Custom CSS -->
<link href="/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
<link href="/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
<link href="/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
<!-- Custom CSS -->
<link href="dist/css/style.min.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js  doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Template Main CSS File -->
<link href="/dist/css/style.css" rel="stylesheet">
@endsection

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Create Blog</h2>
                        <p>Please enter data into the form below</p>
                        <form action="updateblog/{{$blog->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <label>Judul</label>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" name="judul" class="form-control" placeholder="Input Judul" value="{{old('judul', $blog->judul) ,}}">
                                        </div>
                                    </div>
                                </div>
                                <label for="">Kategori</label>
                                <div class="row pb-3">
                                    <div class="col-12">
                                        <div class="dropdown dropdown-category">
                                            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Pilih Kategori
                                                <select name="r_id_category" id="">
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        @foreach ($category as $cat)
                                                        <option value="{{$cat->id}}" class="dropdown-item" {{$blog->nama == $cat->nama  ? 'selected' : ''}}>{{ $cat->nama }}</option>
                                                        @endforeach
                                                    </div>
                                                </select>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <label for="Content">Content</label>
                                <div class="mb-3">
                                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Content">{{$blog->content}}</textarea>
                                </div>
                                <label>Thumbnail Blog</label>

                                <div class="row">
                                    <div class="col-5">
                                        <div class="mb-3">
                                            <input class="form-control" value="{{old('foto_thumbnail', $blog->foto_thumbnail)}}" name="foto_thumbnail" type="file" id="formFile">
                                            <span>{{$blog->foto_thumbnail}} 'gambar terakhir'</span>
                                            <br>
                                            <span>masukkan thumbnail yang sama atau ganti thumbnail</span>
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
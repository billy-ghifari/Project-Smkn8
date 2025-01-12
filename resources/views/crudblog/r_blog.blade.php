@extends('templates.defaultadmin')

@section('head')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/dtc-blueicon.png">
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
        <li class="m-4 nav-item d-none d-md-block">
            <a class="nav-link" href="javascript:void(0)">
                <form action="" method="post">
                    <div class="customize-input">
                        <input class="form-control custom-shadow custom-radius border-0 bg-white" type="search" placeholder="Search" aria-label="Search">
                        <i class="form-control-icon"></i>
                    </div>
                </form>
            </a>
        </li>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-4">
                <a href="detailblog/{{$blog->id}}">
                    <div class="card card-kelas">
                        <div class="card-head aligncenter">
                            <img id="blogadmin" class="object-fit-cover" src="{{$urlapi}}/blog/{{$blog->foto_thumbnail}}" alt="" width="290px" height="180px">
                        </div>
                        <div class="card-body">
                            <h3>{{$blog->judul}}</h3>
                            <p>{{$blog->nama}}</p>
                            <p>{{ Str::limit($blog->content, 150)  }}</p>
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{$urlapi}}/profile/{{$blog->photo}}" id="profilepict" alt="" height="35" width="35">
                                </div>
                                <div class="col-8">
                                    <span>{{$blog->name}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-bottom pb-4">
                            <a href="view_updateblog/{{$blog->id}}" type="button" class="btn btn-secondary btn-sm">Edit</a>
                            <a href="deleteblog/{{$blog->id}}" class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('delete-blog-form-{{ $blog->id }}').submit();">
                                Delete
                            </a>

                            <form id="delete-blog-form-{{ $blog->id }}" action="deleteblog/{{$blog->id}}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </a>

            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
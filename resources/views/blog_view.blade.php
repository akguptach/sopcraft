@extends('layout.app')
@section('content')
    <div class="masthead">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-8">
                        <img src="{{env('ADMIN_URL').$blog->blog_image}}" class="card-img-top" alt="Blog Post Image">
                        <div class="card-body">
                            <h2 class="card-title">{{ $blog->blog_title }}</h2>
                            <p class="card-text"><?= $blog->blog_description;?></p>
                            <p class="card-text"><small class="text-muted">Posted on <?= date('d-m-Y',strtotime($blog->blog_date));?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
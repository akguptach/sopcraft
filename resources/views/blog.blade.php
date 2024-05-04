@extends('layout.app')
@section('content')
    @if(count($blogs) >0)
        <div class="masthead">
            <div class="container">
                <div class="row">
                    <h2>Blog</h2>
                    <section class="section blog-wrap bg-gray">
                        <div class="container">
                            <div class="row">
                                @foreach($blogs as $blog)
                                    <div class="col-lg-6 col-md-6 mb-5">
                                        <a href="{{route('blog.view',['blog'=>$blog->id])}}" class="rm_under">
                                        <span class="corner-category" >{{$blog->category->category_name}}</span>
                                            <img src="<?= env('ADMIN_URL').$blog->blog_image;?>" class="card-img-top" alt="Blog Post Image">
                                            <div class="card-body">
                                                <p class="card-text"><?= $blog->blog_title;?></p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class=" pagination  justify-content-center">
                                {{$blogs->links("pagination::bootstrap-5")}}
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    @else
        <div class="masthead">
            <div class="container">
                <div class="row">
                    <h2>Blog</h2>
                    <section class="section blog-wrap bg-gray">
                        <div class="container">
                            <div class="text-center">No record found</div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    @endif
@endsection
<style>
    /* public/css/custom.css */
.corner-category{
    position: absolute;background-color: #A888CE;color: #fff;padding: 4px 8px;
}
.pagination {
    margin-top: 20px;
}

.pagination li {
    display: inline-block;
    margin-right: 5px;
}

.pagination a,
.pagination span {
    padding: 5px 10px;
    color: #333;
}
.pagination .text-muted {
    margin-top: 25px;
    padding: 25px;
}
.pagination .active span {
    background-color: #007BFF;
    color: #fff;
    border-color: #007BFF;
}
.rm_under{
    text-decoration:none !important;
    color:black !important;
}
</style>

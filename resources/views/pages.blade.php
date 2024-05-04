@extends('layout.app')
@section('content')
    <div class="masthead">
        <div class="container">
            <div class="row">
                <h2><?= $pages['page_title'];?></h2>
                <?= $pages['page_desc'];?>
            </div>
        </div>
    </div>
@endsection
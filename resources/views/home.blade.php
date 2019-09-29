@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="content">
                        <div class="title m-b-md">
                            Public Api
                        </div>

                        <div class="links">
                            <a href="/posts">Get all Posts</a>
                            <p>/posts</p>
                            <a href="/post/1">Get post id 1</a>
                            <p>/post/{id}</p>
                            <p>and</p>
                            <p>Post query for /create/post</p>
                            <p>or</p>
                            <p>Delete query for /post/{id}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

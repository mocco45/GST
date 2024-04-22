@extends('home')
@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Staff</h3>
                        <p class="card-text">{{ $staffCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Post</h3>
                        <p class="card-text">{{ $postsCount }}</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
        
@endsection
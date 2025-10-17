@extends('layouts.app')

@section('content')

<div class="text-center">

    
    <h1 class="display-1 fw-bold text-dark mb-3" style="font-size: 6rem;">
        {{ $developer['name'] }}
    </h1>

    
    <p class="lead fs-3 text-secondary mb-4">
        {{ $developer['role'] }}
    </p>

    
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <p class="text-muted fs-5">
                {{ $developer['bio'] }}
            </p>
            <p class="text-muted fs-5">
                {{ $developer['email'] }}
            </p>
        </div>
    </div>
    
    <hr class="my-5 w-25 mx-auto">

    

</div>

@endsection
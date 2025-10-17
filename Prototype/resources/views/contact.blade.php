@extends('layouts.app')

@section('content')

<div class="text-center">
    <h1 class="display-4 fw-bold">Contactez-moi</h1>
    <p class="lead text-muted">N'hésitez pas à me contacter via mon adresse e-mail.</p>
    <hr class="my-5 w-50 mx-auto">
</div>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card text-center shadow-sm">
            <div class="card-body p-4">
                <i class="bi bi-envelope-paper-heart-fill fs-1 text-primary"></i>
                <h4 class="card-title mt-3">Par E-mail</h4>
                <p class="card-text">Le moyen le plus simple et rapide de me joindre.</p>
                <a href="mailto:{{ $email }}" class="btn btn-primary btn-lg">
                    {{ $email }}
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
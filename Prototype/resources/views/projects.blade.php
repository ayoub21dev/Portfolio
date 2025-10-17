@extends('layouts.app')

@section('content')

<div class="text-center">
    <h1 class="display-4 fw-bold">Mes Projets</h1>
    <p class="lead text-muted">Voici une sélection des projets sur lesquels j'ai travaillé.</p>
    <hr class="my-5 w-50 mx-auto">
</div>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="alert alert-info text-center" role="alert">
            <i class="bi bi-tools me-2"></i>
            La section des projets est en cours de construction. Revenez bientôt !
        </div>
    </div>
</div>

{{-- 
<div class="card mb-4 shadow-sm">
    <div class="card-body">
        <h5 class="card-title">Nom du Projet 1</h5>
        <p class="card-text">Description courte du projet. Technologies utilisées : Laravel, Vue.js, MySQL.</p>
        <a href="#" class="btn btn-dark">Voir sur GitHub</a>
    </div>
</div> 
--}}

@endsection
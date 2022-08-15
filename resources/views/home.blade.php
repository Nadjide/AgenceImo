@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tableau de bord') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    </div>
                    <div>
                        <button class="Add"><a href={{"/add"}}>Ajouter</a></button>
                        <button class="M_S"><a href={{"/list"}}>Modifier/Supprimer</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

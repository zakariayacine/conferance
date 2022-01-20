@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Informations de connexion</h3>
                </div>
                <div class="card-body">
                    <p>Veuillez introduire les informations suivante</p>
                    <small>les informations serviront a complété le tableau des eleves present</small>
                    <form method="POST" action="/namesave">
                        @csrf
                        <label class="form-check-label">Nom</label>
                        <input class="form-control" type="text" name="firstname" required>
                        <label class="form-check-label">Prenom</label>
                        <input class="form-control" type="text" name="lastname" required>
                        <label class="form-check-label">Email</label>
                        <input class="form-control" type="email" name="email" required>
                        <label class="form-check-label">contact : téléphone</label>
                        <input class="form-control" type="text" name="phone" required>
                        <button class="btn btn-primary">Enregister et continuer</button>
                    </form>
                </div>
            </div>

</div>

@endsection

@extends('layouts.app')

@section('content')
<style type="text/css">
               #bg {
                z-index: -1;
  position: fixed; 
  top: 0; 
  right:0; 
    
  /* Preserve aspet ratio */
  min-width: 90%;
  min-height: 90%;
}
</style>
<div class="bg">
    <div class="container">
        <img src="image/bg.webp" id="bg" alt="">
        <div class="row">
            <div class="col-md-4 mt-5">
                <form action="login">
                    <h3>Les méthodes d’enseignement se modernisent</h3>
                    <p><b>Les nouvelles technologies de l’information et de la communication (NTIC) ont révolutionné le secteur de l’enseignement. Depuis les tableaux interactifs jusqu’aux classes mobiles en passant par les cours et les devoirs en ligne, les établissements scolaires, tous niveaux confondus, disposent désormais d’un immense choix de solutions pédagogiques issues des dernières technologies. Et ils sont déjà nombreux à posséder leur site web.</b></p>
                    <p><b>Utilisez les informations fournies depuis notre établissement pour pouvoir utiliser la plateforme de conférence</b></p>
                    <button class="btn btn-success">Connectez-vous</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


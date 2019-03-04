@extends('layouts.app')

@section('content')
<div class="containerAcceuil"> 
    <div class="coloneGauche">
        <div class="videoPresentation">
        <iframe class="videoPresentation" src="https://www.youtube.com/embed/V_MXGdSBbAI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="aPropos green">
            <h2> A propos de nous : </h2>
            <hr>
            <p>
                Bonjour et bienvenue sur La Radinerie, ce site à pour but d'informer les utilisateurs des differentes promos se trouvants à proximité d'eux ou à un endroit precis choisit par celui-ci.
            </p>
        </div>
    </div>
    
    <div class="coloneDroite green">
        <h5> Vous cherchez des promotions près de chez vous ? </h5>
        <div class="descriptifCarte">
            <div class="descriptifCarteItem">
                <label>
                    Que cherchez vous ? 
                </label>
                <input list="type" placeholder="Ex : Restaurant" onkeyup="keyupType(value)">
                <datalist id="type">
                </datalist>
            </div>
            <div class="descriptifCarteItem">
                <label>
                    Quelle type ? 
                </label>
                <input list="categorie" placeholder="Ex :Pizzeria " onkeyup="keyupCat(value)">
                <datalist id="categorie">
                </datalist>
            </div>
            <div class="descriptifCarteItem">
                <label>
                    où ? 
                </label>
                <input list="ville" placeholder="Ex : Gap" onkeyup="keyupVille(value)">
                <datalist id="ville">
                </datalist>
            </div>
            
        </div>
        <div class=" miniMap" id="map">

        </div>
    </div>
</div>
@endsection
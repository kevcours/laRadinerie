@extends('layouts.app')

@section('content')
    <div class="carte green">
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
        <div class="grandeCarte" id="map">

        </div>
    </div>
@endsection
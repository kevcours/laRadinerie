<?php $__env->startSection('content'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }


    if (isset($_GET['ville'])&& ($_GET['ville']!=""))
    {
        $rechercheVille = $_GET['ville'] . "%";
        $query = $bdd->query("Select DISTINCT name from ville WHERE name LIKE '$rechercheVille' LIMIT 5 ");
        $villes = array();
        while ($ville = $query->fetch()){
            array_push($villes, array("ville" => $ville["name"]));
        }

        echo(json_encode($villes));
    }

    if (isset($_GET['categorie'])&& ($_GET['categorie']!=""))
    {
        $rechercheCat = $_GET['categorie'] . "%";
        $query = $bdd->query("Select DISTINCT libelleCategorie from categorie WHERE libelleCategorie LIKE '$rechercheCat' LIMIT 5 ");
        $categories = array();
        while ($categorie = $query->fetch()){
            array_push($categories, array("categorie" => $categorie["libelleCategorie"]));
        }

        echo(json_encode($categories));
    }

    if (isset($_GET['type'])&& ($_GET['type']!=""))
    {
        $rechercheCat = $_GET['type'] . "%";
        $query = $bdd->query("Select DISTINCT libelleType from type WHERE libelleType LIKE '$rechercheCat' LIMIT 5 ");
        $types = array();
        while ($type = $query->fetch()){
            array_push($types, array("type" => $type["libelleType"]));
        }

        echo(json_encode($types));
    }


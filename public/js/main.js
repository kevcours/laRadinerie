

/* Variable*/

let divTexteRegister =document.getElementById('registerTexte');
let divTexteLogin =document.getElementById('loginTexte');
let divLogin= document.getElementById('register');
let divRegister= document.getElementById('login');
let divOverlay =document.getElementById('connect');
let cardConnect =document.getElementById('cardConnect');
let fermerForm = document.getElementById('fermerForm');
let header=document.getElementById('header');

/* Fin Variable */



/* Gestion ouverture PopUp inscription/connection */

function inscriptRegister(){

    divOverlay.style.display="block";
    
}


/* Gestion de la fermeture du PopUp de connection */

divOverlay.addEventListener('click',(e)=>{
    divOverlay.style.display="none";
});

fermerForm.addEventListener('click', (e)=>{
    divOverlay.style.display="none";
});

fermerForm.addEventListener('mouseover', (e)=>{
    fermerForm.style.cursor="pointer";
});

/* Empeche la fermeture quand on Click sur la div de connection */

cardConnect.addEventListener('click',(e)=>{
    e.stopPropagation();
});

/* Gestion de l'affichage du choix S'inscrire / Connection */ 



// S'inscrire

divTexteLogin.addEventListener('mouseover',(e)=>{

    divTexteLogin.style.cursor="pointer";

});

divTexteLogin.addEventListener('click',(e)=>{
    divTexteRegister.style.borderBottom="none";
    divTexteLogin.style.borderBottom="solid 2px white";
    divRegister.style.display="block";
    divLogin.style.display="none";

});


// Connection


divTexteRegister.addEventListener('mouseover',(e)=>{

    divTexteRegister.style.cursor="pointer";

});

divTexteRegister.addEventListener('click',(e)=>{
    divTexteLogin.style.borderBottom="none";
    divTexteRegister.style.borderBottom="solid 2px white";
    divLogin.style.display="block";
    divRegister.style.display="none";

});

/* Gestion affichage de la carte */
if (document.getElementById('map'))
{
    let latitude;
    let longitude;

    

    navigator.geolocation.getCurrentPosition(maposition)
    
    function maposition(position){
        // console.log(latitude,longitude);
        latitude=position.coords.latitude;
        longitude=position.coords.longitude;
         console.log(latitude,longitude);
         var map = L.map('map');
         var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
         var osmAttrib='Map data © OpenStreetMap contributors';
         var osm = new L.TileLayer(osmUrl, {attribution: osmAttrib});
         map.setView([latitude, longitude], 15);
         map.addLayer(osm);
        
        /* L.marker([44.563972,6.093542]).addTo(map).bindPopup('A pretty CSS3 popup.<br> Easily customizable.').openPopup();
         console.log(map.getBounds().getNorthEast().lat);
         console.log(map.getBounds().getNorthEast().lng);
         console.log(map.getBounds().getSouthWest().lat);
         console.log(map.getBounds().getSouthWest().lng);*/
         marquerMap(map);
    }


}

/* recuperation de la map et affichage des points*/

function marquerMap(map){

    let longitudeMin=map.getBounds().getSouthWest().lng;
    let longitudeMax=map.getBounds().getNorthEast().lng;
    let latitudeMin=map.getBounds().getSouthWest().lat;
    let latitudeMax=map.getBounds().getNorthEast().lat;

    /*axios.get('/resultat.php')*/
    




    



}


///////////////////////////////////


/* Auto complete axios */

function keyupVille(value)
{

    axios.get('/resultat.php?ville='+value)
    .then(function (response) {  
        console.log(response.data);
       let input=document.getElementById('ville');
       input.innerHTML="";
       for(i=0 ;i<response.data.length ; i++)
       {
           let option=document.createElement('option');
           option.value=response.data[i].ville;
           input.appendChild(option);
       }
    })
    .catch(function (error) {
        console.log(error);
    })
}

function keyupCat(value)
{

    axios.get('/resultat.php?categorie='+value)
    .then(function (response) {  
        let input=document.getElementById('categorie');
        input.innerHTML="";
        for(i=0 ;i<response.data.length ; i++)
        {
            let option=document.createElement('option');
            option.value=response.data[i].categorie;
            input.appendChild(option);
        }
    })
    .catch(function (error) {
        console.log(error);
    })
}

function keyupType(value)
{

    axios.get('/resultat.php?type='+value)
    .then(function (response) {  
        let input=document.getElementById('type');
        input.innerHTML="";
        for(i=0 ;i<response.data.length ; i++)
        {
            let option=document.createElement('option');
            option.value=response.data[i].type;
            input.appendChild(option);
        }
    })
    .catch(function (error) {
        console.log(error);
    })
}



/////////////////////////
//Fonction permettant d'utiliser les methodes addEventListener et attachEvent
function addEvent(elem, even, func) {
  if (elem.addEventListener) {
    elem.addEventListener(even, func, false);
  }else {
    elem.attachEvent('on'+even, func);
  }
}
function removeEvent(elem, even, func) {
  if (elem.removeEventListener) {
    elem.removeEventListener(even, func, false);
  }else {
    elem.detachEvent('on'+even, func);
  }
}

//Fonction permettant de changer la couleur des cotes
function changeCouleur(elem, couleurText, couleurFond) {
  elem.style.color = couleurText;
  elem.style.backgroundColor = couleurFond;
}

function entrer(e) {
  e = e || window.event;
  changeCouleur(e.currentTarget, "white", "#4682B4");
}
function sortir(e) {
  e = e || window.event;
  changeCouleur(e.currentTarget, "white", "#708090");
}

// Fonction permettant d'afficher les paris
function parisManager(coul, e){

  var aside_paris = document.getElementById('aside_paris_normal'),
      extras = document.getElementById('extras');
  //On fait disparaître le block extras
  extras.style.display = "none";
  var dataclass = e.currentTarget.className, paris = [];
  paris = dataclass.split(';');
  if (coul == "rgb(70, 130, 180)") {
    //alert ("PAS CLIQUER !");
    var div_paris = document.createElement('div'),
        text_div_paris =  "<h1 id='titreParis'>Paris Normal</h1>"+
                              "<div class='aside_contenu'>"+
                                "<p class='match'>" + paris[1] + " - " + paris[2] + "</p>"+
                                "<p><span>Choix:</span><em id='choix'>" + paris[3] + "</em></p>" +
                                "<p><span>Choix:</span><em id='cote_choix'>" + paris[4] + "</em></p>" +
                              "</div>";

    div_paris.className = "aside aside_paris";
    div_paris.id = paris[0]+paris[4];

    div_paris.innerHTML = text_div_paris;

    if (aside_paris.hasChildNodes()) {
      aside_paris.insertBefore(div_paris, aside_paris.firstChild);
      nbre_aside_paris += 1;
    }else {
      aside_paris.appendChild(div_paris);
      nbre_aside_paris += 1;
    }
    //Changement de la couleur  de la cote cliquée
    changeCouleur(e.currentTarget, "white", "red");
    //Suppréssion des évenements mouseover et mouseout
    removeEvent(e.currentTarget, 'mouseover', entrer);
    removeEvent(e.currentTarget, 'mouseout', sortir);
  }
  else {
    //alert("DEJA CLIQUER !");
    var aside_sup = document.getElementsByTagName('div'),
        taille_aside = aside_sup.length,
        idCote = paris[0]+paris[4];
    for (var i = 0; i < taille_aside ; i++) {
      if (aside_sup[i].id == idCote) {
        aside_sup[i].style.display = "none";
        nbre_aside_paris -= 1;
        //Réabilitation de la couleur d'avant le clique
        changeCouleur(e.currentTarget, "white", "#708090");
        //Ajout des évènements mouseover et mouseout à l'élément désélectionné.
        addEvent(e.currentTarget, 'mouseover', entrer);
        addEvent(e.currentTarget, 'mouseout', sortir);
        break; //On met fin à la recherche, vue que l'élément à supprimer à été trouvé.
      }
    }
    if (nbre_aside_paris <= 0) {//On vérifie que tous les paris ont été supprimés.
      //On fait aparaître le block extras
      extras.style.display = "inline-block";
    }
  }

} //Fin Fonction affiche_paris

//Fonction principale
var cote = document.getElementsByTagName('a'),
    taille_cote = cote.length,
    nbre_aside_paris = 0;
  for (var i = 0; i < taille_cote; i++) {
    if (cote[i].id == "cote") {
      addEvent(cote[i], 'click', function(e) {
        e = e || window.event;
        var couleur = getComputedStyle(e.currentTarget, null).backgroundColor
                                || e.currentTarget.currentStyle.backgroundColor;
        parisManager(couleur, e);
        //Blocage de l'action par defaut de l"élément
        if (e.preventDefault) {
          e.preventDefault();
        }
        e.returnValue = false;
      });
    }
  }

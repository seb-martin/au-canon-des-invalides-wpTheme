'use strict';

jQuery(document).ready(function($){
    // Initialise le tooltip rss
    $(".rss-tooltip").tooltip({
        title: 'Abonnez-vous au flux RSS et recevez quotidiennement le menu'
    });

    // TODO Uggly : Détecte le menu généré par wp et applique les classes Bootstrap de navbar
    $('ul.menu').addClass('nav navbar-nav navbar-right');
    // Détecte l'item de menu sélectionné et applique la classe Bootstrap .active
    $('.current-menu-item').addClass('active');
});






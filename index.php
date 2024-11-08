<?php

#Refaire ça dans des fichiers séparés (un pour l'index.php et un pour le phtml)
#Et en essayant avec ça :
        #<select name="" id="">
            #<option>Français</option>
            #<option>Anglais</option>
        #</select>

require 'languages/lang.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Luna BURATTI-FAYOLLE">
    <title>Simple translation (backend)</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
    <header>
        <div><a href="#"><?= __('Accueil')?></a></div>
        <div><a href="#"><?= __('Compétences')?></a></div>
        <div><a href="#"><?= __('Formations')?></a></div>
        <div><a href="#"><?= __('Projets')?></a></div>
        <div><a href="#"><?= __('Contact')?></a></div>
        <div class="dropdown">
            <a href="#"><?= __('Bonjour, John')?></a>
            <div class="dropdown-content hide">
                <div><a href="#"><?= __('Profil')?></a></div>
                <div><a href="#"><?= __('Paramètres')?></a></div>
                <div><a href="#"><?= __('Se déconnecter')?></a></div>
            </div>
        </div>
        <div class="dropdown">
            <a href="#"><?= __('Langue')?></a>
            <div class="dropdown-content hide">
                <div><a href="index.php?lang=fr">Français</a></div>
                <div><a href="index.php?lang=en">English</a></div>
                <div><a href="index.php?lang=es">Español</a></div>
            </div>
        </div>
    </header>
    
    <section>
        <h1><?= __('Celeste, c\'est quoi ?')?></h1>
        <p><?= __('Celeste est un jeu de plateforme acclamé par la critique créé par Extremely OK Games. Le jeu est sorti le 25 janvier 2018 sur Nintendo Switch, PlayStation 4, Xbox One, PC, Mac et Linux. Le jeu suit une jeune femme nommée Madeline alors qu\'elle escalade la montagne quelque peu magique de Celeste, faisant face à l\'opposition des obstacles naturels de la montagne et d\'elle-même.')?></p>
        <h2><?= __('Gameplay')?></h2>
        <p><?= __('Le gameplay de Celeste propose des commandes rapides et précises le long d\'une série de sous-niveaux de plateformes difficiles qui constituent un chapitre plus vaste . Il suit les commandes simples à apprendre et difficiles à maîtriser qui sont un élément de base de son genre, et le gameplay a souvent été comparé à d\'autres, comme Super Meat Boy.')?></p>
        <p><?= __('Le prologue présente aux joueurs les commandes de base, comme le saut et la capacité à grimper aux murs. Le tiret, l\'une des principales options de mouvement du jeu, est offert au joueur à la fin du niveau, apparemment par l\'Oiseau . Ce tiret est la mécanique de base du gameplay de Celeste, offrant au joueur une courte poussée vers l\'avant dans la direction que le joueur tient. Il ne peut être utilisé qu\'un nombre limité de fois et doit être rafraîchi avant de se lancer à nouveau. L\'état des tirets disponibles du joueur est indiqué par la couleur des cheveux de Madeline. Le rafraîchissement du tiret se fait de multiples façons, mais les principales actions incluent toucher le sol, collecter des cristaux d\'endurance et les transitions d\'écran.')?></p>
        <p><?= __('Les sous-niveaux, et par extension les chapitres du jeu, deviennent progressivement plus difficiles à mesure que de nouvelles mécaniques et obstacles sont introduits, et l\'utilisation de ces éléments fusionne et s\'harmonise à mesure que le joueur se rapproche du sommet. Vers la fin du jeu, Celeste introduit de nombreux autres mouvements qui utilisent diverses combinaisons des trois mouvements de base (sauter, grimper et courir) en tandem; ces techniques sont explorées en détail sur la page Moves.')?></p>
    </section>
</body>

    <script>
        const dropdowns = document.querySelectorAll('.dropdown');
        console.log(dropdowns);
        
        for(let i = 0; i < dropdowns.length; i++) {
            
            dropdowns[i].addEventListener('click', function(e) {
                
                //for(let x = 0; i < dropdowns.length; x++) {
                  //  dropdowns[x].querySelector('.dropdown-content').classList.add('hide');
                //}
                e.currentTarget.querySelector('.dropdown-content').classList.toggle('hide');
            });
        }
    </script>
</html>

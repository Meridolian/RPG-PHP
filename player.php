<?php

    class Player {

        $Classe = 0; // 1 = Guerrier && 2 = Mage && 3 = Archer
        $Health = 100; // Barre de vie de base qui est égale à 100 Points de vie
        $Damage = 15; // Dégât de base d'une valeur de 15
        $Exp = 0; // Expérience acquises allant de 0 à 100
        $Level = 1; // Niveau supérieur une fois que l'expérience est à 100 && Niveau de base = 1
        $HealthMonster = 100; // Vie du monstre 
        $DamageMonster = 5; // Dégâts du monstre

        function InitClasse() { // Fonction qui permettra d'initialiser la classe du personnage
            if ($Classe = "Guerrier") { // Guerrier
                $Classe = 1;
            }
            else if ($Classe = "Mage") { // Mage
                $Classe = 2;
            }
            else {
                $Classe = 3; // Archer
            }
        }

        function BonusClasse() { // Fonction qui permet d'attribuer les Bonus des différentes classes au lancement du combat
            if ($Classe = 1) {
                $Health = 130;   // Vie augmentée de 30 pour le Guerrier
            }
            else if ($Classe = 2) {
                $Damage = 30 && $Health = 75; // Dégâts améliorés de 30 ainsi qu'un malus sur les Points de vie -25
            }
            else {
                $Damage = 20; // Dégâts améliorés de 20
            }
        }

        function LevelUp() { // Fonction qui permet d'augmenter de niveau une fois 100 d'expérience acquis
            if ($Exp >= 100) {
                $Level++;
            }
        }

        function DamageToPlayer() { // Fonction qui permet de perdre de la vie lors d'une attaque en fonction des dommages du monstre
            $Health - $DamageMonster;
        }

        function DamageToMonster() { // Fonction qui permet de perdre de la vie lors d'une attaque en fonction des dommages du personnages
            $HealthMonster - $Damage;
        }



        
    }
?>
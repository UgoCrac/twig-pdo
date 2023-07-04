<?php

    require_once '../bo/Voiture.php';

    class VoiturePDO{
        public static function getAll(){

            $query = BDD->prepare("SELECT * FROM voitures");
            $query->execute();
            $voitures = array();
            while ($data = $query->fetch()) {
                $voitures[] = new Voiture($data['id'], $data['marque'], $data['modele'],
                    $data['immatriculation'],$data['image'], $data['couleur'],  $data['poids'],
                    $data['puissance'], $data['reservoir'], $data['message'], $data['places']);
            }
            return $voitures;


        }

        public static function getOne($id){

            $query = BDD->prepare("SELECT * FROM voitures WHERE id = :id");
            $query->execute(array(':id' => $id));
            $voitures = array();

            while ($data = $query->fetch()) {
                $voitures[] = new Voiture($data['id'], $data['marque'], $data['modele'],
                $data['immatriculation'],$data['image'], $data['couleur'],  $data['poids'],
                $data['puissance'], $data['reservoir'], $data['message'], $data['places']);
            return $voitures;


        }
    }

    }


?>
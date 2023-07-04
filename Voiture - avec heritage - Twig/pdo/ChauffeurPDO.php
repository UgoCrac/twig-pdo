<?php

    require_once '../bo/Chauffeur.php';

    class ChauffeurPDO{

        public static function getOneByVoiture($id){

            $query = BDD->prepare("SELECT * FROM chauffeurs WHERE vehicule = :id");
            $query->execute(array(':id' => $id));
            $chauffeurs = array();

            while ($data = $query->fetch()) {
                $chauffeurs[] = new Chauffeur($data['id'], $data['nom'], $data['prenom'], $data['image']);
            }
            return $chauffeurs;

        }
    }




?>
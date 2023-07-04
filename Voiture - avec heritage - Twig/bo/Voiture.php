<?php

class Voiture extends Vehicule
{

    private $type; // cabriolet - berling - SUV

    public function __construct(int $id,string $marque, string $modele,string $immatriculation,string $image, string $couleur, int $poids, int $puissance, float $capaciteReservoir, string $message, string $type, int $nbPlaces=5)
    {
        parent::__construct($id,$marque,$modele,$immatriculation, $image, $couleur, $poids, $puissance,  $capaciteReservoir, $message, $nbPlaces);
        $this->setType($type);
    }

    

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function __toString()
    {
        $msg = parent::__toString();
        $msg .= sprintf('Modèle : %s', $this->type);
        return $msg;
    }
}
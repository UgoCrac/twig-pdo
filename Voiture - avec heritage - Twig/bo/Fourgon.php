<?php



class Fourgon extends Vehicule
{

    private $volume; 

    public function __construct(int $id,string $marque, string $modele,string $immatriculation,string $image, string $couleur, int $poids, int $puissance, float $capaciteReservoir, string $message, string $volume, int $nbPlaces=3)
    {
        parent::__construct($id,$marque,$modele,$immatriculation, $image, $couleur, $poids, $puissance,  $capaciteReservoir, $message, $nbPlaces);
        $this->setVolume($volume);
    }

    /**
     * Get the value of volume
     */ 
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     *
     * @return  self
     */ 
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    public function __toString()
    {
        $msg = parent::__toString();
        $msg .= sprintf('Volume : %s', $this->volume . 'm3');
        return $msg;
    }
}
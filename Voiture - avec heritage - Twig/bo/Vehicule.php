<?php

class Vehicule
{
    private static $nbVehicule = 0;

    protected $id;
    protected $marque;
    protected $modele;
    protected $immatriculation;
    protected $image;
    protected $couleur;
    protected $poids;
    protected $puissance;
    protected $capaciteReservoir;
    protected $niveauCarburant;
    protected $nbPlaces;
    protected $assure;
    protected $message;


    public function __construct(int $id,string $marque,string $modele, string $immatriculation,string $image, string $couleur, int $poids, int $puissance, float $capaciteReservoir, string $message, int $nbPlaces=5)
    {
        $this->setId($id);
        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setImmatriculation($immatriculation);
        $this->setImage($image);
        $this->setCouleur($couleur);
        $this->setPoids($poids);
        $this->setPuissance($puissance);
        $this->setCapaciteReservoir($capaciteReservoir);
        $this->setNiveauCarburant(5.0);
        $this->setNbPlaces($nbPlaces);
        $this->setAssure(false);
        $this->setMessage($message);
        self::$nbVehicule++;
    }

    public function repeindre($couleur=null)
    {
        if (!isset($couleur))
        {
            $this->message = 'Erreur : J\'ai besoin de connaitre la nouvelle couleur !';
        }
        elseif ($couleur == $this->couleur)
        {
            $this->message = 'Merci de m\'avoir raffraîchi le teint !';
            $this->couleur = $couleur;
        }else
        {
            $this->message = 'J\'aime beaucoup cette couleur '. $couleur .' !';
            $this->couleur = $couleur;
        }
    }
    
    public function mettreCarburant($quantite)
    {
        if ($quantite > ($this->capaciteReservoir - $this->niveauCarburant))
        {
            $this->message = 'Tu vas mouiller tes chaussures ! J\'ai déjà ' . $this->niveauCarburant . ' l.';
        }else
        {
            $this->niveauCarburant += $quantite;
            $this->message = 'Merci pour le carburant, j\'ai maintenant '. $this->niveauCarburant .' l';
        }
    }

    public function rouler($distance, $vitesse)
    {
        $consommation = $this->consommer($distance, $vitesse);

        if ($consommation > $this->niveauCarburant)
        {
            $this->message = 'Tu as besoin de '. $consommation .' l, pour parcourir '. $distance . 'kms, il te reste ' . $this->niveauCarburant . ' l';
        }else
        {
            $this->niveauCarburant -= $consommation;
            $this->message = 'Tu as consommé '. $consommation .' l, il te reste ' . $this->niveauCarburant . ' l';
        }
    }
    
    private function consommer($distance, $vitesse)
    {
        if ($vitesse < 50)
        {
            $conso = $distance * 0.1;
        }
        elseif ($vitesse < 90)
        {
            $conso = $distance * 0.05;
        }elseif ($vitesse < 130)
        {
            $conso = $distance * 0.08;
        }else
        {
            $conso = $distance * 0.12;
        }
        return $conso;
    }

   
  

    /**
     * Get the value of immatriculation
     */ 
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set the value of immatriculation
     *
    */ 
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;
}

    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
    */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
}

    /**
     * Get the value of poids
     */ 
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     *
    */ 
    public function setPoids($poids)
    {
        $this->poids = $poids;
}

    /**
     * Get the value of puissance
     */ 
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set the value of puissance
     *
    */ 
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
}

    /**
     * Get the value of capacitéReservoir
     */ 
    public function getCapaciteReservoir()
    {
        return $this->capaciteReservoir;
    }

    /**
     * Set the value of capacitéReservoir
     *
    */ 
    public function setCapaciteReservoir($capaciteReservoir)
    {
        $this->capaciteReservoir = (float)$capaciteReservoir;
}

    /**
     * Get the value of niveauCarburant
     */ 
    public function getNiveauCarburant()
    {
        return $this->niveauCarburant;
    }

    /**
     * Set the value of niveauCarburant
     *
    */ 
     public function setNiveauCarburant($carburant)
    {
        if ($carburant <= $this->capaciteReservoir - $this->niveauCarburant) {
            $this->niveauCarburant += $carburant;
        } else {
            $this->message = "Trop de carburant";
        }
    }

    /**
     * Get the value of nbPlaces
     */ 
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * Set the value of nbPlaces
     *
    */ 
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;
}

    /**
     * Get the value of assure
     */ 
    public function getAssure()
    {
        return $this->assure;
    }

    /**
     * Set the value of assure
     *
    */ 
    public function setAssure($assure)
    {
        $this->assure = $assure;
        if ($assure){
            $this->message = "Merci de m'avoir assurée :)";
        }else{
            $this->message = "Attention ! L'assurance est obligatoire !";
        }
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
    */ 
    public function setMessage($message)
    {
        $this->message = $message;
    }
    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

       /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    /**
     * Get the value of nbVehicule
     */ 
    public static function getNbVehicule()
    {
        return self::$nbVehicule;
    }
    
    public function __toString()
    {
        $msg = 'Véhicule %s, puissance : %d cv de couleur %s et de poids %d kg avec %d places.';
        return sprintf($msg, $this->immatriculation, $this->puissance, $this->couleur, $this->poids, $this->nbPlaces);
    }

    

 

    /**
     * Get the value of modele
     */ 
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */ 
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}

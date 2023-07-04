<?php 

class Chauffeur{
    private $id;
    private $nom;
    private $prenom;
    private $image;
    private $idVehicule;

    public function __construct(int $id, string $nom, string $prenom, $image, int $idVehicule=null){
        $this->setId($id);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setImage($image);
        $this->setIdVehicule($idVehicule);
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

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

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
     * Get the value of idVehicule
     */ 
    public function getIdVehicule()
    {
        return $this->idVehicule;
    }

    /**
     * Set the value of idVehicule
     *
     * @return  self
     */ 
    public function setIdVehicule($idVehicule)
    {
        $this->idVehicule = $idVehicule;

        return $this;
    }
}


?>
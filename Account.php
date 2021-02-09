<?php
Class Account{

    private $libelle;
    private $soldeIni;
    private $devise;
    private $titulaire;

    public function __construct($libelle = " ", $soldeIni = " ", $devise = " ", Holder $titulaire){
        $this->libelle = $libelle;
        $this->soldeIni = $soldeIni;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
    }

    

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of soldeIni
     */ 
    public function getSoldeIni()
    {
        return $this->soldeIni;
    }

    /**
     * Set the value of soldeIni
     *
     * @return  self
     */ 
    public function setSoldeIni($soldeIni)
    {
        $this->soldeIni = $soldeIni;

        return $this;
    }

    /**
     * Get the value of devise
     */ 
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * Set the value of devise
     *
     * @return  self
     */ 
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get the value of titulaire
     */ 
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    /**
     * Set the value of titulaire
     *
     * @return  self
     */ 
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    function __toString(){
        return $this->libelle." ".$this->soldeIni. " ".$this->devise. " ".$this->titulaire;
    }
}
?>
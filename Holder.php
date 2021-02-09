<?php
Class Holder{

    private $name;
    private $firstname;
    private $birthDate;
    private $city;
    private $accounts;

    public function __construct($name = " ", $firstname = " ", $birthDate = " ", $city){
        $this->name = $name;
        $this->firstname = $firstname;
        $this->birthDate = $birthDate;
        $this->city = $city;

    }
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function getAge(){
        $date1 = new DateTime ("now");
        $date2 = new DateTime ($this->getBirthDate());
        $interval = $date1->diff($date2);
        $age = $interval->format('%y');
        return $age;
        
    }

    function __toString(){
        return $this->firstname." ".$this->name. ", ".$this->getAge(). " ans, à ".$this->city;
    }

}
    ?>
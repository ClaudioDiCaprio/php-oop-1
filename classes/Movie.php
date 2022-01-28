<?php
class Movie{

    public $production;
    public $originalTitle;
    public $productionCountry;
    public $poductionYear;
    private $mainChar;
    public $secondChar;
    public $movieDirector;
    public $script;

    //CONSTRUCTOR-START//

    public function __construct($_production, $_originalTitle, $_mainA, $_secondChar,  $_productionCountry, $_poductionYear, $_movieDirector, $_script)
    {   
        $this->setNome($_mainA);
        $this->production = $_production;
        $this->originalTitle = $_originalTitle;
        $this->secondChar = $_secondChar;
        $this->productionCountry = $_productionCountry;
        $this->poductionYear = $_poductionYear;
        $this->movieDirector = $_movieDirector;
        $this->script = $_script;
    }

    public function setNome($_mainA)

    {   if(strlen($_mainA) == strlen(" Michael J. Fox ") ){
            $this->mainChar = $_mainA;
        }
    }
    public function getNome()
    {
        return $this->mainChar;
    }

    //CONSTRUCTOR-END//
}

?>
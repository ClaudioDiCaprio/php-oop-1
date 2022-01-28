<?php
class Movie{

    public $production;
    public $originalTitle;
    public $productionCountry;
    public $poductionYear;
    public $mainChar;
    public $secondChar;
    public $movieDirector;
    public $script;

    //CONSTRUCTOR-START//

    public function __construct($_production, $_originalTitle, $_mainChar, $_secondChar,  $_productionCountry, $_poductionYear, $_movieDirector, $_script)
    {   
        $this->production = $_production;
        $this->originalTitle = $_originalTitle;
        $this->mainChar = $_mainChar;
        $this->secondChar = $_secondChar;
        $this->productionCountry = $_productionCountry;
        $this->poductionYear = $_poductionYear;
        $this->movieDirector = $_movieDirector;
        $this->script = $_script;
    }

    //CONSTRUCTOR-END//
}

?>
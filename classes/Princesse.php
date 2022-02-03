<?php

class Princesse extends Personnage
{

    private $saved;

    public function __construct() {
        // Surcharge de la méthode construct, on éxécute celle de la classe parent puis on redéfini les propriétés qui
        // sont différentes par rapport à la classe mere.
        parent::__construct();

        // Définition des propriétés propre à cette classe
        $this->saved = 0;
        $this->x = 450;
        $this->y = 450;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @param int $x
     */
    public function setX(int $x): void
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @param int $y
     */
    public function setY(int $y): void
    {
        $this->y = $y;
    }

    /**
     * @return int
     */
    public function getSaved(): int
    {
        return $this->saved;
    }

    /**
     * @param int $saved
     */
    public function setSaved(int $saved): void
    {
        $this->saved = $saved;
    }



} 
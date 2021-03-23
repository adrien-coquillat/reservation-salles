<?php

class Month
{

    public function __construct($month, $year)
    {
        if ($month < 1 ||  $month > 12) {
            throw new Exception("Le mois $month n'est pas valide");
        }
        if ($year < 2020) {
            throw new Exception("L'année est inférieur à 1970");
        }
    }

    public function toString(): string
    {
        return $this->months[$this->month - 1] . ' ' . $this->year;
    }
}

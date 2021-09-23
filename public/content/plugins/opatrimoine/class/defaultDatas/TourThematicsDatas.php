<?php

namespace OPatrimoine\defaultDatas;

class TourThematicsDatas
{
    public $tourThematics = [
        'Noblesse',
        'Renaissance',
        'Moyen-âge',
        'Bande déssinée',
        'Littérature',
    ];

    public function getTourThematics()
    {
        return $this->tourThematics;
    }
}
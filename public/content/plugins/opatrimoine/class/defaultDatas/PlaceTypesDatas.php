<?php

namespace OPatrimoine\defaultDatas;

class PlaceTypesDatas
{
    public $placeTypes = [
        'Musée',
        'Place',
        'Bâtiment officiel',
        'Monument mémorial',
    ];

    public function getPlaceTypes()
    {
        return $this->placeTypes;
    }
}
<?php

namespace OPatrimoine\defaultDatas;

class PlaceTypesDatas
{
    public $placeTypes = [
        'Musée',
        'Place',
        'Bâtiment officiel',
        'Monument mémorial',
        'Cathédrale',
        'Monastère',
        'Château',
        
    ];

    public function getPlaceTypes()
    {
        return $this->placeTypes;
    }
}
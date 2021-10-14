<?php

namespace OPatrimoine\defaultDatas;

class GuidedToursDatas
{
    public $placesPostsIds = [];


    public function __construct(array $placesPostsIds)
    {
        $this->placesPostsIds = $placesPostsIds;
    }

    // ! the index of $this->placesPostsIds[0] must not be less than the number of generated places
    public function getGuidedTours()
    {
        return [
            // ****** Visites au Musée d'Orsay
            [
                'post_title' => 'Une visite au Palais d\'Orsay',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['XIXeme siècle','Gare']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 38,
                'acf-totalreservations' => 2,
                'acf-placeoftour' => $this->placesPostsIds[0],
            ],
            [
                'post_title' => 'Une autre visite au Palais d\'Orsay',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['XIXeme siècle','Impressionisme', 'Peinture']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 09:30', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 25,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[0],
            ],
            [
                'post_title' => 'Une autre visite au Palais d\'Orsay',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['XIXeme siècle','Gare']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 4,
                'acf-placeoftour' =>  $this->placesPostsIds[0],
            ],
            [
                'post_title' => 'Une autre visite au Palais d\'Orsay',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['XIXeme siècle','Gare']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 16:30', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[0],
            ],
            [
                'post_title' => 'Une autre visite au Palais d\'Orsay',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['XIXeme siècle','Gare']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 08:30', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[0],
            ],
            [
                'post_title' => 'Une autre visite au Palais d\'Orsay',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['XIXeme siècle','Impressionisme', 'Peinture']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 14:30', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 25,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[0],
            ],

            // ****** Visites à l'Arc de Triomphe
            [
                'post_title' => 'Visite à l\'Arc de Triomphe',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Un haut lieu des grandes manifestations nationales. Souhaité par Napoléon Ier dès 1806, l\'Arc de triomphe est inauguré en 1806...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','XIXeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 2,
                'acf-placeoftour' =>  $this->placesPostsIds[1],
            ],
            [
                'post_title' => 'Visite à l\'Arc de Triomphe',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Un haut lieu des grandes manifestations nationales. Souhaité par Napoléon Ier dès 1806, l\'Arc de triomphe est inauguré en 1806...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma','XIXeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 14:30', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 20,
                'acf-totalreservations' => 2,
                'acf-placeoftour' =>  $this->placesPostsIds[1],
            ],
            [
                'post_title' => 'Visite à l\'Arc de Triomphe',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Un haut lieu des grandes manifestations nationales. Souhaité par Napoléon Ier dès 1806, l\'Arc de triomphe est inauguré en 1806...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','XIXeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 10,
                'acf-placeoftour' =>  $this->placesPostsIds[1],
            ],
            [
                'post_title' => 'Visite à l\'Arc de Triomphe',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Un haut lieu des grandes manifestations nationales. Souhaité par Napoléon Ier dès 1806, l\'Arc de triomphe est inauguré en 1806...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','XIXeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 6,
                'acf-placeoftour' =>  $this->placesPostsIds[1],
            ],
            [
                'post_title' => 'Visite à l\'Arc de Triomphe',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Un haut lieu des grandes manifestations nationales. Souhaité par Napoléon Ier dès 1806, l\'Arc de triomphe est inauguré en 1806...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','XIXeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/21/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 4,
                'acf-placeoftour' =>  $this->placesPostsIds[1],
            ],
            [
                'post_title' => 'Visite à l\'Arc de Triomphe',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Un haut lieu des grandes manifestations nationales. Souhaité par Napoléon Ier dès 1806, l\'Arc de triomphe est inauguré en 1806...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','XIXeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/21/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[1],
            ],

            // ****** Visites sur Place de la Concorde
            [
                'post_title' => 'Visite de la Concorde',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 20,
                'acf-totalreservations' => 11,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Visite de la Concorde',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge','Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Visite de la Concorde',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 20,
                'acf-totalreservations' => 11,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Visite de la Concorde',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 20,
                'acf-totalreservations' => 6,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Visite de la Concorde',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 15:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 20,
                'acf-totalreservations' => 2,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Visite de la Concorde',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge','Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Visite de la Concorde',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge','Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 2,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Visite de la Concorde',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge','Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 18:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 1,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Visite de la Concorde',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 20,
                'acf-totalreservations' => 5,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Visite de la Concorde',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 20,
                'acf-totalreservations' => 9,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Visite de la Concorde',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 15:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 20,
                'acf-totalreservations' => 2,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Visite de la Concorde',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge','Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/22/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 4,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Visite de la Concorde',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge','Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/22/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 20,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],
            [
                'post_title' => 'Visite de la Concorde',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge','Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/22/2021 18:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 10,
                'acf-placeoftour' =>  $this->placesPostsIds[2],
            ],

            // ****** Visites sur Abbatiale de Saint-Savin
            [
                'post_title' => 'Visite de Saint-Savin',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Surnommée la « Sixtine romane », l\'abbaye poitevine de Saint-Savin est décorée de très nombreuses et très belles peintures murales des XIe et XIIe siècles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 10,
                'acf-placeoftour' =>  $this->placesPostsIds[3],
            ],
            [
                'post_title' => 'Visite de Saint-Savin',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Surnommée la « Sixtine romane », l\'abbaye poitevine de Saint-Savin est décorée de très nombreuses et très belles peintures murales des XIe et XIIe siècles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[3],
            ],
            [
                'post_title' => 'Visite de Saint-Savin',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Surnommée la « Sixtine romane », l\'abbaye poitevine de Saint-Savin est décorée de très nombreuses et très belles peintures murales des XIe et XIIe siècles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma', 'Moyen-âge', 'Peinture']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 15,
                'acf-totalreservations' => 9,
                'acf-placeoftour' =>  $this->placesPostsIds[3],
            ],
            [
                'post_title' => 'Visite de Saint-Savin',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Surnommée la « Sixtine romane », l\'abbaye poitevine de Saint-Savin est décorée de très nombreuses et très belles peintures murales des XIe et XIIe siècles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 5,
                'acf-placeoftour' =>  $this->placesPostsIds[3],
            ],
            [
                'post_title' => 'Visite de Saint-Savin',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Surnommée la « Sixtine romane », l\'abbaye poitevine de Saint-Savin est décorée de très nombreuses et très belles peintures murales des XIe et XIIe siècles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 7,
                'acf-placeoftour' =>  $this->placesPostsIds[3],
            ],
            [
                'post_title' => 'Visite de Saint-Savin',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Surnommée la « Sixtine romane », l\'abbaye poitevine de Saint-Savin est décorée de très nombreuses et très belles peintures murales des XIe et XIIe siècles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma', 'Moyen-âge', 'Peinture']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 15,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[3],
            ],
            [
                'post_title' => 'Visite de Saint-Savin',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Surnommée la « Sixtine romane », l\'abbaye poitevine de Saint-Savin est décorée de très nombreuses et très belles peintures murales des XIe et XIIe siècles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 2,
                'acf-placeoftour' =>  $this->placesPostsIds[3],
            ],
            [
                'post_title' => 'Visite de Saint-Savin',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Surnommée la « Sixtine romane », l\'abbaye poitevine de Saint-Savin est décorée de très nombreuses et très belles peintures murales des XIe et XIIe siècles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 4,
                'acf-placeoftour' =>  $this->placesPostsIds[3],
            ],
            [
                'post_title' => 'Visite de Saint-Savin',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Surnommée la « Sixtine romane », l\'abbaye poitevine de Saint-Savin est décorée de très nombreuses et très belles peintures murales des XIe et XIIe siècles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma', 'Moyen-âge', 'Peinture']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 15,
                'acf-totalreservations' => 3,
                'acf-placeoftour' =>  $this->placesPostsIds[3],
            ],

            // ****** Visites à la cathédrale d'Amiens
            [
                'post_title' => 'Visite à la cathédrale d\'Amiens',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La cathédrale d\'Amiens, au cœur de la Picardie, est l\'une des plus grandes églises gothiques « classiques » du XIIIe siècle...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 5,
                'acf-placeoftour' =>  $this->placesPostsIds[4],
            ],
            [
                'post_title' => 'Visite à la cathédrale d\'Amiens',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La cathédrale d\'Amiens, au cœur de la Picardie, est l\'une des plus grandes églises gothiques « classiques » du XIIIe siècle...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 17:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 4,
                'acf-placeoftour' =>  $this->placesPostsIds[4],
            ],
            [
                'post_title' => 'Visite à la cathédrale d\'Amiens',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La cathédrale d\'Amiens, au cœur de la Picardie, est l\'une des plus grandes églises gothiques « classiques » du XIIIe siècle...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Littérature', 'Religion', 'Peinture']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 13:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 21,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[4],
            ],
            [
                'post_title' => 'Visite à la cathédrale d\'Amiens',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La cathédrale d\'Amiens, au cœur de la Picardie, est l\'une des plus grandes églises gothiques « classiques » du XIIIe siècle...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 1,
                'acf-placeoftour' =>  $this->placesPostsIds[4],
            ],
            [
                'post_title' => 'Visite à la cathédrale d\'Amiens',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La cathédrale d\'Amiens, au cœur de la Picardie, est l\'une des plus grandes églises gothiques « classiques » du XIIIe siècle...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 17:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 2,
                'acf-placeoftour' =>  $this->placesPostsIds[4],
            ],
            [
                'post_title' => 'Visite à la cathédrale d\'Amiens',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La cathédrale d\'Amiens, au cœur de la Picardie, est l\'une des plus grandes églises gothiques « classiques » du XIIIe siècle...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Littérature', 'Religion', 'Peinture']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 13:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 21,
                'acf-totalreservations' => 4,
                'acf-placeoftour' =>  $this->placesPostsIds[4],
            ],
            [
                'post_title' => 'Visite à la cathédrale d\'Amiens',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La cathédrale d\'Amiens, au cœur de la Picardie, est l\'une des plus grandes églises gothiques « classiques » du XIIIe siècle...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/24/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[4],
            ],
            [
                'post_title' => 'Visite à la cathédrale d\'Amiens',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La cathédrale d\'Amiens, au cœur de la Picardie, est l\'une des plus grandes églises gothiques « classiques » du XIIIe siècle...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/24/2021 17:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[4],
            ],
            [
                'post_title' => 'Visite à la cathédrale d\'Amiens',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La cathédrale d\'Amiens, au cœur de la Picardie, est l\'une des plus grandes églises gothiques « classiques » du XIIIe siècle...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Littérature', 'Religion', 'Peinture']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/24/2021 13:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 21,
                'acf-totalreservations' => 1,
                'acf-placeoftour' =>  $this->placesPostsIds[4],
            ],

            // ****** Visites à la cathédrale de Chartres
            [
                'post_title' => 'Visite à la cathédrale de Chartres',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Construite en partie à partir de 1145, et reconstruite en vingt-six ans après l\'incendie de 1194, la cathédrale de Chartres...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma', 'Religion', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 22,
                'acf-totalreservations' => 10,
                'acf-placeoftour' =>  $this->placesPostsIds[5],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Chartres',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Construite en partie à partir de 1145, et reconstruite en vingt-six ans après l\'incendie de 1194, la cathédrale de Chartres...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma', 'Religion', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 22,
                'acf-totalreservations' => 15,
                'acf-placeoftour' =>  $this->placesPostsIds[5],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Chartres',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Construite en partie à partir de 1145, et reconstruite en vingt-six ans après l\'incendie de 1194, la cathédrale de Chartres...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Renaissance', 'Peinture']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 16,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[5],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Chartres',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Construite en partie à partir de 1145, et reconstruite en vingt-six ans après l\'incendie de 1194, la cathédrale de Chartres...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma', 'Religion', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 22,
                'acf-totalreservations' => 11,
                'acf-placeoftour' =>  $this->placesPostsIds[5],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Chartres',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Construite en partie à partir de 1145, et reconstruite en vingt-six ans après l\'incendie de 1194, la cathédrale de Chartres...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma', 'Religion', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 22,
                'acf-totalreservations' => 12,
                'acf-placeoftour' =>  $this->placesPostsIds[5],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Chartres',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Construite en partie à partir de 1145, et reconstruite en vingt-six ans après l\'incendie de 1194, la cathédrale de Chartres...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Renaissance', 'Peinture']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 16,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[5],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Chartres',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Construite en partie à partir de 1145, et reconstruite en vingt-six ans après l\'incendie de 1194, la cathédrale de Chartres...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma', 'Religion', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/22/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 22,
                'acf-totalreservations' => 4,
                'acf-placeoftour' =>  $this->placesPostsIds[5],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Chartres',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Construite en partie à partir de 1145, et reconstruite en vingt-six ans après l\'incendie de 1194, la cathédrale de Chartres...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma', 'Religion', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/22/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 22,
                'acf-totalreservations' => 7,
                'acf-placeoftour' =>  $this->placesPostsIds[5],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Chartres',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Construite en partie à partir de 1145, et reconstruite en vingt-six ans après l\'incendie de 1194, la cathédrale de Chartres...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Renaissance', 'Peinture']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/22/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 16,
                'acf-totalreservations' => 2,
                'acf-placeoftour' =>  $this->placesPostsIds[5],
            ],

            // ****** Visites à la cathédrale de Bourges
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 08:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 6,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 4,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 17:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 9,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 08:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 4,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 2,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 17:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 1,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 08:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 5,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 17:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 3,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/22/2021 08:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/22/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/22/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],
            [
                'post_title' => 'Visite à la cathédrale de Bourges',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge', 'Religion', 'Noblesse']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/22/2021 17:00', // ! format m/d/Y H:i
                'acf-duration' => '01:30',
                'acf-totalpersons' => 12,
                'acf-totalreservations' => 1,
                'acf-placeoftour' =>  $this->placesPostsIds[6],
            ],

            // ****** Visites au Château de Fontainebleau
            [
                'post_title' => 'Visite au Château de Fontainebleau',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Utilisée par les rois de France dès le XIIe siècle, la résidence de chasse de Fontainebleau, au cœur d\'une grande forêt de l\'Île-de-France...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 20,
                'acf-totalreservations' => 20,
                'acf-placeoftour' =>  $this->placesPostsIds[7],
            ],
            [
                'post_title' => 'Visite au Château de Fontainebleau',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Utilisée par les rois de France dès le XIIe siècle, la résidence de chasse de Fontainebleau, au cœur d\'une grande forêt de l\'Île-de-France...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 20,
                'acf-totalreservations' => 20,
                'acf-placeoftour' =>  $this->placesPostsIds[7],
            ],
            [
                'post_title' => 'Visite au Château de Fontainebleau',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Utilisée par les rois de France dès le XIIe siècle, la résidence de chasse de Fontainebleau, au cœur d\'une grande forêt de l\'Île-de-France...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma', 'Peinture','Moyen-âge', 'Bande dessinée']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 25,
                'acf-totalreservations' => 25,
                'acf-placeoftour' =>  $this->placesPostsIds[7],
            ],
            [
                'post_title' => 'Visite au Château de Fontainebleau',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Utilisée par les rois de France dès le XIIe siècle, la résidence de chasse de Fontainebleau, au cœur d\'une grande forêt de l\'Île-de-France...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 20,
                'acf-totalreservations' => 20,
                'acf-placeoftour' =>  $this->placesPostsIds[7],
            ],
            [
                'post_title' => 'Visite au Château de Fontainebleau',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Utilisée par les rois de France dès le XIIe siècle, la résidence de chasse de Fontainebleau, au cœur d\'une grande forêt de l\'Île-de-France...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 20,
                'acf-totalreservations' => 20,
                'acf-placeoftour' =>  $this->placesPostsIds[7],
            ],
            [
                'post_title' => 'Visite au Château de Fontainebleau',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Utilisée par les rois de France dès le XIIe siècle, la résidence de chasse de Fontainebleau, au cœur d\'une grande forêt de l\'Île-de-France...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma', 'Peinture','Moyen-âge', 'Bande dessinée']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 25,
                'acf-totalreservations' => 25,
                'acf-placeoftour' =>  $this->placesPostsIds[7],
            ],
            [
                'post_title' => 'Visite au Château de Fontainebleau',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Utilisée par les rois de France dès le XIIe siècle, la résidence de chasse de Fontainebleau, au cœur d\'une grande forêt de l\'Île-de-France...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/21/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 20,
                'acf-totalreservations' => 20,
                'acf-placeoftour' =>  $this->placesPostsIds[7],
            ],
            [
                'post_title' => 'Visite au Château de Fontainebleau',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Utilisée par les rois de France dès le XIIe siècle, la résidence de chasse de Fontainebleau, au cœur d\'une grande forêt de l\'Île-de-France...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse','Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/21/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 20,
                'acf-totalreservations' => 20,
                'acf-placeoftour' =>  $this->placesPostsIds[7],
            ],
            [
                'post_title' => 'Visite au Château de Fontainebleau',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Utilisée par les rois de France dès le XIIe siècle, la résidence de chasse de Fontainebleau, au cœur d\'une grande forêt de l\'Île-de-France...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Cinéma', 'Peinture','Moyen-âge', 'Bande dessinée']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/22/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 25,
                'acf-totalreservations' => 25,
                'acf-placeoftour' =>  $this->placesPostsIds[7],
            ],

            // ****** Visites au Château de Versailles
            [
                'post_title' => 'Visite au Château de Versailles',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Lieu de résidence privilégié de la monarchie française de Louis XIV à Louis XVI, le château de Versailles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Renaissance']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 20,
                'acf-placeoftour' =>  $this->placesPostsIds[8],
            ],
            [
                'post_title' => 'Visite au Château de Versailles',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Lieu de résidence privilégié de la monarchie française de Louis XIV à Louis XVI, le château de Versailles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Renaissance']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 18:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 25,
                'acf-placeoftour' =>  $this->placesPostsIds[8],
            ],
            [
                'post_title' => 'Visite au Château de Versailles',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Lieu de résidence privilégié de la monarchie française de Louis XIV à Louis XVI, le château de Versailles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','Littérature']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:30',
                'acf-totalpersons' => 18,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[8],
            ],
            [
                'post_title' => 'Visite au Château de Versailles',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Lieu de résidence privilégié de la monarchie française de Louis XIV à Louis XVI, le château de Versailles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','Littérature']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 15:00', // ! format m/d/Y H:i
                'acf-duration' => '02:30',
                'acf-totalpersons' => 18,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[8],
            ],
            [
                'post_title' => 'Visite au Château de Versailles',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Lieu de résidence privilégié de la monarchie française de Louis XIV à Louis XVI, le château de Versailles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Renaissance']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 15,
                'acf-placeoftour' =>  $this->placesPostsIds[8],
            ],
            [
                'post_title' => 'Visite au Château de Versailles',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Lieu de résidence privilégié de la monarchie française de Louis XIV à Louis XVI, le château de Versailles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Renaissance']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 18:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 15,
                'acf-placeoftour' =>  $this->placesPostsIds[8],
            ],
            [
                'post_title' => 'Visite au Château de Versailles',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Lieu de résidence privilégié de la monarchie française de Louis XIV à Louis XVI, le château de Versailles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','Littérature']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:30',
                'acf-totalpersons' => 18,
                'acf-totalreservations' => 18,
                'acf-placeoftour' =>  $this->placesPostsIds[8],
            ],
            [
                'post_title' => 'Visite au Château de Versailles',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Lieu de résidence privilégié de la monarchie française de Louis XIV à Louis XVI, le château de Versailles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','Littérature']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 15:00', // ! format m/d/Y H:i
                'acf-duration' => '02:30',
                'acf-totalpersons' => 18,
                'acf-totalreservations' => 6,
                'acf-placeoftour' =>  $this->placesPostsIds[8],
            ],
            [
                'post_title' => 'Visite au Château de Versailles',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Lieu de résidence privilégié de la monarchie française de Louis XIV à Louis XVI, le château de Versailles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Renaissance']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 4,
                'acf-placeoftour' =>  $this->placesPostsIds[8],
            ],
            [
                'post_title' => 'Visite au Château de Versailles',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Lieu de résidence privilégié de la monarchie française de Louis XIV à Louis XVI, le château de Versailles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Renaissance']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 18:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[8],
            ],
            [
                'post_title' => 'Visite au Château de Versailles',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Lieu de résidence privilégié de la monarchie française de Louis XIV à Louis XVI, le château de Versailles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','Littérature']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '02:30',
                'acf-totalpersons' => 18,
                'acf-totalreservations' => 7,
                'acf-placeoftour' =>  $this->placesPostsIds[8],
            ],
            [
                'post_title' => 'Visite au Château de Versailles',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Lieu de résidence privilégié de la monarchie française de Louis XIV à Louis XVI, le château de Versailles...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','Littérature']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 15:00', // ! format m/d/Y H:i
                'acf-duration' => '02:30',
                'acf-totalpersons' => 18,
                'acf-totalreservations' => 6,
                'acf-placeoftour' =>  $this->placesPostsIds[8],
            ],

            // ****** Visites au Mont Saint-Michel
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 11:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 24,
                'acf-totalreservations' => 23,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 13:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 24,
                'acf-totalreservations' => 21,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 17:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 24,
                'acf-totalreservations' => 22,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 16,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 16,
                'acf-totalreservations' => 12,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 17:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 16,
                'acf-totalreservations' => 10,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 11:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 24,
                'acf-totalreservations' => 18,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 13:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 24,
                'acf-totalreservations' => 13,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 17:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 24,
                'acf-totalreservations' => 16,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 16,
                'acf-totalreservations' => 4,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 16,
                'acf-totalreservations' => 10,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 17:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 16,
                'acf-totalreservations' => 1,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 11:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 24,
                'acf-totalreservations' => 11,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 13:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 24,
                'acf-totalreservations' => 10,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Noblesse', 'Moyen-âge']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 17:00', // ! format m/d/Y H:i
                'acf-duration' => '02:00',
                'acf-totalpersons' => 24,
                'acf-totalreservations' => 12,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 16,
                'acf-totalreservations' => 5,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 14:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 16,
                'acf-totalreservations' => 4,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],
            [
                'post_title' => 'Visite au Mont Saint-Michel',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée', 'Religion']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 17:00', // ! format m/d/Y H:i
                'acf-duration' => '01:00',
                'acf-totalpersons' => 16,
                'acf-totalreservations' => 7,
                'acf-placeoftour' =>  $this->placesPostsIds[9],
            ],

            // ****** Visites à Provins
            [
                'post_title' => 'Visite à Provins',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La ville médiévale fortifiée de Provins se situe au cœur de l\'ancienne région des puissants comtes de Champagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Préhistoire', 'Cinéma']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 35,
                'acf-totalreservations' => 30,
                'acf-placeoftour' =>  $this->placesPostsIds[10],
            ],
            [
                'post_title' => 'Visite à Provins',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La ville médiévale fortifiée de Provins se situe au cœur de l\'ancienne région des puissants comtes de Champagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Préhistoire', 'Cinéma']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 15:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 35,
                'acf-totalreservations' => 28,
                'acf-placeoftour' =>  $this->placesPostsIds[10],
            ],
            [
                'post_title' => 'Visite à Provins',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La ville médiévale fortifiée de Provins se situe au cœur de l\'ancienne région des puissants comtes de Champagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Préhistoire', 'Cinéma']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 35,
                'acf-totalreservations' => 11,
                'acf-placeoftour' =>  $this->placesPostsIds[10],
            ],
            [
                'post_title' => 'Visite à Provins',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La ville médiévale fortifiée de Provins se situe au cœur de l\'ancienne région des puissants comtes de Champagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Préhistoire', 'Cinéma']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 15:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 35,
                'acf-totalreservations' => 18,
                'acf-placeoftour' =>  $this->placesPostsIds[10],
            ],
            [
                'post_title' => 'Visite à Provins',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La ville médiévale fortifiée de Provins se situe au cœur de l\'ancienne région des puissants comtes de Champagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Préhistoire', 'Cinéma']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 35,
                'acf-totalreservations' => 4,
                'acf-placeoftour' =>  $this->placesPostsIds[10],
            ],
            [
                'post_title' => 'Visite à Provins',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La ville médiévale fortifiée de Provins se situe au cœur de l\'ancienne région des puissants comtes de Champagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Préhistoire', 'Cinéma']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 15:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 35,
                'acf-totalreservations' => 8,
                'acf-placeoftour' =>  $this->placesPostsIds[10],
            ],
            [
                'post_title' => 'Visite à Provins',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La ville médiévale fortifiée de Provins se situe au cœur de l\'ancienne région des puissants comtes de Champagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Préhistoire', 'Cinéma']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 35,
                'acf-totalreservations' => 2,
                'acf-placeoftour' =>  $this->placesPostsIds[10],
            ],
            [
                'post_title' => 'Visite à Provins',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La ville médiévale fortifiée de Provins se situe au cœur de l\'ancienne région des puissants comtes de Champagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Préhistoire', 'Cinéma']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 15:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 35,
                'acf-totalreservations' => 6,
                'acf-placeoftour' =>  $this->placesPostsIds[10],
            ],
            [
                'post_title' => 'Visite à Provins',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La ville médiévale fortifiée de Provins se situe au cœur de l\'ancienne région des puissants comtes de Champagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Préhistoire', 'Cinéma']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/21/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 35,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[10],
            ],
            [
                'post_title' => 'Visite à Provins',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La ville médiévale fortifiée de Provins se situe au cœur de l\'ancienne région des puissants comtes de Champagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Préhistoire', 'Cinéma']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/21/2021 15:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 35,
                'acf-totalreservations' => 2,
                'acf-placeoftour' =>  $this->placesPostsIds[10],
            ],
            [
                'post_title' => 'Visite à Provins',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La ville médiévale fortifiée de Provins se situe au cœur de l\'ancienne région des puissants comtes de Champagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Préhistoire', 'Cinéma']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/22/2021 10:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 35,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[10],
            ],
            [
                'post_title' => 'Visite à Provins',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'La ville médiévale fortifiée de Provins se situe au cœur de l\'ancienne région des puissants comtes de Champagne...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Moyen-âge','Préhistoire', 'Cinéma']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/22/2021 15:00', // ! format m/d/Y H:i
                'acf-duration' => '04:00',
                'acf-totalpersons' => 35,
                'acf-totalreservations' => 0,
                'acf-placeoftour' =>  $this->placesPostsIds[10],
            ],


            // ****** Visites au Musée du Louvre
            [
                'post_title' => 'Visite au musée du Louvre',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Le musée du Louvre est une préfiguration imaginée en 1775-1776 par le comte d\'Angiviller, directeur général des Bâtiments du roi...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 26,
                'acf-totalreservations' => 26,
                'acf-placeoftour' =>  $this->placesPostsIds[11],
            ],
            [
                'post_title' => 'Visite au musée du Louvre',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Le musée du Louvre est une préfiguration imaginée en 1775-1776 par le comte d\'Angiviller, directeur général des Bâtiments du roi...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 26,
                'acf-totalreservations' => 26,
                'acf-placeoftour' =>  $this->placesPostsIds[11],
            ],
            [
                'post_title' => 'Visite au musée du Louvre',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Le musée du Louvre est une préfiguration imaginée en 1775-1776 par le comte d\'Angiviller, directeur général des Bâtiments du roi...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 26,
                'acf-totalreservations' => 26,
                'acf-placeoftour' =>  $this->placesPostsIds[11],
            ],
            [
                'post_title' => 'Visite au musée du Louvre',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Le musée du Louvre est une préfiguration imaginée en 1775-1776 par le comte d\'Angiviller, directeur général des Bâtiments du roi...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/18/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 26,
                'acf-totalreservations' => 26,
                'acf-placeoftour' =>  $this->placesPostsIds[11],
            ],
            [
                'post_title' => 'Visite au musée du Louvre',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Le musée du Louvre est une préfiguration imaginée en 1775-1776 par le comte d\'Angiviller, directeur général des Bâtiments du roi...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 26,
                'acf-totalreservations' => 26,
                'acf-placeoftour' =>  $this->placesPostsIds[11],
            ],
            [
                'post_title' => 'Visite au musée du Louvre',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Le musée du Louvre est une préfiguration imaginée en 1775-1776 par le comte d\'Angiviller, directeur général des Bâtiments du roi...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 26,
                'acf-totalreservations' => 26,
                'acf-placeoftour' =>  $this->placesPostsIds[11],
            ],
            [
                'post_title' => 'Visite au musée du Louvre',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Le musée du Louvre est une préfiguration imaginée en 1775-1776 par le comte d\'Angiviller, directeur général des Bâtiments du roi...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 26,
                'acf-totalreservations' => 26,
                'acf-placeoftour' =>  $this->placesPostsIds[11],
            ],
            [
                'post_title' => 'Visite au musée du Louvre',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Le musée du Louvre est une préfiguration imaginée en 1775-1776 par le comte d\'Angiviller, directeur général des Bâtiments du roi...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Renaissance','XVIIIeme siècle']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/20/2021 16:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 26,
                'acf-totalreservations' => 26,
                'acf-placeoftour' =>  $this->placesPostsIds[11],
            ],

            // ****** Visites au Centre Pompidou
            [
                'post_title' => 'Visite au Centre Pompidou',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Communément appelé « centre Pompidou », ou plus familièrement « Beaubourg » est un établissement pluridisciplinaire...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée','Contemporain']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 30,
                'acf-placeoftour' =>  $this->placesPostsIds[12],
            ],
            [
                'post_title' => 'Visite au Centre Pompidou',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Communément appelé « centre Pompidou », ou plus familièrement « Beaubourg » est un établissement pluridisciplinaire...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée','Contemporain']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/17/2021 19:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 30,
                'acf-placeoftour' =>  $this->placesPostsIds[12],
            ],
            [
                'post_title' => 'Visite au Centre Pompidou',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Communément appelé « centre Pompidou », ou plus familièrement « Beaubourg » est un établissement pluridisciplinaire...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée','Contemporain']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 30,
                'acf-placeoftour' =>  $this->placesPostsIds[12],
            ],
            [
                'post_title' => 'Visite au Centre Pompidou',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Communément appelé « centre Pompidou », ou plus familièrement « Beaubourg » est un établissement pluridisciplinaire...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée','Contemporain']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/19/2021 19:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 30,
                'acf-placeoftour' =>  $this->placesPostsIds[12],
            ],
            [
                'post_title' => 'Visite au Centre Pompidou',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Communément appelé « centre Pompidou », ou plus familièrement « Beaubourg » est un établissement pluridisciplinaire...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée','Contemporain']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/21/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 30,
                'acf-placeoftour' =>  $this->placesPostsIds[12],
            ],
            [
                'post_title' => 'Visite au Centre Pompidou',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Communément appelé « centre Pompidou », ou plus familièrement « Beaubourg » est un établissement pluridisciplinaire...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée','Contemporain']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/21/2021 19:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 30,
                'acf-placeoftour' =>  $this->placesPostsIds[12],
            ],
            [
                'post_title' => 'Visite au Centre Pompidou',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Communément appelé « centre Pompidou », ou plus familièrement « Beaubourg » est un établissement pluridisciplinaire...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée','Contemporain']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/23/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 30,
                'acf-placeoftour' =>  $this->placesPostsIds[12],
            ],
            [
                'post_title' => 'Visite au Centre Pompidou',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Communément appelé « centre Pompidou », ou plus familièrement « Beaubourg » est un établissement pluridisciplinaire...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée','Contemporain']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/23/2021 19:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 30,
                'acf-placeoftour' =>  $this->placesPostsIds[12],
            ],
            [
                'post_title' => 'Visite au Centre Pompidou',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Communément appelé « centre Pompidou », ou plus familièrement « Beaubourg » est un établissement pluridisciplinaire...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée','Contemporain']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/25/2021 12:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 30,
                'acf-placeoftour' =>  $this->placesPostsIds[12],
            ],
            [
                'post_title' => 'Visite au Centre Pompidou',
                'post_content' => 'Ceci est la description d\'une visite guidée',
                'post_excerpt' => 'Communément appelé « centre Pompidou », ou plus familièrement « Beaubourg » est un établissement pluridisciplinaire...',
                'post_type' => 'guided-tour',
                'post_status' => 'publish',
                'tax_input' => ['tour-thematic' => ['Bande dessinée','Contemporain']],
                'comment_status' => 'closed',
                // ACF custom fields
                'acf-date' => '10/25/2021 19:00', // ! format m/d/Y H:i
                'acf-duration' => '03:00',
                'acf-totalpersons' => 30,
                'acf-totalreservations' => 30,
                'acf-placeoftour' =>  $this->placesPostsIds[12],
            ],
        ];;
    }
}
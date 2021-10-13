<?php

namespace OPatrimoine\defaultDatas;

class PlacesDatas
{
    // TODO add image url
    // NTH add acf notes
    
    public $places = [
        [
            'post_title' => 'Musée d’Orsay',
            'post_content' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.
                               Sous l\'immense nef voûtée baignée de lumière, Orsay présente sur trois niveaux une collection pluridisciplinaire sans égale englobant peinture, bien sûr, mais aussi sculpture (Rodin, Bourdelle…), arts décoratifs (Gaudí, Guimard…), arts graphiques, photographie et architecture.
                               hors Journées du Patrimoine, le musée à des lieux dont certaines parties sont parfois inaccessibles au public. ',
            'post_excerpt' => 'Anciennement Palais d’Orsay et gare, le musée d’Orsay est un musée important de Paris depuis 1986, spécialisé sur le XIXeme siècle.',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Musée']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '01 40 49 48 14',
            'acf-urlsite' => 'https://www.musee-orsay.fr/',
            'acf-address' => '1 Rue de la Légion d\'Honneur
            75007, Paris ',
            'acf-department' => 'Paris',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2018/04/26/09/27/architecture-3351480_960_720.jpg',
        ],
        [
            'post_title' => 'Arc de Triomphe',
            'post_content' => 'Un haut lieu des grandes manifestations nationales. Souhaité par Napoléon Ier dès 1806, l\'Arc de triomphe est inauguré en 1806 par le roi des Français, Louis-Philippe, qui le dédie aux armées de la Révolution et de l\'Empire. Le Soldat inconnu est inhumé sur le terre-plein en 1921.',
            'post_excerpt' => 'Un haut lieu des grandes manifestations nationales. Souhaité par Napoléon Ier dès 1806, l\'Arc de triomphe est inauguré en 1806...',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Monument']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '01 55 37 73 77',
            'acf-urlsite' => 'http://www.paris-arc-de-triomphe.fr/Actualites/L-Arc-de-triomphe-Wrapped-Paris-1961-2021',
            'acf-address' => 'Place Charles de Gaulle 
            75017, Paris ',
            'acf-department' => 'Paris',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2021/09/18/16/05/arc-de-triomphe-6635521_960_720.jpg',
        ],
        [
            'post_title' => 'Place de la concorde',
            'post_content' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor (âgée de 3 300 ans avec J-C et érigée en mai 1998), par les prestigieux hôtels qui la bordent et par les deux fontaines monumentales (Fontaine des Mers et Fontaine des Fleuves). Créée en 1772, la place de la Concorde a d’abord été connue pour avoir été l’un des lieux d’exécution pendant la Révolution Française. Louis XVI et Marie-Antoinette (entre autres) y furent guillotinés. C’est entre 1836 et 1846 que l’architecte Jacques-Ignace Hittorf a façonné la place pour devenir celle que l’on connaît aujourd’hui.',
            'post_excerpt' => 'Elle se situe au pied de l’avenue des Champs-Élysées. Elle se distingue aujourd’hui par l’Obélisque de Louxor...',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Place']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '-',
            'acf-urlsite' => 'https://fr.wikipedia.org/wiki/Place_de_la_Concorde',
            'acf-address' => 'Place de la Concorde 
            75008, Paris ',
            'acf-department' => 'Paris',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2018/11/06/15/02/fontaine-des-mers-3798480_960_720.jpg',
        ],

        [
            'post_title' => 'Abbatiale de Saint-Savin sur Gartempe',
            'post_content' => 'Surnommée la « Sixtine romane », l\'abbaye poitevine de Saint-Savin est décorée de très nombreuses et très belles peintures murales des XIe et XIIe siècles qui nous sont parvenues dans un état de fraîcheur remarquable.',
            'post_excerpt' => 'Surnommée la « Sixtine romane », l\'abbaye poitevine de Saint-Savin est décorée de très nombreuses et très belles peintures murales des XIe et XIIe siècles...',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Monastère']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '05 49 84 30 00',
            'acf-urlsite' => 'https://www.abbaye-saint-savin.fr/',
            'acf-address' => 'Place de la Libération 
            86310, Saint-Savin ',
            'acf-department' => 'Poitou-Charentes',
            // Image
            'place-photo' => 'https://upload.wikimedia.org/wikipedia/commons/f/f7/Saint-Savin_abbaye_%281%29.jpg',
        ],

        [
            'post_title' => 'Cathédrale d\'Amiens',
            'post_content' => 'La cathédrale d\'Amiens, au cœur de la Picardie, est l\'une des plus grandes églises gothiques « classiques » du XIIIe siècle. Elle frappe par la cohérence du plan, la beauté de l\'élévation intérieure à trois niveaux et l\'agencement d\'un programme sculpté extrêmement savant à la façade principale et au bras sud du transept.',
            'post_excerpt' => 'La cathédrale d\'Amiens, au cœur de la Picardie, est l\'une des plus grandes églises gothiques « classiques » du XIIIe siècle...',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Cathédrale']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '03 22 80 03 41',
            'acf-urlsite' => 'https://www.amiens.fr/Vivre-a-Amiens/Culture-Patrimoine/Patrimoine-mondial/La-cathedrale-Notre-Dame-d-Amiens',
            'acf-address' => '30 Place Notre Dame 
            80000, Amiens ',
            'acf-department' => 'Picardie',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2017/08/29/17/30/cathedral-2694168_960_720.jpg',
        ],

        [
            'post_title' => 'Cathédrale de Chartres',
            'post_content' => 'Construite en partie à partir de 1145, et reconstruite en vingt-six ans après l\'incendie de 1194, la cathédrale de Chartres est le monument par excellence de l\'art gothique français. Sa vaste nef du plus pur style ogival, ses porches présentant d\'admirables sculptures du milieu du XIIe siècle, sa chatoyante parure de vitraux des XIIe et XIIIe siècles en font un chef-d\'œuvre exceptionnel et remarquablement bien conservé.',
            'post_excerpt' => 'Construite en partie à partir de 1145, et reconstruite en vingt-six ans après l\'incendie de 1194, la cathédrale de Chartres...',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Cathédrale']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '02 37 21 59 08',
            'acf-urlsite' => 'http://www.chartres-cathedrale.fr/',
            'acf-address' => '16 Cloître Notre Dame 
            28000, Chartres ',
            'acf-department' => 'Centre',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2016/01/03/22/06/chartres-cathedral-1120139_960_720.jpg',
        ],

        [
            'post_title' => 'Cathédrale de Bourges',
            'post_content' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges, construite entre la fin du XIIe et la fin du XIIIe siècle, est l\'un des grands chefs-d\'œuvre de l\'art gothique. Son tympan, ses sculptures et ses vitraux sont particulièrement remarquables. Par-delà sa beauté architecturale, elle témoigne de la puissance du christianisme dans la France médiévale.',
            'post_excerpt' => 'Admirable par ses proportions et l\'unité de sa conception, la cathédrale Saint-Étienne de Bourges...',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Cathédrale']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '02 48 65 49 44',
            'acf-urlsite' => 'http://www.bourges-cathedrale.fr/',
            'acf-address' => 'Place Etienne Dolet 
            18000, Bourges ',
            'acf-department' => 'Centre',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2018/08/11/20/37/bourg-en-bresse-3599450_960_720.jpg',
        ],

        [
            'post_title' => 'Château de Fontainebleau',
            'post_content' => 'Utilisée par les rois de France dès le XIIe siècle, la résidence de chasse de Fontainebleau, au cœur d\'une grande forêt de l\'Île-de-France, fut transformée, agrandie et embellie au XVIe siècle par François Ier qui voulait en faire une « nouvelle Rome ». Entouré d\'un vaste parc, le château, inspiré de modèles italiens, fut un lieu de rencontre entre l\'art de la Renaissance et les traditions françaises.',
            'post_excerpt' => 'Utilisée par les rois de France dès le XIIe siècle, la résidence de chasse de Fontainebleau, au cœur d\'une grande forêt de l\'Île-de-France...',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Château']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '01 60 71 50 70',
            'acf-urlsite' => 'https://www.chateaudefontainebleau.fr/',
            'acf-address' => '77300, Fontainebleau ',
            'acf-department' => 'Ile-de-France',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2020/08/10/08/56/castle-5477200_960_720.jpg',
        ],

        [
            'post_title' => 'Château de Versailles',
            'post_content' => 'Lieu de résidence privilégié de la monarchie française de Louis XIV à Louis XVI, le château de Versailles, embelli par plusieurs générations d\'architectes, de sculpteurs, d\'ornemanistes et de paysagistes, a été pour l\'Europe pendant plus d\'un siècle le modèle de ce que devait être une résidence royale.',
            'post_excerpt' => 'Lieu de résidence privilégié de la monarchie française de Louis XIV à Louis XVI, le château de Versailles...',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Château']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '01 30 83 78 00',
            'acf-urlsite' => 'https://www.versailles-tourisme.com/chateau-de-versailles.html',
            'acf-address' => 'Place d\'Armes 
            78000, Versailles ',
            'acf-department' => 'Ile-de-France',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2015/08/08/12/05/versailles-880359_960_720.jpg',
        ],

        [
            'post_title' => 'Mont-Saint-Michel',
            'post_content' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne, s\'élèvent la « merveille de l\'Occident », abbaye bénédictine de style gothique dédiée à l\'archange saint Michel, et le village né à l\'abri de ses murailles. La construction de l\'abbaye, qui s\'est poursuivie du XIe au XVIe siècle, en s\'adaptant à un site naturel très difficile, a été un tour de force technique et artistique.',
            'post_excerpt' => 'Sur un îlot rocheux au milieu de grèves immenses soumises au va-et-vient de puissantes marées, à la limite entre la Normandie et la Bretagne...',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Ville']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '02 33 60 14 30',
            'acf-urlsite' => 'https://www.ot-montsaintmichel.com/',
            'acf-address' => 'Grande Rue
            50170, Le Mont-Saint-Michel ',
            'acf-department' => 'Normandie',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2016/01/19/17/32/castle-1149756_960_720.jpg',
        ],
        
        [
            'post_title' => 'Provins',
            'post_content' => 'La ville médiévale fortifiée de Provins se situe au cœur de l\'ancienne région des puissants comtes de Champagne. Elle témoigne des premiers développements des foires commerciales internationales et de l\'industrie de la laine. Provins a su préserver sa structure urbaine, conçue spécialement pour accueillir des foires et des activités connexes.',
            'post_excerpt' => 'La ville médiévale fortifiée de Provins se situe au cœur de l\'ancienne région des puissants comtes de Champagne...',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Ville']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '01 64 60 26 26',
            'acf-urlsite' => 'https://www.provins.net/',
            'acf-address' => '4 Chemin de Villecran 
            77160, Provins ',
            'acf-department' => 'Ile-de-France',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2018/08/04/19/24/tower-3584305_960_720.jpg',
        ],

        [
            'post_title' => 'Musée du Louvre',
            'post_content' => 'Le musée du Louvre est une préfiguration imaginée en 1775-1776 par le comte d\'Angiviller, directeur général des Bâtiments du roi, comme lieu de présentation des chefs-d\'œuvre de la collection de la Couronne. Ce musée n\'a été inauguré qu\'en 1793 sous l\'appellation de Muséum central des arts de la République dans le palais du Louvre, ancienne résidence royale située au centre de Paris, et il est aujourd\'hui le plus grand musée d\'art et d\'antiquités au monde. le Louvre conserve plus de 500 000 œuvres, dont plus de 36 000 étaient exposées. Elles présentent l\'art occidental du Moyen Âge à 1848, celui des civilisations antiques qui l\'ont précédé et influencé (orientales, égyptienne, grecque, étrusque et romaine), les arts des premiers chrétiens et de l\'islam.',
            'post_excerpt' => 'Le musée du Louvre est une préfiguration imaginée en 1775-1776 par le comte d\'Angiviller, directeur général des Bâtiments du roi...',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Musée']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '01 40 20 50 50',
            'acf-urlsite' => 'https://www.louvre.fr/',
            'acf-address' => 'Rue de Rivoli 
            75001, Paris ',
            'acf-department' => 'Paris',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2015/03/26/10/06/the-louvre-690929_960_720.jpg',
        ],

        [
            'post_title' => 'Le Centre Pompidou',
            'post_content' => 'Communément appelé « centre Pompidou », ou plus familièrement « Beaubourg » est un établissement pluridisciplinaire né de la volonté du président Georges Pompidou, grand amateur d\'art moderne, de créer au cœur de Paris une institution culturelle originale entièrement vouée à la création moderne et contemporaine où les arts plastiques voisineraient avec les livres, le dessin, la musique, le spectacle vivant, les activités pour les jeunes publics, ainsi que le cinéma.',
            'post_excerpt' => 'Communément appelé « centre Pompidou », ou plus familièrement « Beaubourg » est un établissement pluridisciplinaire...',
            'post_type' => 'place',
            'post_status' => 'publish',
            'tax_input' => ['place-type' => ['Musée']],
            // NTH 'open' en évolution potentielle
            'comment_status' => 'closed',
            // ACF custom fields
            'acf-telephone' => '01 44 78 12 33',
            'acf-urlsite' => 'https://www.centrepompidou.fr/fr/',
            'acf-address' => 'Place Georges-Pompidou 
            75004, Paris ',
            'acf-department' => 'Paris',
            // Image
            'place-photo' => 'https://cdn.pixabay.com/photo/2015/03/15/20/06/paris-674964_960_720.jpg',
        ],
        
    ];

    public function getPlaces()
    {
        return $this->places;
    }
}
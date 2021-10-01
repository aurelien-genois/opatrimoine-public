<?php

namespace OPatrimoine;

use OPatrimoine\defaultDatas\GuidedToursDatas;
use OPatrimoine\defaultDatas\PlacesDatas;
use OPatrimoine\defaultDatas\PlaceTypesDatas;
use OPatrimoine\defaultDatas\TourThematicsDatas;
use WP_Http;

class Plugin
{   
    
    /**
     * Instance de OPatrimoine\ACL, gestion des rôles & capabilities
     *
     * @var OPatrimoine\ACL
     */
    protected $acl;
    
    
    // cpt definitions
    public $customPostTypes = [
        'place' => [
            'label' => 'Lieux',
            'icon' => 'dashicons-bank',
            'fields' => [
                ['key' => 'telephone', 'label' => 'Téléphone', 'name' => 'telephone', 'type' => 'text'],
                ['key' => 'urlsite', 'label' => 'URL du site', 'name' => 'urlsite', 'type' => 'url'],
                ['key' => 'address', 'label' => 'Adresse', 'name' => 'address', 'type' => 'text'],
                ['key' => 'city', 'label' => 'Ville', 'name' => 'city', 'type' => 'text'],
                // NTH noter un lieu
                //['key' => 'rating', 'label' => 'Note', 'name' => 'rating', 'type' => 'number'],
            ],
            'hasArchive' => true,
        ],
        'guided-tour' => [
            'label' => 'Visites guidées',
            'icon' => 'dashicons-calendar-alt',
            'fields' => [
                ['key' => 'starthour', 'label' => 'Heure de début', 'name' => 'starthour', 'type' => 'time_picker'],
                ['key' => 'duration', 'label' => 'Duréé estimée', 'name' => 'duration', 'type' => 'text'],
                ['key' => 'totalpersons', 'label' => 'Nombre de personnes totale', 'name' => 'totalpersons', 'type' => 'number'],
                // Relationship field to links a guided-tour to a specific place
                ['key' => 'placeoftour', 'label' => 'Lieux de la visite', 'name' => 'placeoftour', 'type' => 'post_object', 'allow_null' => 'no', 'multiple' => 0, 'return_format' => 'object', 'post_type' => 'place'],
            ],
            'hasArchive' => false,
        ],
    ];

    // List of place post id for link them to guided-tours
    public $placesIdList = [];

    // custom taxonomies definitions
    public $customTaxonomies = [
        'place-type' => [
            'label' => 'Type de lieux',
            'postTypes' => ['place'],
            'hierachical' => false,
        ],
        // NTH add inaccessibility taxonomies
        // 'inaccessibility' => [
        //     'label' => 'Inaccessibilité',
        //     'postTypes' => ['guided-tour'],
        //     'hierachical' => false,
        // ],
        'tour-thematic' => [
            'label' => 'Thématique de visite',
            'postTypes' => ['guided-tour'],
            // NTH True en évolution potentielle
            'hierachical' => false,
        ],
    ];

    // plugin initialization
    public function __construct() 
    {
      
        $this->acl = new ACL();
        
        
        add_action(
            'init',
            [$this, 'registerCustomPostTypes'],
        );

        add_action(
            'init', // event "initialisation de wp
            [$this, 'registerCustomTaxonomies'],
        );    
    }

    public function registerCustomPostTypes()
    {
        foreach($this->customPostTypes as $identifier => $description) {
            $postType = new CustomPostType(
                $identifier,
                $description['label'],
                $description['icon'],
                $description['fields'],
                $description['hasArchive'],
            );
            $postType->register();
        };
    }

    public function registerCustomTaxonomies()
    {
        foreach($this->customTaxonomies as $identifier => $description) {
            $taxonomy = new CustomTaxonomy(
                $identifier,
                $description['label'],
                $description['postTypes'],
                $description['hierachical']
            );
            $taxonomy->register();
        }
    }

    public function generatePlaceTypes()
    {
        $placeTypesDatas = new PlaceTypesDatas();
        $placeTypes = $placeTypesDatas->getPlaceTypes();

        foreach($placeTypes as $placeType) {
            wp_insert_term($placeType, 'place-type');
        }
    }

    public function generateTourThematics()
    {
        $tourThematicsDatas = new TourThematicsDatas();
        $tourThematics = $tourThematicsDatas->getTourThematics();

        foreach($tourThematics as $tourThematic) {
            wp_insert_term($tourThematic, 'tour-thematic');
        }
    }

    public function generatePlaces()
    {
        $placesDatas = new PlacesDatas();
        $places = $placesDatas->getPlaces();

        // todo to test for delete cpt before genetate
        // $existingPlaces = get_posts([
        //     'post_type' => 'places',
        //     'posts_per_page' => -1
        // ]);

        // foreach($existingPlaces as $place) {
        //     wp_delete_post($place->id);
        // }
        // end to test

        foreach($places as $place) {
            $postId = wp_insert_post($place);

            // ACF populate custom fields
            if(function_exists('update_field')) {
                update_field('telephone', $place['acf-telephone'], $postId);
                update_field('urlsite', $place['acf-urlsite'], $postId);
                update_field('address', $place['acf-address'], $postId);
                update_field('city', $place['acf-city'], $postId);
            };

            // save places postId for link them to guided-tours
            $this->placesIdList[] = $postId;

            // Image
            if ($place['place-photo']) {
                $this->setPostImageThumbnail($postId, $place['place-photo']);
            };
        }
    }

    public function generateGuidedTours()
    {
        $guidedToursDatas = new GuidedToursDatas($this->placesIdList);
        $guidedTours = $guidedToursDatas->getGuidedTours();

        foreach($guidedTours as $guidedTour) {
            $postId = wp_insert_post($guidedTour);
            // ACF populate custom fields
            if(function_exists('update_field')) {
                update_field('starthour', $guidedTour['acf-starthour'], $postId);
                update_field('duration', $guidedTour['acf-duration'], $postId);
                update_field('totalpersons', $guidedTour['acf-totalpersons'], $postId);
                update_field('placeoftour', $guidedTour['acf-placeoftour'], $postId);
            };
        }
    }

    public function setPostImageThumbnail($postId, $imageUrl)
    {
        include_once(ABSPATH . WPINC . '/class-http.php');
        $http = new WP_Http();

        // WP_Http->->request() Send an HTTP request to a URI.
        $response = $http->request($imageUrl);
        if ($response['response']['code'] != 200) {
            dd('response' . $response['response']['code']);
        }

        // wp_upload_bits() Create a file in the upload folder with given content.
        $upload = wp_upload_bits(basename($imageUrl), null, $response['body']);
        if (!empty($upload['error'])) {
            return false;
        }
    
        // basename() Returns trailing name component of path
        $file_path = $upload['file'];
        $file_name = basename($file_path);
        $wp_filetype = wp_check_filetype($file_name, null);

        // sanitize_file_name() Sanitizes a filename, replacing whitespace with dashes.
        // pathinfo() Returns information about a file path
        $attachment_title = sanitize_file_name(pathinfo($file_name, PATHINFO_FILENAME));
        // wp_upload_dir() Returns an array containing the current upload directory's path and URL.
        $wp_upload_dir = wp_upload_dir();

        // guid means Globally Unique Identifier
        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . $file_name,
            'post_mime_type' => $wp_filetype['type'],
            'post_title' => $attachment_title,
            'post_content' => '',
            'post_status' => 'inherit'
        );

        // Create the attachment
        $attach_id = wp_insert_attachment($attachment, $file_path, $postId);

        // you must first include the image.php file for the function wp_generate_attachment_metadata() to work
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');

        // Definer attachment metadata
        $attach_data = wp_generate_attachment_metadata($attach_id, $file_path);

        // Assign metadata to attachment
        wp_update_attachment_metadata($attach_id, $attach_data);

        // Set the attachment as the thumbnail of the post
        set_post_thumbnail( $postId, $attach_id );

        return $attach_id;
    }

    public function addPostsArchiveNavMenuItem($menu, $itemTitle, $post_type)
    {
        // get the menu object
        $menuObj = wp_get_nav_menu_object($menu);
        // get the archive page link
        $archiveLink = get_post_type_archive_link($post_type);
        // add the link item to the menu
        wp_update_nav_menu_item( $menuObj->term_id, 0, array(
            'menu-item-title'   =>  $itemTitle,
            'menu-item-url'     => $archiveLink, 
            'menu-item-status'  => 'publish'
        ) );
    }

    public function deletePostsArchiveNavMenuItem($menu, $itemTitle)
    {
        // get the items of the menu 'header_menu'
        $headerMenuItems = wp_get_nav_menu_items($menu);
        // get the postID of the menu item
        foreach($headerMenuItems as $item) {
            if ($item->post_title == $itemTitle) {
                $archiveLinkItemPostID = $item->ID;
            }
        }
        // delete the post of the menu item
        wp_delete_post($archiveLinkItemPostID);
    }

    public function activate()
    {
        $this->registerCustomPostTypes();
        $this->registerCustomTaxonomies();
        $this->generatePlaceTypes();
        $this->generatePlaces();
        $this->generateTourThematics();
        $this->generateGuidedTours();

        $this->addPostsArchiveNavMenuItem('header_menu', 'Liste des lieux', 'place');

        // STEP ACL création des rôles
        $this->acl->createCustomerRole();
        $this->acl->createMemberRole();
    
    }

    public function deactivate()
    {
        $this->deletePostsArchiveNavMenuItem('header_menu', 'Liste des lieux');
        
        // à la désactivation du plugin, nous supprimons les rôles
        $this->acl->deleteCustomerRole(); 
        $this->acl->deleteMemberRole();
        
    }
}

<?php

namespace OPatrimoine;


// Classe de gestion des Roles et Capabilities (ACL)
class ACL
{
    public function __construct()
    {

    }

    // méthode de création du rôle "customer"
    public function createCustomerRole()
    {

        // STEP ACL création d'un rôle
        // DOC WP ACL add_role https://developer.wordpress.org/reference/functions/add_role/
        add_role(
            'customer',    // idenfiant du rôle
            'Client',   // Libéllé du rôle


            // Liste des "capabilities" (droits) accordés au rôle "customer"
            [                
                'create_posts' => true,

                'delete_guided-tours' => true,
                'delete_others_guided-tours' => true,
                'delete_others_places' => true,
                'delete_others_posts' => true,

                'delete_places' => true,
                'delete_posts' => true,

                'delete_private_guided-tours' => true,
                'delete_private_places' => true,
                'delete_private_posts' => true,
                
                'delete_published_guided-tours' => true,
                'delete_published_places' => true,
                'delete_published_posts' => true,

                'edit_guided-tours' => true,
                'edit_others_guided-tours' => true,
                'edit_others_places' => true,
                // 'edit_others_posts' => true,
                'edit_places' => true,
                'edit_posts' => true,
                'edit_private_guided-tours' => true,
                // 'edit_private_posts' => true,
                'edit_published_guided-tours' => true,
                'edit_published_places' => true,
                'edit_published_posts' => true,

                'publish_guided-tours' => true,
                'publish_places' => true,
                'publish_posts' => true, 
                
                'read_private_guided-tours' => true,
                'read_private_places' => true,
                'read_private_posts' => true, 
                
            ]
        ); 
    }

    public function deleteCustomerRole()
    {
        // STEP ACL suppression d'un rôle
        // DOC WP ACL remove_role https://developer.wordpress.org/reference/functions/remove_role/

        remove_role('customer');
    }



    // méthode de création du rôle "member"
    public function createMemberRole()
    {
        add_role(
            'member',
            'Membre',
            [   
                // 'create_users' => true,
                // 'delete_users' => true,
                // 'edit_users' => true,

                'create_posts' => true,        
                'edit_private_posts' => true,
                'publish_posts' => true,
                'read_private_posts' => true,                
                
                'delete_private_guided-tours' => true,
                'read_private_guided-tours' => true,
              
                // 'read_private_places' => true,

                
            ]
        );

    
    }


    public function deleteMemberRole()
    {
        remove_role('member');
    }


}

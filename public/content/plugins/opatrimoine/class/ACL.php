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
                'view_admin_as' => true,
                'view_admin_as_role_defaults' => true,
                
                'read' => true, // important to access to the wordpress dashboard (backoffice)
                'delete_others_pages' => true,
                'delete_pages' => true,
                'delete_private_pages' => true,
                'delete_published_pages' => true,
                'edit_others_pages' => true,
                'edit_pages' => true,
                'edit_private_pages' => true,
                'edit_published_pages' => true,
                'publish_pages' => true,
                'read_private_pages' => true,

                'delete_guided-tours' => true,
                'delete_others_guided-tours' => true,
                'delete_others_places' => true,
                'delete_others_posts' => true,

                'delete_places' => true,

                'delete_private_guided-tours' => true,
                'delete_private_places' => true,
                'delete_private_posts' => true,

                'delete_published_guided-tours' => true,
                'delete_published_places' => true,

                'edit_guided-tours' => true,
                'edit_others_guided-tours' => true,
                'edit_others_places' => true,
             
                'edit_places' => true,
                'edit_private_guided-tours' => true,
            
                'edit_published_guided-tours' => true,
                'edit_published_places' => true,

                'publish_guided-tours' => true,
                'publish_places' => true,
                
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

                'read_private_places' => true,        
                'read_private_guided-tours' => true,

                
            ]
        );

    
    }


    public function deleteMemberRole()
    {
        remove_role('member');
    }

    public function setAdministratorCaps()
    {
        $role = get_role('administrator');
        $role->add_cap('delete_guided-tours');
        $role->add_cap('delete_others_guided-tours');
        $role->add_cap('delete_private_guided-tours');
        $role->add_cap('delete_published_guided-tours');
        $role->add_cap('edit_guided-tours');
        $role->add_cap('edit_others_guided-tours');
        $role->add_cap('edit_private_guided-tours');
        $role->add_cap('edit_published_guided-tours');
        $role->add_cap('publish_guided-tours');
        $role->add_cap('read_private_guided-tours');

        $role->add_cap('delete_places');
        $role->add_cap('delete_others_places');
        $role->add_cap('delete_private_places');
        $role->add_cap('delete_published_places');
        $role->add_cap('edit_places');
        $role->add_cap('edit_others_places');
        $role->add_cap('edit_private_places');
        $role->add_cap('edit_published_places');
        $role->add_cap('publish_places');
        $role->add_cap('read_private_places');
    }
    
    public function removeAdministratorCaps()
    {
        $role = get_role('administrator');

        $role->remove_cap('delete_guided-tours');
        $role->remove_cap('delete_others_guided-tours');
        $role->remove_cap('delete_private_guided-tours');
        $role->remove_cap('delete_published_guided-tours');
        $role->remove_cap('edit_guided-tours');
        $role->remove_cap('edit_others_guided-tours');
        $role->remove_cap('edit_private_guided-tours');
        $role->remove_cap('edit_published_guided-tours');
        $role->remove_cap('publish_guided-tours');
        $role->remove_cap('read_private_guided-tours');

        $role->remove_cap('delete_places');
        $role->remove_cap('delete_others_places');
        $role->remove_cap('delete_private_places');
        $role->remove_cap('delete_published_places');
        $role->remove_cap('edit_places');
        $role->remove_cap('edit_others_places');
        $role->remove_cap('edit_private_places');
        $role->remove_cap('edit_published_places');
        $role->remove_cap('publish_places');
        $role->remove_cap('read_private_places');
    }
}

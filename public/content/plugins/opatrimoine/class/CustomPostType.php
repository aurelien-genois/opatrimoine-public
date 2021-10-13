<?php

namespace OPatrimoine;

class CustomPostType
{
    public $supports = [
        'title',
        'thumbnail',
        'editor',
        'author',
        'custom-fields',
        // NTH comments en évolution potentielle
        //'comments',
    ];

    public $identifier;
    public $label;
    public $icon;
    public $fields;
    public $hasArchive;

    public function __construct($identifier, $label, $icon, $fields, $hasArchive)
    {
        $this->identifier = $identifier;
        $this->label = $label;
        $this->icon = $icon;
        $this->fields = $fields;   
        $this->hasArchive = $hasArchive;   
    }

    public function register()
    {
        $result = register_post_type(
            $this->identifier,
            [
                'label' => $this->label,
                'show_in_rest' => true,
                'public' => true,
                'hierarchical' => false,
                'menu_icon' => $this->icon,
                'supports' => $this->supports,
                'has_archive' => $this->hasArchive,                
                // IMPORTANT WP ACL création de droits spécifique aux cpts
                // ACL : Access Control List                
                'capability_type' => $this->identifier,
                'map_meta_cap' => true,

            ],
        );
        
        flush_rewrite_rules();

        $this->addFieldsGroupToCPT($this->identifier, 'Informations complémentaires de ' . $this->label, $this->fields);

        return $result;
    }

    protected function addFieldsGroupToCPT($cptName, $groupLabel, array $fields)
    {
        $fieldsDescriptors = [];

        foreach($fields as $index => $data) {

            if(!array_key_exists('type', $data)) {
                $data['type'] = 'text';
            }
            if(!array_key_exists('readonly', $data)) {
                $data['readonly'] = 0;
            }

            if($data['type'] == 'post_object') {
                $fieldsDescriptors[] = $this->getFieldDescriptor(
                    $data['key'],
                    $data['label'],
                    $data['name'],
                    $data['type'],
                    $data['allow_null'],
                    $data['multiple'],
                    $data['return_format'],
                    $data['post_type'],
                );
            } else if($data['type'] == 'date_time_picker') {
                $fieldsDescriptors[] = $this->getFieldDescriptor(
                    $data['key'],
                    $data['label'],
                    $data['name'],
                    $data['type'],
                    'no',
                    'no',
                    $data['return_format'],
                    '',
                    $data['display_format'],
                    // $data['first_day'],
                );
            } else {
                $fieldsDescriptors[] = $this->getFieldDescriptor(
                    $data['key'],
                    $data['label'],
                    $data['name'],
                    $data['type'],
                    'no',
                    'no',
                    '',
                    '',
                    '',
                    $data['readonly'],
                );
            }
        }


        if(function_exists('acf_add_local_field_group')) {

            $groupName = $cptName . '-acf-fields';

            acf_add_local_field_group([
                'key' => $groupName,
                'title' => $groupLabel,
                'fields' => $fieldsDescriptors,
                'location' => [
                    [
                        [
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => $cptName,
                        ],
                    ],
                ],
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
            ]);
        }
    }

    protected function getFieldDescriptor($fieldKey, $fieldLabel, $fieldName, $fieldType = 'text', $fieldAllowNull = 'no', $fieldMultiple = 'no', $fieldReturnFormat = '', $fieldPostType = '', $fieldDisplayFormat = '', $fieldReadOnly = 0)
    {
        return [
            'key' => $fieldKey,
            'label' => $fieldLabel,
            'name' => $fieldName,
            'type' => $fieldType,
            'prefix' => '',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => ($fieldKey === 'totalreservations') ? 0 : '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => $fieldReadOnly,
            'disabled' => 0,
            // Additionnal keys for post_object field
            'allow_null' => $fieldAllowNull, 
            'multiple' => $fieldMultiple, 
            'return_format' => $fieldReturnFormat, 
            'post_type' => $fieldPostType,
            // Additionnal key for date_picker field
            'display_format' => $fieldDisplayFormat,
        ];
    }
}
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

    public function __construct($identifier, $label, $icon, $fields)
    {
        $this->identifier = $identifier;
        $this->label = $label;
        $this->icon = $icon;
        $this->fields = $fields;   
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
            } else {
                $fieldsDescriptors[] = $this->getFieldDescriptor(
                    $data['key'],
                    $data['label'],
                    $data['name'],
                    $data['type'],
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

    protected function getFieldDescriptor($fieldKey, $fieldLabel, $fieldName, $fieldType = 'text', $fieldAllowNull = 'no', $fieldMultiple = 'no', $fieldReturnFormat = '', $fieldPostType = '')
    {
        return [
            'key' => $fieldKey,
            'label' => $fieldLabel,
            'name' => $fieldName,
            'type' => $fieldType,
            'prefix' => '',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
            // Additionnal key for post_object field
            'allow_null' => $fieldAllowNull, 
            'multiple' => $fieldMultiple, 
            'return_format' => $fieldReturnFormat, 
            'post_type' => $fieldPostType,
        ];
    }
}
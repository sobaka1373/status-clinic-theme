<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_6347ceec88f04',
        'title' => 'Working time',
        'fields' => array(
            array(
                'key' => 'field_6347d90ba7bd9',
                'label' => 'time_table',
                'name' => 'time_table',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'day_name',
                        'label' => 'day_name',
                        'name' => 'day_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'date',
                        'label' => 'date',
                        'name' => 'date',
                        'type' => 'date_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'display_format' => 'd/m/Y',
                        'return_format' => 'd/m/Y',
                        'first_day' => 1,
                    ),
                    array(
                        'key' => 'start_time',
                        'label' => 'start_time',
                        'name' => 'start_time',
                        'type' => 'time_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'display_format' => 'H:i:s',
                        'return_format' => 'H:i:s',
                    ),
                    array(
                        'key' => 'end_time',
                        'label' => 'end_time',
                        'name' => 'end_time',
                        'type' => 'time_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'display_format' => 'H:i:s',
                        'return_format' => 'H:i:s',
                    ),
                    array(
                        'key' => 'day_off',
                        'label' => 'day off',
                        'name' => 'day_off',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 0,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'site-options',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

endif;
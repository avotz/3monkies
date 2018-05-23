<?php

function threemonkies_meta_boxes($meta_boxes)
{
    $prefix = 'rw_';

    $meta_boxes[] = array(
        'id' => 'additional',
        'title' => esc_html__('Additional Information', 'threemonkies'),
        'post_types' => array('product'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => false,
        'fields' => array(
            array(
                'id' => $prefix . 'details_1',
                'name' => esc_html__('Details 1', 'threemonkies'),
                'type' => 'wysiwyg',
                'desc' => esc_html__('Details 1', 'threemonkies'),
                'options' => array(
                    'textarea_rows' => 10,
                ),
            ),
            array(
                'id' => $prefix . 'details_2',
                'name' => esc_html__('Details 2', 'threemonkies'),
                'type' => 'wysiwyg',
                'desc' => esc_html__('Details 2', 'threemonkies'),
                'options' => array(
                    'textarea_rows' => 10,
                ),
            ),
            array(
                'id' => $prefix . 'wtb_icons',
                'name' => esc_html__('What To Bring Icons', 'threemonkies'),
                'type' => 'checkbox_list',
                'desc' => esc_html__('What To Bring Icons', 'threemonkies'),
                'inline' => true,
                'options' => array(
                    'hat' => 'Hat',
                    'sunglasses' => 'Sunglasses',
                    'camera' => 'Camera',
                    'sunscreen' => 'Sunscreen',
                    'sandals' => 'sandals',
                    'repelent' => 'repelent',
                    'binoculares' => 'binoculares',
                    'money' => 'money',
                    'hiking-boots' => 'Hiking boots',
                    'rain-gear' => 'Rain Gear',
                    'water-shoes' => 'Water shoes',
                    'swinsuit' => 'Swinsuit',
                    'water-camera' => 'Water camera',
                    'walking-shoes' => 'Walking shoes',
                    'clothes' => 'Clothes',
                    'towel' => 'Towel',
                    'long-pants' => 'Long pants',
                    'sneakers' => 'Sneakers',
                    'light-clothing' => 'Light clothing',
                    'passport' => 'Passport'

                ),
            ),
            array(
                'id' => $prefix . 'rates_regular',
                'name' => esc_html__('Rates Regular', 'threemonkies'),
                'type' => 'wysiwyg',
                'desc' => esc_html__('Rates Regular', 'threemonkies'),
                'options' => array(
                    'textarea_rows' => 10,
                ),
            ),
            array(
                'id' => $prefix . 'rates_private',
                'name' => esc_html__('Rates Private', 'threemonkies'),
                'type' => 'wysiwyg',
                'desc' => esc_html__('Rates Private', 'threemonkies'),
                'options' => array(
                    'textarea_rows' => 10,
                ),
            ),
            array(
                'id' => $prefix . 'video',
                'name' => 'Video',
                'type' => 'oembed',

                // Input size
                'size' => 30,
            )
        ),
    );

    $meta_boxes[] = array(
        'id' => 'day',
        'title' => esc_html__('Days Information', 'threemonkies'),
        'post_types' => array('product'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => false,
        'fields' => array(
            array(
                'id' => $prefix . 'days',
                'name' => esc_html__('Days', 'threemonkies'),
                'type' => 'wysiwyg',
                'desc' => esc_html__('Days', 'threemonkies'),
                'clone' => true,
                'options' => array(
                    'textarea_rows' => 5,
                ),
            ),
            array(
                'id' => $prefix . 'wtb_icons_days',
                'name' => esc_html__('What To Bring Icons', 'threemonkies'),
                'type' => 'checkbox_list',
                'desc' => esc_html__('What To Bring Icons', 'threemonkies'),
                'inline' => true,
                'clone' => true,
                'options' => array(
                    'hat' => 'Hat',
                    'sunglasses' => 'Sunglasses',
                    'camera' => 'Camera',
                    'sunscreen' => 'Sunscreen',
                    'sandals' => 'sandals',
                    'repelent' => 'repelent',
                    'binoculares' => 'binoculares',
                    'money' => 'money',
                    'hiking-boots' => 'Hiking boots',
                    'rain-gear' => 'Rain Gear',
                    'water-shoes' => 'Water shoes',
                    'swinsuit' => 'Swinsuit',
                    'water-camera' => 'Water camera',
                    'walking-shoes' => 'Walking shoes',
                    'clothes' => 'Clothes',
                    'towel' => 'Towel',
                    'long-pants' => 'Long pants',
                    'sneakers' => 'Sneakers',
                    'light-clothing' => 'Light clothing',
                    'passport' => 'Passport'

                ),
            ),
            
           
        ),
    );

    $meta_boxes[] = array(
        'id' => 'optional_info',
        'title' => esc_html__('Optional Info', 'threemonkies'),
        'post_types' => array('product'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => false,
        'fields' => array(
            array(
                'id' => $prefix . 'optional_info_title',
                'name' => esc_html__('Title Section', 'threemonkies'),
                'type' => 'text',
                'clone' => false,

            ),
            array(
                'type' => 'divider',
            ),
            array(
                'id' => $prefix . 'optional_info_item_title',
                'name' => esc_html__('Item Title', 'threemonkies'),
                'type' => 'text',
                'clone' => true,
                
            ),
            array(
                'id' => $prefix . 'optional_info_item_description',
                'name' => esc_html__('Item Description', 'threemonkies'),
                'type' => 'wysiwyg',
                'clone' => true,
               
            ),
            

        ),
    );


    return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'threemonkies_meta_boxes');
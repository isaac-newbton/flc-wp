<?php

if(function_exists('acf_add_local_field_group')) {

    add_action('acf/init', 'acf_setup');

    function acf_setup() {
        acf_add_local_field_group([
            'key' => 'group_homepage',
            'title' => 'Homepage Settings',
            'fields' => [
                [
                    'key' => 'field_header_content',
                    'label' => 'Header Content',
                    'name' => 'header_content',
                    'type' => 'wysiwyg'
                ],
                [
                    'key' => 'field_header_background',
                    'label' => 'Header Background',
                    'name' => 'header_background',
                    'type' => 'image',
                    'return_format' => 'url',
                    'preview_size' => 'large',
                ],
                [
                    'key' => 'field_callout_boxes_title',
                    'label' => 'Callout Boxes Title',
                    'name' => 'callout_boxes_title',
                    'type' => 'text'
                ],
                [
                    'key' => 'field_callout_boxes',
                    'label' => 'Callout Boxes',
                    'name' => 'callout_boxes',
                    'type' => 'repeater',
                    'sub_fields' => [
                        [
                            'key' => 'field_content',
                            'label' => 'Content',
                            'name' => 'content',
                            'type' => 'wysiwyg'
                        ],
                        [
                            'key' => 'field_button_text',
                            'label' => 'Button Text',
                            'name' => 'button_text',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'field_button_url',
                            'label' => 'Button URL',
                            'name' => 'button_url',
                            'type' => 'text',
                        ],
                    ],
                    'layout' => 'block'
                ],
                [
                    'key' => 'field_after_content_ctas',
                    'label' => 'After Content CTAs',
                    'name' => 'after_content_ctas',
                    'type' => 'repeater',
                    'sub_fields' => [
                        [
                            'key' => 'field_icon',
                            'label' => 'Icon',
                            'name' => 'icon',
                            'type' => 'image',
                            'return_format' => 'url',
                        ],
                        [
                            'key' => 'field_content',
                            'label' => 'Content',
                            'name' => 'content',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'field_button_text',
                            'label' => 'Button Text',
                            'name' => 'button_text',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'field_button_url',
                            'label' => 'Button URL',
                            'name' => 'button_url',
                            'type' => 'text',
                        ],
                    ],
                    'layout' => 'block',
                    'max' => 3,
                ],
                [
                    'key' => 'field_double_cta_section',
                    'label' => 'Double CTA Section',
                    'name' => 'double_cta_section',
                    'type' => 'repeater',
                    'sub_fields' => [
                        [
                            'key' => 'field_image',
                            'label' => 'Image',
                            'name' => 'image',
                            'type' => 'image',
                            'return_format' => 'url',
                        ],
                        [
                            'key' => 'field_title',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'wysiwyg',
                        ],
                        [
                            'key' => 'field_content',
                            'label' => 'Content',
                            'name' => 'content',
                            'type' => 'wysiwyg',
                        ],
                        [
                            'key' => 'field_button_text',
                            'label' => 'Button Text',
                            'name' => 'button_text',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'field_button_url',
                            'label' => 'Button URL',
                            'name' => 'button_url',
                            'type' => 'text',
                        ],
                    ],
                    'layout' => 'block',
                    'max' => 2,
                ],
                [
                    'key' => 'field_resources_title',
                    'label' => 'Resources Block Title',
                    'name' => 'resources_title',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_resources_intro_copy',
                    'label' => 'Resources Block Intro Copy',
                    'name' => 'resources_intro_copy',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_resources_button_text',
                    'label' => 'Resources Block Button Text',
                    'name' => 'resources_button_text',
                    'type' => 'text'
                ],
                [
                    'key' => 'field_resources_button_url',
                    'label' => 'Resources Block Button URL',
                    'name' => 'resources_button_url',
                    'type' => 'text'
                ],
                [
                    'key' => 'field_resources_items',
                    'label' => 'Resources Block Items',
                    'name' => 'resources_items',
                    'type' => 'repeater',
                    'sub_fields' => [
                        [
                            'key' => 'field_image',
                            'label' => 'Image',
                            'name' => 'image',
                            'type' => 'image',
                            'return_format' => 'url',
                        ],
                        [
                            'key' => 'field_title',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'field_button_text',
                            'label' => 'Button Text',
                            'name' => 'button_text',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'field_button_url',
                            'label' => 'Button URL',
                            'name' => 'button_url',
                            'type' => 'text',
                        ],
                    ],
                    'layout' => 'block',
                ],
                [
                    'key' => 'field_home_end_blocks',
                    'label' => 'Home End Blocks',
                    'name' => 'home_end_blocks',
                    'type' => 'repeater',
                    'sub_fields' => [
                        [
                            'key' => 'field_content',
                            'label' => 'Content',
                            'name' => 'content',
                            'type' => 'wysiwyg',
                        ]
                    ],
                    'layout' => 'block',
                    'max' => 2,
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'template-homepage.php',
                    ],
                ],
            ],
            'position' => 'acf_after_title',
        ]);
    }

}
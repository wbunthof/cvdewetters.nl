<?php
return [
    'file_library' => [
        'filesize_limit' => 10, //In MB
        'allowed_extensions' => ['pdf']
    ],
    'block_editor' => [
        'crops' => [
            'project_image' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 16 / 9
                    ]
                ]
            ],
            'past_project_image' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 16 / 9
                    ]
                ]
            ],
            'variable_image' => [
                'default' => [
                    [
                        'name' => 'default',
                        //no ratio means variable cropping
                    ]
                ]
            ]
        ],
        'blocks' => [
            'quote' => [
                'title' => 'Quote',
                'icon' => 'quote',
                'component' => 'a17-block-quote', //strict naming convention: a17-block-lowercase_name_for_block
                'rules' => [
                    'quote_text' => 'required'
                ]
            ],
            'paragraph' => [
                'title' => 'Paragraph',
                'icon' => 'text',
                'component' => 'a17-block-paragraph'
            ],
            'paragraph_image' => [
                'title' => 'Paragraph & Image',
                'icon' => 'image-text',
                'component' => 'a17-block-paragraph_image'
            ],
            'project_detail' => [
                'title' => 'Past Project Spotlight',
                'icon' => 'content-editor',
                'component' => 'a17-block-project_detail',
                'rules' => [
                    'project_title' => 'required',
                    'project_url' => 'required|url',
                    'project_description' => 'required'
                ]
            ]
        ]
    ]
];

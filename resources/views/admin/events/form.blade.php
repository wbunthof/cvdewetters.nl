@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Title',
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'headline',
        'label' => 'Headline',
        'maxlength' => 200
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 2000,
        'note' => 'Uitleg van het evenement',
        'toolbaroptions' => [
                ['header' => [2, 3, 4, 5, 6, false]],
                'bold',
                'italic',
                'underline',
                'strike',
                ["script" => "super"],
                ["script" => "sub"],
                "blockquote",
                "code-block",
                ['list' => 'ordered'],
                ['list' => 'bullet'],
                ['indent' => '-1'],
                ['indent' => '+1'],
                ["align" => []],
                ["direction" => "rtl"],
                'link',
                "clean",
            ]
    ])

    @formField('date_picker', [
    'name' => 'start_date',
    'label' => 'Begin evenement',
    ])

    @formField('date_picker', [
    'name' => 'eind_date',
    'label' => 'Eind evenement',
    ])
@stop

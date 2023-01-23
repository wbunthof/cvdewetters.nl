@extends('twill::layouts.form')

@section('contentFields')
    @formField('wysiwyg', [
    'name' => 'description',
    'label' => 'Beschrijving',
    'toolbarOptions' => [
      ['header' => [1, 2, 3, 4, 5, 6, false]],
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
    ],
    'placeholder' => 'Vul hier een pakkende tekst in.',
    'maxlength' => 200,
    'note' => 'Hint message',
])
    @formField('medias', [
    'name' => 'cover',
    'label' => 'Flyer'
])
@stop

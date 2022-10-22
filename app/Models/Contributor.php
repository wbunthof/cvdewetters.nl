<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Model;

class Contributor extends Model
{
    use HasBlocks, HasSlug, HasMedias, HasFiles;

    protected $fillable = [
        'name',
        'email',
        'twitter',
        'portfolio_link',
        'linkedin'];

    public $slugAttributes = ['name'];

    public $filesParams = ['resume'];

    public $mediasParams = [
        'avatar' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1
                ]
            ]
        ]
    ];
}

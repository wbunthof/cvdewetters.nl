<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\NestedModuleController as BaseModuleController;

class ProgrammaController extends BaseModuleController
{
    protected $moduleName = 'programmas';

    protected $indexOptions = [
        'reorder' => true,
    ];

    protected $showOnlyParentItemsInBrowsers = true;

    protected $nestedItemsDepth = 1;
}

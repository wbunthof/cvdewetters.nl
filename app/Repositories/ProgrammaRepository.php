<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleNesting;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Programma;

class ProgrammaRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias, HandleNesting;

    public function __construct(Programma $model)
    {
        $this->model = $model;
    }
}

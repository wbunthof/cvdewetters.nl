<?php

namespace App\Models\Slugs;

use A17\Twill\Models\Model;
use App\Models\Programma;

class ProgrammaSlug extends Model
{
    public function Programma()
    {
        return $this->belongsTo(Programma::class);
    }

    protected $table = "programma_slugs";
}

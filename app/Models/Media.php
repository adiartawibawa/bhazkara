<?php

namespace App\Models;

use Awcodes\Curator\Models\Media as ModelsMedia;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Media extends ModelsMedia
{
    use HasUuids;

    protected $table = 'media';
}

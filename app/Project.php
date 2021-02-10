<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function complete()
    {
        $this->complete = true;
        $this->save();
    }
}

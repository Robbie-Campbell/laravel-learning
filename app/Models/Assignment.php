<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function complete()
    {
        $this->completed = true;
        $this->save();
    }
    public function unfinished()
    {
        $this->completed = false;
        $this->save();
    }
}

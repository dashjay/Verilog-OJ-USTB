<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    public function setTagsAttribute($tags)
    {
        $this->attributes['tags'] = json_encode(explode(',', $tags));
    }

    public function getTagsAttribute($tags)
    {
        return json_decode($tags);
    }

}

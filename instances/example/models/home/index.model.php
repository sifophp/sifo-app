<?php

namespace Example;

use Sifo\Database\Model;

class HomeIndexModel extends Model
{
    public function getData()
    {
        return 'Some Lorem Ipsum data from a model.';
    }
}

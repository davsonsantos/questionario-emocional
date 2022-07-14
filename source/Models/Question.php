<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * [Class Question]
 * @package Source\Models
 */
class Question extends DataLayer
{

    public function __construct()
    {
        parent::__construct("questions", ["description"]);
    }


}

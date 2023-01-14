<?php

namespace App\Data;

use App\Entity\Lait;
use App\Entity\Pate;

class SearchData
{

    /**
     * @var int
     */
    public $page = 1;

    /**
     * @var string
     */
    public $q = '';

    /**
     * @var  Pate[]
     */
    public $pates = [];

    /**
     * @var  Lait[]
     */
    public $laits = [];

}
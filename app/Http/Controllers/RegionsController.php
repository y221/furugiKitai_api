<?php

namespace App\Http\Controllers;

use App\Models\Region;

class RegionsController extends Controller
{
    /**
     * @param Region $region
     */
    public function __construct(Region $region)
    {
        $this->region = $region;
    }

    public function index() {
        return $this->region->all();
    }
}

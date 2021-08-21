<?php

namespace App\Http\Controllers;

use App\Models\Area;

class AreasController extends Controller
{
    /**
     * @param Area $area
     */
    public function __construct(Area $area)
    {
        $this->area = $area;
    }

    public function index() {
        return $this->area->all();
    }
}

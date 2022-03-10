<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Prefecture;
use App\Http\Resources\Condition\PrefecturesGroupByRegionResource;
use App\Http\Resources\Condition\AreasGroupByPrefectureResource;

class ConditionsController extends Controller
{
    private $region;
    private $prefecture;

    /**
     * DI
     */
    public function __construct(Region $region, Prefecture $prefecture)
    {
        $this->region = $region;
        $this->prefecture = $prefecture;
    }

    public function prefectures()
    {
        return new PrefecturesGroupByRegionResource($this->region);
    }

    public function areas()
    {
        return new AreasGroupByPrefectureResource($this->prefecture);
    }
}

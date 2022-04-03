<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Prefecture;
use Illuminate\Http\Resources\Json\JsonResource;
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

    /**
     * 検索条件設定用のリスト取得
     * 
     * @return JsonResource
     */
    public function index() :JsonResource
    {
        return new JsonResource([
            'prefectures' => new PrefecturesGroupByRegionResource($this->region),
            'areas' => new AreasGroupByPrefectureResource($this->prefecture)
        ]);
    }
}

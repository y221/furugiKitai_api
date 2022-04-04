<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Shop;
use App\Models\Area;

class UpdateAreasShopCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updateAreasShopCount';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'エリアごとの店舗数更新';

    private $shop;
    private $area;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Shop $shop, Area $area)
    {
        parent::__construct();
        $this->shop = $shop;
        $this->area = $area;
    }

    /**
     * エリアごとの店舗数更新
     *
     * @return int
     */
    public function handle()
    {
        // 店舗カウント
        $areasShopCount = $this->shop->getAreasShopCount();
        foreach ($areasShopCount as $areaShopCount) {
            $this->area
                ->find($areaShopCount->id)
                ->fill($areaShopCount->toArray())
                ->save();
        }
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Shop;
use App\Models\Prefecture;

class UpdatePrefecturesShopCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updatePrefecturesShopCount';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '都道府県ごとの店舗数更新';

    private $shop;
    private $prefecture;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Shop $shop, Prefecture $prefecture)
    {
        parent::__construct();
        $this->shop = $shop;
        $this->prefecture = $prefecture;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // 店舗カウント
        $prefecturesShopCount = $this->shop->getPrefecturesShopCount();
        foreach ($prefecturesShopCount as $prefectureShopCount) {
            $this->prefecture
                ->find($prefectureShopCount->id)
                ->fill($prefectureShopCount->toArray())
                ->save();
        }
    }
}

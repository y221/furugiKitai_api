<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Shop;
use App\Infrastructure\Google\Geocode;

class UpdateMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updateMap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '緯度経度更新';

    private $shop;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Shop $shop)
    {
        parent::__construct();

        $this->shop = $shop;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $geocode = new Geocode;
        foreach ($this->shop->getMapEmptyShops() as $shop) {
            // 住所データ設定
            $shop->setLocation($geocode->fetchLocation($shop->makeAddress()));
            // 登録
            $shop->save();
        }
    }
}

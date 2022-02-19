<?php

namespace App\Infrastructure\Aws;

use Illuminate\Support\Facades\Storage;
use Exception;

/**
 * AWSのS3に関するクラス
 */
class S3
{
    private $bucket;
    private $region;

    public function __construct()
    {
        $this->bucket = env('AWS_BUCKET');
        $this->region = env('AWS_DEFAULT_REGION');
    }

    /**
     * TODO:ここの処理はユーザの画像処理とかも考慮したうえでやり方考えないといけなさそう
     * ファイルアップロード
     * 
     * @param object|string|null $image
     * @param string $saveDir
     * @param string $savedImage
     * 
     * @return string
     */
    public function uploadImage(object|string|null $image, string $saveDir, string $savedImage = '') : string
    {
        // ファイルがない場合空を返す
        if (empty($image)) {
            return '';
        }
        // 登録済み画像がポストされた画像と同じ場合
        if (!empty($savedImage) && $image === $savedImage) {
            return $savedImage;
        }

        // 念の為文字列判定かけておく
        if (is_string($image)) {
            return '';
        }

        // S3アップロードして取得
        try {
            // ファイル名を返す(フルパスはリソースクラスで作る)
            $savePath = Storage::disk('s3')->put($saveDir, $image, 'public');
        } catch(Exception $ex) {
            return '';
        }

        return $savePath;
    }

    /**
     * S3のパスを返す
     * 
     * @param string $dbSavedPath
     * 
     * @return string
     */
    public function getPath(string $dbSavedPath) :string
    {
        if (empty($dbSavedPath)) {
            return '';
        }
        return "https://{$this->bucket}.s3.{$this->region}.amazonaws.com/{$dbSavedPath}";
    }
}
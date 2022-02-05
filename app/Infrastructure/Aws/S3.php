<?php

namespace App\Infrastructure\Aws;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Exception;

/**
 * AWSのS3に関するクラス
 */
class S3
{
    public function __construct() {}

    /**
     * ファイルアップロード
     * 
     * @param string $imageColumn
     * @param string $saveDir
     * @param string $savedImage
     * 
     * @return string
     */
    public function uploadImage(Request $request, string $imageColumn, string $saveDir, string $savedImage = '') : string
    {
        // ファイル取得
        $image = $request->file($imageColumn) ?? $request->input($imageColumn);

        // ファイルがない場合空を返す
        if (empty($image)) {
            return '';
        }
        // 登録済み画像がポストされた画像と同じ場合
        if (!empty($savedImage) && $image === $savedImage) {
            return $savedImage;
        }
        // S3アップロードして取得
        try {
            $savePath = Storage::disk('s3')->put($saveDir, $image, 'public');
            $imagePath = Storage::disk('s3')->url($savePath);
        } catch(Exception $ex) {
            return '';
        }

        return $imagePath;
    }
}
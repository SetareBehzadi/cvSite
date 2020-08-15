<?php


namespace App\Classes\Common;


class Image
{
    public static function uploadImage($file, $destination, $prvImage=null) {

        $image = $prvImage;
        if (strlen($image)) {
            $image_path = public_path($destination) . '/' . $image;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }

        $fileNameHash = $file->hashName();
        $date = date("h_i_sa");
        $format = strtolower(strrchr($fileNameHash, '.'));
        $info = pathinfo($fileNameHash);
        $file_name = basename($fileNameHash, '.' . $info['extension']);
        $fileName = "$file_name" . "_" . "$date" . "$format";
        $file->move(public_path($destination), $fileName);

        return $fileName;


    }
}

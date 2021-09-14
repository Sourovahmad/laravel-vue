<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class testController extends Controller
{
    public function store(Request $request)
    {

        $extension = $request->file->getClientOriginalExtension();

        if($extension == 'zip'){
            $fileName = $request->file->getClientOriginalName();
            $path = $request->file->getPathName();
            $zip = new ZipArchive();
            if($zip->open($path) === true){

            // $folder = File::makeDirectory(public_path() . "/zip" . '/'. now(). $fileName , 0755 , true ,true);
            // $folder = Storage::disk('local')->makeDirectory(public_path() . "/zip" . '/' . now() . $fileName );

                $folder = storage_path(). '/zip' .'/';
                $zip->extractTo($folder);
                $zip->close();

                $allUploadedFiles = scandir($folder);

                return $allUploadedFiles;

                return "done";

            } else{
                "something wrong re upload";
            }

        } else {
            return "upload a zip file";
        }




        return "you have uploaded wrong" . $extension;

    }
}

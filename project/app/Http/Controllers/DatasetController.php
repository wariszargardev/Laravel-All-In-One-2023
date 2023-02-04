<?php

namespace App\Http\Controllers;

use App\Models\DataSet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use ZipArchive;

class DatasetController extends Controller
{
    public function extractUploadedZip(Request $request)
    {
        $code = Str::random(32);

        $path= 'app/public/'.$code;
        if ($request->hasFile('zip_file')) {
            $file = $request->file('zip_file');
            $file_path = $file->getRealPath();
            $zip = new ZipArchive;
            if ($zip->open($file_path) === TRUE) {
                $zip->extractTo(storage_path($path));
                $zip->close();
                $files = array_filter(scandir(storage_path($path)), function ($item) use ($path) {
                    return !is_dir(storage_path($path) . '/' . $item);
                });
                return $files;
            } else {
                dd('Failed to open the zip file');
            }
        }
    }

    public function readFromStorage(Request $request){
        $finalData=array();

        $encrypted_id= "OIpIZREiCAW6P6lALnF9LsBE6ntVlw6E";

        $path= 'app/public/OIpIZREiCAW6P6lALnF9LsBE6ntVlw6E/dataset.csv';
        $path= storage_path($path);
        $data = array_map('str_getcsv', file($path));

        unset($data[0]);

        foreach ($data as $item){
            $tempData= array();
            $tempData['image_name']= $item[1];
            $tempData['URL']= $item[2];
            $tempData['ml_service_name']= $item[3];
            $tempData['document_type']= $item[4];
            $tempData['created_date']= Carbon::parse($item[5])->format('Y-m-d');
            $tempData['project']= $item[6];
            $tempData['dataset_version']= $item[7];
            $tempData['tag']= $item[8];
            $tempData['laminated']= $item[9];
            $tempData['background']= $item[10];
            $tempData['card']= $item[11];
            $tempData['handwritten']= $item[12];
            $tempData['hologram']= $item[13];
            $tempData['gender']= $item[14];
            $tempData['device']= $item[15];
            $tempData['onsite']= $item[16];
            $tempData['training']= $item[17];
            $tempData['device_model']= $item[18];
            $tempData['angle']= $item[19];
            $tempData['update_row']= $item[20];
            $tempData['encrypted_id']= $encrypted_id;
            $finalData[]= $tempData;
        }

        DataSet::insert($finalData);
    }

    public function recordListing(){
        $data= DataSet::all();
        return $data;
    }
}

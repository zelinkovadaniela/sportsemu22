<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;
use Validator;
use App\Listing;
use App\Image;
use View;
use Storage;
use Session;
use Redirect;


class ImageUploadController extends Controller
{

    public function edit($id)
    {

        $listing = Listing::findOrFail($id);


        return view('imageupload.edit', compact('listing'));
    }


    //gives the possibility to upload the images to be displayed with the listings based on the listing_id
    //I will probably separate the functionality to two different functions


//    public function upload(Request $request)
//    {
//        $files = $request->file('image');
//
//        if (!empty($files)):
//
//            foreach ($files as $file):
//
//                Storage::put($file->getClientOriginalName(), file_get_contents($file));
//
//            endforeach;
//
//        endif;
//    }

    public function upload(Request $request, $listing_id)
    {
        $listing = Listing::findOrFail($id = $listing_id);
        $files = $request->file('file');
        // Making counting of uploaded images
        $file_count = count($files);
        // start count how many uploaded
        $uploadcount = 0;
        foreach($files as $file) {
            $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
            $validator = Validator::make(array('file'=> $file), $rules);
            if($validator->passes()){
                $destinationPath = 'uploads/listings/'.$listing_id;
                $filename = $file->getClientOriginalName();
                $upload_success = $file->move($destinationPath, $filename);
                $uploadcount ++;
                Image::create(array('path' => 'uploads/listings/'.$listing_id.'/' . $filename,
                       'listing_id' => $listing_id)); //Store info in DB
            }
        }
        if($uploadcount == $file_count){
            Session::flash('success', 'Images Uploaded Successfully');
            return Redirect::to('managelistings/');
        }
        else {
            return Redirect::to('managelistings/');
        }

//        $files = $request->file('image');
//
//            if (!empty($files)) {
//                foreach ($files as $file) {
//
//
//                    $filename = $file->getClientOriginalName(); //Get the name
//                    $upload_success = $file->move('uploads/listings/'.$listing_id, $filename); //Move file
//                    Image::create(array('path' => 'uploads/listings/' . $filename,
//                        'listing_id' => $listing_id)); //Store info in DB
//                }
//            }
//        $image = Image::find($listing_id);
//        $listing = Listing::findOrFail($id = $listing_id);
//        return redirect('managelistings.show', compact('image', 'listing'));
    }

}

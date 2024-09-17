<?php

namespace App\Services;
use App\Models\Image;
use Illuminate\Http\Request;
class ImageService
{
 public function upload(Request $request){
     if($request->hasFile('image_path')){
         foreach($request->file('image_path') as $image){
             Image::create([
                 'image_path' => $image->store('public/images'),
                 'name' => $request->name,
                 'property_id'=> $request->property_id
             ]);
         }
         return true;
     }else{
         return false;
     }
 }

 public function getIndexPictures($property_id){
     return  Image::where('property_id', $property_id)->first();
 }
}

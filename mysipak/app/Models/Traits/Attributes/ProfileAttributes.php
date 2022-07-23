<?php
namespace App\Models\Traits\Attributes;

use App\Models\Pegawai;
use Illuminate\Support\Str;


trait ProfileAttributes {

    function handleUploadprofile(){
        if(request()->hasFile('profile')){
            $profile = request()->file('profile');
            $destination = "image/profile";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$profile->extension();
            $url = $profile->storeAs($destination, $filename);
            $this->profile = "app/".$url;
            $this->save();
        }
    }
    
    function handleDelete(){
        $profile = $this->profile;
        $path = public_path($profile);
        if(file_exists($path)){
            unlink($path);
        }
        return true;
    }
}
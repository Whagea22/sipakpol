<?php

namespace App\Models\Admin\MasterData;

use Illuminate\Support\Str;
use App\Models\Model;

class Format extends Model
{
    protected $table = 'admin__formatsurat';

    // function handleUploadformat()
    // {
    //     if(request()->hasFile('file')) {
    //         $file = request()->file('file');
    //         $file_name = request()->file('file')->getClientOriginalName();
    //         $destination = "FormatSurat";
    //         $randomStr = Str::random(10);
    //         $filename = $file_name . "-".time()  . $randomStr . "."  . $file->extension();
    //         $url = $file->storeAs($destination, $filename);
    //         $this->file = "app/" . $url;
    //         $this->save();

    //     }
    // }

    function handleUploadformatword()
    {
        if(request()->hasFile('file_word')) {
            $file_word = request()->file('file_word');
            $file_name = request()->file('file_word')->getClientOriginalName();
            $destination = "FormatSuratWord";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $file_word->extension();
            $url = $file_word->storeAs($destination, $filename);
            $this->file_word = "app/" . $url;
            $this->save();

        }
    }
}

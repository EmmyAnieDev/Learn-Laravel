<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileStoreRequest;
use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    function index()
    {
        $files = FileUpload::all();

        return view('file-upload', ['files' => $files]);
    }

    function store(FileStoreRequest $request)
    {
        # save the uploaded file to the root directory of the local disk and returns the file path.
        //$file = $request->file('file')->store('/', 'local');

        # To store publicly  ====>> storage/public.
        $file = $request->file('file')->store('/', 'public');

        $filestore = new FileUpload();

        $filestore->file_path = $file;

        $filestore->save();

        dd('file saved in database!');
    }
}

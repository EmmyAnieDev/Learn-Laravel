<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    function index()
    {
        return view('file-upload');
    }

    function store(FileStoreRequest $request)
    {

        # ONE WAY TO UPLOAD A FILE.

        // save the uploaded file to the root directory of the local disk and returns the file path.
        $file = $request->file('file')->store('/', 'local');
        // To store publicly  ====>> storage/public.
        $file = $request->file('file')->store('/', 'public');


        # ANOTHER WAY TO UPLOAD A FILE.

        // save the uploaded file to the root directory of the local disk and returns the file path.
        $file = Storage::disk('local')->put('/', $request->file('file'));
        // To store publicly  ====>> storage/public.
        $file = Storage::disk('public')->put('/', $request->file('file'));

        dd($file);
    }
}

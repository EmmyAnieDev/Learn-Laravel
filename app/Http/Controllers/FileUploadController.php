<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileStoreRequest;
use App\Models\FileUpload;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUploadController extends Controller
{
    function index()
    {
        $files = FileUpload::all();

        return view('file-upload', ['files' => $files]);
    }

    function store(FileStoreRequest $request)
    {

        # Extract file extension
        $file = $request->file('file');
        $customName = 'laravel_'. Str::uuid();
        $ext = $file->getClientOriginalExtension();
        $fileName = "$customName.$ext";

        $path = $file->storeAs('/', $fileName, 'custom_public');

        $filestore = new FileUpload();

        $filestore->file_path = "/uploads/$path";

        $filestore->save();

        // return redirect()->back();
        return redirect()->route('home');
    }

    function download($fileName)
    {
        return Storage::disk('custom_public')->download($fileName);
    }

    function destroy($id)
    {
        $file = FileUpload::findOrFail($id);
        
        // Delete file from storage
        $filePath = str_replace('/uploads/', '', $file->file_path);
        Storage::disk('custom_public')->delete($filePath);
    
        // Delete from the database
        $file->delete();
    
        return redirect()->route('file.upload')->with('success', 'File deleted successfully!');
    }    


}

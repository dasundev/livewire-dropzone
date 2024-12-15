<?php

namespace Dasundev\LivewireDropzone\Http;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController
{
    public function uploadChunk(Request $request): void
    {
        $file = $request->file('file');
        $path = storage_path('app/livewire-tmp/'.$file->getClientOriginalName());

        Storage::put($path, file_get_contents($file->getRealPath()));
    }
}

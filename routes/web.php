<?php

use Dasundev\LivewireDropzone\Http\UploadController;
use Illuminate\Support\Facades\Route;

Route::post('upload-chunk', [UploadController::class, 'uploadChunk']);

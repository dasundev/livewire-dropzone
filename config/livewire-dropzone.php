<?php

return [

    /*
    |--------------------------------------------------------------------------------------------
    | Livewire Dropzone Chunk Size
    |--------------------------------------------------------------------------------------------
    |
    | The chunk size (in bytes) used for file uploads.
    |
    */

    'chunk_size' => env('LIVEWIRE_DROPZONE_CHUNK_SIZE', 1024 * 1024 * 5), // 5MB
];

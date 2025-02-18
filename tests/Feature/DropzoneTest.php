<?php

use Dasundev\LivewireDropzone\Http\Livewire\Dropzone;
use Illuminate\Http\UploadedFile;

it('renders successfully', function () {
    Livewire\Livewire::test(Dropzone::class)
        ->assertOk();
});

it('accepts and sets rules parameter correctly', function () {
    Livewire\Livewire::test(Dropzone::class, ['rules' => ['image,mimes:png,jpeg']])
        ->assertSet('rules', ['image,mimes:png,jpeg']);
});

it('accepts and sets multiple parameter correctly', function () {
    Livewire\Livewire::test(Dropzone::class, ['multiple' => true])
        ->assertSet('multiple', true);
});

it('can upload file', function () {
    $dropzone = Livewire\Livewire::test(Dropzone::class);

    $uuid = $dropzone->get('uuid');

    $dropzone
        ->set('upload', UploadedFile::fake()->image('foo.png'))
        ->assertDispatched("$uuid:fileAdded");
});

it('accepts and sets files parameter correctly', function () {
    $file1 = UploadedFile::fake()->image('file1.png');
    $file2 = UploadedFile::fake()->image('file2.jpg');

    $files = [
        [
            'name' => $file1->getClientOriginalName(),
            'path' => $file1->path(),
            'extension' => $file1->extension(),
            'temporaryUrl' => $file1->path(),
            'size' => $file1->getSize(),
            'tmpFilename' => $file1->getFilename(),
        ],
        [
            'name' => $file2->getClientOriginalName(),
            'path' => $file2->path(),
            'extension' => $file2->extension(),
            'temporaryUrl' => $file2->path(),
            'size' => $file2->getSize(),
            'tmpFilename' => $file2->getFilename(),
        ],
    ];

    Livewire\Livewire::test(Dropzone::class, ['files' => $files])
        ->assertSet('files', $files);
});

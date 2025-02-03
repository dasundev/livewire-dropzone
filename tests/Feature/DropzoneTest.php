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

it('can upload valid file', function () {
    $dropzone = Livewire\Livewire::test(Dropzone::class, [
        'rules' => ['mimes:pdf'],
    ]);

    $uuid = $dropzone->get('uuid');

    // valid chunk
    $chunk = 'foo.pdf.1.part';

    $dropzone
        ->set('chunk', UploadedFile::fake()->create($chunk))
        ->call('mergeChunks')
        ->assertDispatched("$uuid:fileAdded");
});

it('can not upload invalid file', function () {
    $dropzone = Livewire\Livewire::test(Dropzone::class, [
        'rules' => ['mimes:pdf'],
    ]);

    $uuid = $dropzone->get('uuid');

    // invalid chunk
    $chunk = 'foo.png.1.part';

    $dropzone
        ->set('chunk', UploadedFile::fake()->create($chunk))
        ->call('mergeChunks')
        ->assertNotDispatched("$uuid:fileAdded");
});

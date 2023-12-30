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

<?php

use Dasundev\LivewireDropzone\Http\Livewire\Dropzone;
use Illuminate\Http\UploadedFile;

it('renders successfully', function () {
    Livewire\Livewire::test(Dropzone::class, ['name' => 'foo'])
        ->assertOk();
});

it('accepts and sets rules parameter correctly', function () {
    Livewire\Livewire::test(Dropzone::class, ['name' => 'foo', 'rules' => ['image,mimes:png,jpeg']])
        ->assertSet('rules', ['image,mimes:png,jpeg']);
});

it('accepts and sets multiple parameter correctly', function () {
    Livewire\Livewire::test(Dropzone::class, ['name' => 'foo', 'multiple' => true])
        ->assertSet('multiple', true);
});

it('can upload file', function () {
    Livewire\Livewire::test(Dropzone::class, ['name' => 'foo'])
        ->set('upload', UploadedFile::fake()->image('foo.png'))
        ->assertDispatched('foo:fileAdded');
});

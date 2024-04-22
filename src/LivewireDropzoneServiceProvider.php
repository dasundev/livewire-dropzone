<?php

namespace Dasundev\LivewireDropzone;

use Dasundev\LivewireDropzone\Http\Livewire\Dropzone;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireDropzoneServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('livewire-dropzone')
            ->hasViews();
    }

    public function bootingPackage(): void
    {
        $this->registerLivewireComponent();
    }

    private function registerLivewireComponent(): void
    {
        Livewire::component('dropzone', Dropzone::class);
    }
}

<p align="center"><img src="./art/logo.svg" width="50%" alt="Livewire Dropzone"></p>

<p align="center"><img src="./art/dropzone.png" width="80%" alt="Livewire Dropzone"></p>

<a href="https://github.com/dasundev/livewire-dropzone/actions"><img src="https://github.com/dasundev/livewire-dropzone/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/dasundev/livewire-dropzone"><img src="https://img.shields.io/packagist/dt/dasundev/livewire-dropzone" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/dasundev/livewire-dropzone"><img src="https://img.shields.io/packagist/v/dasundev/livewire-dropzone" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/dasundev/livewire-dropzone"><img src="https://img.shields.io/packagist/l/dasundev/livewire-dropzone" alt="License"></a>

## Introduction
This dropzone component for Livewire enables easy drag-and-drop file uploads.

> [!IMPORTANT]
> To use this package, you must have [Livewire 3](https://livewire.laravel.com/) installed.

## Installation

You can install the package via Composer:
```bash
composer require dasundev/livewire-dropzone
```

To install the styles package, use the following command:
```bash
npm i @dasundev/livewire-dropzone-styles
```

Import styles to your project:
```scss
/* resources/css/app.css */

@import "@dasundev/livewire-dropzone-styles";
```

## Usage

```html
<livewire:dropzone
        wire:model="banners"
        :rules="['image','mimes:png,jpeg','max:10420']"
        :multiple="true" />
```

> [!IMPORTANT]
> If you're using more than one dropzone component on the same page, make sure to include `wire:key` in the opening tag like this:

```html
<!-- Dropzone 1 -->
<livewire:dropzone
        wire:model="thumbnail"
        :rules="['image','mimes:png,jpeg','max:10420']"
        :key="'dropzone-one'" />

<!-- Dropzone 2 -->
<livewire:dropzone
        wire:model="files"
        :rules="['mimes:pdf,pptx,zip']"
        :multiple="true"
        :key="'dropzone-two'" />
```

> [!CAUTION]
> The Livewire dropzone component uploads files to Livewire's [temporary upload directory](https://livewire.laravel.com/docs/uploads#temporary-upload-directory). To permanently store them, manual action is required. This is where `wire:model` becomes essential. For example, take the `banners` model, which contains each upload as an array containing file paths. You can iterate through this array and store the files according to your preferences. If you need additional support [this](https://www.dasun.dev/blog/how-to-use-livewire-dropzone) article may helpful.

## Customize

The dropzone component is entirely customizable. Just publish the view file and make it your own.
```bash
php artisan vendor:publish --tag=livewire-dropzone-views
```

## Themes
Interested in Livewire Dropzone Themes? Please fill out [this](https://forms.gle/bact2NhZkDUXu9Hk6) form to let us know your preferences for paid and free themes and provide any feedback you may have.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

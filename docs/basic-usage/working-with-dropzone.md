---
title: Working with dropzone
weight: 1
---

# Working with dropzone

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

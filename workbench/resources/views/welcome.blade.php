<form wire:submit="submit" class="w-full">
    <livewire:dropzone
            wire:model="files"
            :rules="['mimes:png,jpeg,avi','max:10420']"
            :multiple="true" />
</form>
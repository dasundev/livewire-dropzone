<form wire:submit="submit" class="w-full">
    <livewire:dropzone
            wire:model="photos"
            :rules="['image','mimes:png,jpeg','max:10420']"
            :multiple="true" />
</form>
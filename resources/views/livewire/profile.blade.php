<div>
    <livewire:navigation>
    <div class="mx-32 py-6 text-2xl">
        <div class="text-5xl font-bold">
            Profile
        </div>
        <div class="flex gap-10 w-full my-7">
            <div class="w-full">
                <div class="my-3">
                    First Name
                </div>
                <input type="text" wire:model="firstname" class="w-full h-16 rounded-xl">
            </div>
            <div class="w-full">
                <div class="my-3">
                Last Name
                </div>
                <input type="text" wire:model="lastname" class="w-full h-16 rounded-xl">
            </div>
        </div>
        <div class="w-full my-7">
            <div class="my-3">
            Email
            </div>
            <input type="text" wire:model="email" class="w-full h-16 rounded-xl">
        </div>
        <div class="w-full my-7">
            <div class="my-3">
            Gender
            </div>
            <select wire:model="gender" class="w-full h-16 rounded-xl form-select px-5">
                <option selected>None</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="w-full my-7">
            <div class="my-3">
            Phone Number
            </div>
            <input wire:model="phone" type="text" class="w-full h-16 rounded-xl">
        </div>
        <button wire:click.prevent="update" class="w-1/2 button-orange text-white font-bold h-16 rounded-full my-24">
            Update Profile
        </button>
    </div>
    
</div>

<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif  
        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- profile_photo_path -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="profile_photo_path" value="{{ __('Profile Photo') }}" />
            <x-jet-input id="profile_photo_path" type="text" class="mt-1 block w-full" wire:model.defer="state.profile_photo_path" />
            <x-jet-input-error for="profile_photo_path" class="mt-2" />
        </div>

        <!-- introduce_myself -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="introduce_myself" value="{{ __('introduce_myself') }}" />
            <x-jet-input id="introduce_myself" type="text" class="mt-1 block w-full" wire:model.defer="state.introduce_myself" />
            <x-jet-input-error for="introduce_myself" class="mt-2" />
        </div>

        <!-- language -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="language" value="{{ __('language') }}" />
            <x-jet-input id="language" type="text" class="mt-1 block w-full" wire:model.defer="state.language" />
            <x-jet-input-error for="language" class="mt-2" />
        </div>

        <!-- helper_language -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="helper_language" value="{{ __('helper_language') }}" />
            <x-jet-input id="helper_language" type="text" class="mt-1 block w-full" wire:model.defer="state.helper_language" />
            <x-jet-input-error for="helper_language" class="mt-2" />
        </div>
        
        <!-- vitriungtuyen -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="vitriungtuyen" value="{{ __('vitriungtuyen') }}" />
            <x-jet-input id="vitriungtuyen" type="text" class="mt-1 block w-full" wire:model.defer="state.vitriungtuyen" />
            <x-jet-input-error for="vitriungtuyen" class="mt-2" />
        </div>

        <!-- hedieuhanh -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="hedieuhanh" value="{{ __('hedieuhanh') }}" />
            <x-jet-input id="hedieuhanh" type="text" class="mt-1 block w-full" wire:model.defer="state.hedieuhanh" />
            <x-jet-input-error for="hedieuhanh" class="mt-2" />
        </div>

        <!-- tool -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="tool" value="{{ __('tool') }}" />
            <x-jet-input id="tool" type="text" class="mt-1 block w-full" wire:model.defer="state.tool" />
            <x-jet-input-error for="tool" class="mt-2" />
        </div>

        <!-- git -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="git" value="{{ __('git') }}" />
            <x-jet-input id="git" type="text" class="mt-1 block w-full" wire:model.defer="state.git" />
            <x-jet-input-error for="git" class="mt-2" />
        </div>

        <!-- facebook -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="facebook" value="{{ __('facebook') }}" />
            <x-jet-input id="facebook" type="text" class="mt-1 block w-full" wire:model.defer="state.facebook" />
            <x-jet-input-error for="facebook" class="mt-2" />
        </div>

        <!-- blog -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="blog" value="{{ __('blog') }}" />
            <x-jet-input id="blog" type="text" class="mt-1 block w-full" wire:model.defer="state.blog" />
            <x-jet-input-error for="blog" class="mt-2" />
        </div>

        <!-- youtube -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="youtube" value="{{ __('youtube') }}" />
            <x-jet-input id="youtube" type="text" class="mt-1 block w-full" wire:model.defer="state.youtube" />
            <x-jet-input-error for="youtube" class="mt-2" />
        </div>

        <!-- zalo -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="zalo" value="{{ __('zalo') }}" />
            <x-jet-input id="zalo" type="text" class="mt-1 block w-full" wire:model.defer="state.zalo" />
            <x-jet-input-error for="zalo" class="mt-2" />
        </div>

        <!-- phone -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="phone" value="{{ __('phone') }}" />
            <x-jet-input id="phone" type="text" class="mt-1 block w-full" wire:model.defer="state.phone" />
            <x-jet-input-error for="phone" class="mt-2" />
        </div>

        <!-- address -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="address" value="{{ __('address') }}" />
            <x-jet-input id="address" type="text" class="mt-1 block w-full" wire:model.defer="state.address" />
            <x-jet-input-error for="address" class="mt-2" />
        </div>
        
        <!-- muctieu_nghenghiep -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="muctieu_nghenghiep" value="{{ __('muctieu_nghenghiep') }}" />
            <x-jet-input id="muctieu_nghenghiep" type="text" class="mt-1 block w-full" wire:model.defer="state.muctieu_nghenghiep" />
            <x-jet-input-error for="muctieu_nghenghiep" class="mt-2" />
        </div>

        <!-- hocvan -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="hocvan" value="{{ __('hocvan') }}" />
            <x-jet-input id="hocvan" type="text" class="mt-1 block w-full" wire:model.defer="state.hocvan" />
            <x-jet-input-error for="hocvan" class="mt-2" />
        </div>

        <!-- kinhnghiem_lamviec -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="kinhnghiem_lamviec" value="{{ __('kinhnghiem_lamviec') }}" />
            <x-jet-input id="kinhnghiem_lamviec" type="text" class="mt-1 block w-full" wire:model.defer="state.kinhnghiem_lamviec" />
            <x-jet-input-error for="kinhnghiem_lamviec" class="mt-2" />
        </div>

        <!-- cac_du_an_canhan -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="cac_du_an_canhan" value="{{ __('cac_du_an_canhan') }}" />
            <x-jet-input id="cac_du_an_canhan" type="text" class="mt-1 block w-full" wire:model.defer="state.cac_du_an_canhan" />
            <x-jet-input-error for="cac_du_an_canhan" class="mt-2" />
        </div>

        <!-- ky_nang_chuyen_mon -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="ky_nang_chuyen_mon" value="{{ __('ky_nang_chuyen_mon') }}" />
            <x-jet-input id="ky_nang_chuyen_mon" type="text" class="mt-1 block w-full" wire:model.defer="state.ky_nang_chuyen_mon" />
            <x-jet-input-error for="ky_nang_chuyen_mon" class="mt-2" />
        </div>

        <!-- mot_so_thong_tin_khac -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="mot_so_thong_tin_khac" value="{{ __('mot_so_thong_tin_khac') }}" />
            <x-jet-input id="mot_so_thong_tin_khac" type="text" class="mt-1 block w-full" wire:model.defer="state.mot_so_thong_tin_khac" />
            <x-jet-input-error for="mot_so_thong_tin_khac" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>

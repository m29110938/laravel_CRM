<x-layout>
    <div class="my-3 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
            <div class="my-3">
                <form action="/user/{{ $user->id }}" method="post">
                    @csrf
                    @method('PATCH')

                    <x-form.input title="名稱" name="name" type="text" autocomplete="" required
                        value="{{ $user->name }}" />
                    <x-form.input title="電子信箱" name="email" type="text" autocomplete="" required
                        value="{{ $user->email }}" />
                    <x-primary-button>{{ __('更新') }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>

    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
            <div class="my-3">

                <form action="/user/{{ $user->id }}/password" method="post">
                    {{-- <form action="{{ route('password.update') }}" method="post"> --}}
                    @csrf
                    @method('PATCH')

                    <x-form.input title="現在密碼" name="current_password" type="password" autocomplete="" required />
                    <x-form.input title="新密碼" name="password" type="password" autocomplete="" required />
                    <x-form.input title="確認密碼" name="password_confirmation" type="password" autocomplete=""
                        required />
                    <x-primary-button>{{ __('更新密碼') }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>

    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
            <div class="my-3">
                <x-danger-button x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('刪除帳號') }}
                </x-danger-button>

                <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                        @csrf
                        @method('delete')

                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Are you sure you want to delete your account?') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>

                        <div class="mt-6">
                            <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                            <x-text-input id="password" name="password" type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Password') }}" />

                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                        </div>

                        <div class="mt-6 flex justify-end">
                            <x-secondary-button x-on:click="$dispatch('close')">
                                {{ __('Cancel') }}
                            </x-secondary-button>

                            <x-danger-button class="ml-3">
                                {{ __('Delete Account') }}
                            </x-danger-button>
                        </div>
                    </form>
                </x-modal>
            </div>
        </div>
    </div>
</x-layout>

<x-layout>
    <div class="my-3 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
            <div class="my-3">
                <form action="/user/create" method="post">
                    @csrf
                    <x-form.input title="名稱" name="name" type="text" autocomplete="" required />
                    <x-form.input title="電子信箱" name="email" type="text" autocomplete="" required />
                    <x-form.input title="密碼" name="password" type="password" autocomplete="" required />
                    <x-form.input title="確認密碼" name="password_confirmation" type="password" autocomplete=""
                        required />
                    <x-primary-button>{{ __('註冊') }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

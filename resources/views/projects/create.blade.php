<x-layout>
    <div class="my-3 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
            <div class="my-3">
                <form action="/project/create" method="post">
                    @csrf
                    <x-form.input title="標題" name="title" type="text" autocomplete="" required />
                    <x-form.textarea title="內容" name="body" type="text" autocomplete="" required />
                    <x-primary-button>{{ __('送出') }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

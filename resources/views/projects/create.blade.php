<x-layout>
    <div class="my-3">
        <form action="/project/create" method="post">
            @csrf
            <x-form.input title="標題" name="title" type="text" autocomplete="" required />
            <x-form.textarea title="內容" name="body" type="text" autocomplete="" required />
            <button type="submit" class="btn">送出</button>
        </form>
    </div>
</x-layout>

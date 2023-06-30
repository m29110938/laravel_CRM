<x-layout>
    <div class="my-3">
        <form action="/project/{{ $project->id }}" method="post">
            @csrf
            @method('PATCH')

            <x-form.input title="標題" name="title" type="text" autocomplete="" required
                value="{{ $project->title }}" />
            <x-form.textarea title="內容" name="body" type="text" autocomplete="" required>{{ $project->body }}
            </x-form.textarea>
            <button type="submit" class="btn">更新</button>
        </form>
    </div>
</x-layout>

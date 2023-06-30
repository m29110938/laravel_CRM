<x-layout>
    <div>
        <a type="button" href="/project/create" class="btn btn-success">建立新專案</a>
    </div>
    <div class="my-3">

        @if ($projects->count())
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>名稱</th>
                        <th>內容</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->body }}</td>
                            <td>
                                <div class="d-flex justify-content-end">
                                    <a type="button" href="/project/{{ $project->id }}/edit"
                                        class="btn btn-primary">編輯</a>
                                    <form method="POST" action="/project/{{ $project->id }}">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger mx-0.5">刪除</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>沒有資料</p>
        @endif
    </div>
</x-layout>

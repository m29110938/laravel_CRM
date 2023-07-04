<x-layout>
    <div class="my-3">
        <a type="button" href="/user/create" class="btn btn-success">建立新帳號</a>

        @if ($users->count())
            <table class="table table-hover my-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>名稱</th>
                        <th>電子信箱</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="d-flex justify-content-end">
                                    <a type="button" href="/user/{{ $user->id }}/edit" class="btn btn-primary">編輯</a>
                                    {{-- <form method="POST" action="/user/{{ $user->id }}">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger mx-0.5">刪除</button>
                                    </form> --}}
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

<div class="sidebar">
    <!-- 側邊欄內容 -->
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="/">CRM</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/project">專案</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/member">會員管理</a>
        </li>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                this.closest('form').submit();">登出</a>
            </li>
        </form>
    </ul>
</div>

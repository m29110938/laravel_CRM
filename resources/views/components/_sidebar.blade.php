<!-- 側邊欄內容 -->
<ul class="flex-grow-1">
    <!-- 使用flex-grow-1使其占据剩余空间 -->
    <div class="">
        <li class="nav-item text-center" style="background-color: #323C52">
            <a class="nav-link" style="color:#9FA5B1" href="http://localhost:8000/project">CRM</a>
        </li>
        <div class="my-3">
            <li class="nav-item">

                <a class="nav-link" style="color:#9FA5B1" href="http://localhost:8000/project"><i
                        class="fa-solid fa-paste"></i>專案</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:#9FA5B1" href="http://localhost:8000/user">會員管理</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" style="color:#9FA5B1" href="/profile">修改該會員資料</a>
            </li> --}}
        </div>
    </div>
</ul>

<ul>
    <div class="my-3">
        <form method="POST" action="/logout">
            @csrf
            <li class="nav-item">
                <a class="nav-link" style="color:#9FA5B1"
                    onclick="event.preventDefault(); this.closest('form').submit();">登出</a>
            </li>
        </form>
    </div>
</ul>

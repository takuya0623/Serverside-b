
    <h1>文字列投稿フォーム</h1>
    <form action="{{ route('post.store') }}" method="POST">
    @csrf
        <div>
        文字列入力欄：
            <input name="word">
            <button>送信</button>
        </div>
    </form>
    <a href="{{ route('post.index') }}">文字列一覧へ</a>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="ログアウト">
</form>




    <h1>文字列一覧</h1>
<table border="1">
    <tr>
        <th>words</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->word }}</td>
    </tr>
    @endforeach
</table>
<a href="{{ route('post.create') }}">文字列の登録フォーム</a>

<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="ログアウト">
</form>


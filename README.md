<h1>サーバーサイドB問題</h1>
<h2>使い方(ページ)</h2><br>
<h3>TOP画面(http://localhost/)</h3>
・ログインする<br>
<br><h3>ログイン(http://localhost/login)</h3>
・ログインする<br>
<br><h3>新規登録(http://localhost/register)</h3>
・ユーザー登録する<br>
<br><h3>文字列一覧ページ（http://localhost/index）</h3>
・文字列を一覧表示させる<br>
・非ログインユーザーがURLを叩いても表示可能<br>

<br><h3>文字列投稿フォームページ</h3>
・入力された文字列をデータベースに保存<br>
・非ログインユーザーがURLを叩くとログインページへ遷移<br>
<br><h3>ログアウトボタン</h3>
・ログアウトする<br>

<br><h2>開発環境</h2>
・Laravel Sail（Docker Desktop）<br>
<br><h2>データベース</h2>
・My SQL<br>
・phpMyAdmin(http://localhost:8080)<br>
<br><h2>ログイン関係</h2>
・Laravel UI

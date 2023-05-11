@if (Auth::check())
    {{-- ユーザ一覧ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('users.index') }}">Users</a></li>
    {{-- ユーザ詳細ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('users.show', Auth::user()->id) }}">{{ Auth::user()->name }}&#39;s profile</a></li>
    <li class="divider lg:hidden"></li>
    {{-- フォロー一覧ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('users.followings', $user->id) }}">Followings</a></li>
    {{-- フォロワー一覧ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('users.followers',$user->id) }}">Followers</a></li>
    {{-- お気に入り一覧ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('users.favorites',$user->id) }}">Favorites</a></li>
    {{-- ログアウトへのリンク --}}
    <li><a class="link link-hover" href="#" onclick="event.preventDefault();this.closest('form').submit();">Logout</a></li>
@else
    {{-- ユーザ登録ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('register') }}">Signup</a></li>
    <li class="divider lg:hidden"></li>
    {{-- ログインページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('login') }}">Login</a></li>
@endif

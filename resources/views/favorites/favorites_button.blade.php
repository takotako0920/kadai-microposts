 @if (Auth::user()->is_favorite($micropost->id))
    {{-- unfavoriteボタンのフォーム --}}
    <form method="POST" action="{{ route('favorites.unfavorite', $micropost->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-info btn-sm normal-case" 
            onclick="return confirm('id = {{ $micropost->id }} のお気に入りを外します。よろしいですか？')">Unfavorite</button>
    </form>
@else
    {{-- フォローボタンのフォーム --}}
    <form method="POST" action="{{ route('favorites.favorite', $micropost->id) }}">
        @csrf
        <button type="submit" class="btn btn-outline btn-info btn-sm normal-case">Favorite</button>
    </form>
@endif
   

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * マイクロポストをfavoriteするアクション。
     *
     * @param  $id  マイクロポストのid
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのマイクロポストをfavoriteする
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * マイクロポストをunfavoriteするアクション。
     *
     * @param  $id  マイクロポストのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのマイクロポストをunfavoriteする
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
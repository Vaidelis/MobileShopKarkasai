<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;

class MobileController extends Controller
{
    public function phones()
    {
        if(!Auth::check()){
            $posts = Mobile::paginate(2)->take(2);
        }

        else {
            $posts = Mobile::paginate(2);
        }
        //dd($posts);
        return view('phones', compact('posts'));
    }
    public function show($id)
    {
        $bookinfo = Mobile::find($id);
        return view('show', compact('bookinfo'));
    }
    public function create()
    {
        return view('postcreate');
    }
    public function store(Request $request)
    {
        $post = new Mobile;
        $post->brand = $request->get('brand');
        $post->model = $request->get('model');
        $post->screensize = $request->get('screensize');
        $post->ramsize = $request->get('ramsize');
        $post->storagesize = $request->get('storagesize');
        $post->color = $request->get('color');
        $post->price = $request->get('price');
        $post->year = $request->get('year');
        $post->user_id = Auth::user()->id;
        $post->save();
        return redirect()->route('posts');

    }

    public function searchview()
    {
        return view('search');
    }
    public function search(Request $request){

        $search_text = $request->input('brand');
        if($search_text == '/'){
            $search_text = null;
        }
        else{
            $search_text = substr($search_text, 0, -1);
        }
        Session::put('brandsearch', $search_text);
        $search_text1 = $request->input('model');
        if($search_text1 == '/'){
            $search_text1 = null;
        }
        Session::put('modelsearch', $search_text1);
        $search_text2 = $request->input('screensize');
        if($search_text2 == '/'){
            $search_text2 = null;
        }
        Session::put('screensearch', $search_text2);
        $search_text3 = $request->input('ramsize');
        if($search_text3 == '/'){
            $search_text3 = null;
        }
        Session::put('ramsearch', $search_text3);
        $search_text4 = $request->input('color');
        if($search_text4 == '/'){
            $search_text4 = null;
        }
        Session::put('minsearch', $search_text4);
        $search_text5 = $request->input('color1');
        if($search_text5 == '/'){
            $search_text5 = null;
        }
        Session::put('maxsearch', $search_text5);

        $possible = 0;
        if(Bookmark::where(['brand' => $search_text, 'model' => $search_text1, 'screensize' => $search_text2, 'ramsize' => $search_text3, 'pricemin' => $search_text4
                , 'pricemax' => $search_text5, 'user_id' => Auth::user()->id])->count() > 0)
        {
            $possible++;
        }




        $query = Mobile::when($search_text, function ($q) use ($search_text) {
            return $q->where('brand', 'like', '%'.$search_text.'%');
        })
            ->when($search_text1, function ($q) use ($search_text1) {
                return $q->where('model', $search_text1);
            })
            ->when($search_text2, function ($q) use ($search_text2) {
                return $q->where('screensize', $search_text2);
            })
            ->when($search_text3, function ($q) use ($search_text3) {
                return $q->where('ramsize', 'like', '%'.$search_text3.'%');
            })
            ->when($search_text4, function ($q) use ($search_text4) {
                return $q->where('price', '>=', $search_text4);
            })
            ->when($search_text5, function ($q) use ($search_text5) {
                return $q->where('price', '<=',$search_text5);
            })
            ->paginate(4);
        return view('bookmarksearch', compact('query', 'possible'));
    }
    public function bookmark(Request $request){

        $brandsearch = Session::get('brandsearch');
        $modelsearch = Session::get('modelsearch');
        $screensearch = Session::get('screensearch');
        $ramsearch = Session::get('ramsearch');
        $minsearch = Session::get('minsearch');
        $maxsearch = Session::get('maxsearch');
        $bookmark = new Bookmark;
        $bookmark->bookmarkname = $request->input('bookmarkn');
        $bookmark->brand = $brandsearch;
        $bookmark->model = $modelsearch;
        $bookmark->screensize = $screensearch;
        $bookmark->ramsize = $ramsearch;
        $bookmark->pricemin = $minsearch;
        $bookmark->pricemax = $maxsearch;
        $bookmark->user_id = Auth::user()->id;
        $bookmark->save();
        $bookssh = Bookmark::all();

        return view('bookmarks', compact('bookssh'));
    }
    public function mobiledelete($id){
        $mobile = Mobile::find($id);
        $mobile->delete();
        return redirect()->route('posts')->with('status', 'Skelbimas sėkmingai ištrintas');
    }
}

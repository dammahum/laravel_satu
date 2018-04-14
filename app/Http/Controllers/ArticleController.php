<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function article_list()
    {
        $no = 1;
        $article = Article::orderBy('id', 'desc');
        return view('article.index', compact('article'));
    }
    
    public function article_insert(Request $request)
    {
        $request->validate([
           'title' => 'required|min:5',
           'content' => 'required',
           'title' => 'required',
        ]);
        
        $request->merge([
           'title'=> title_case($request->title)
        ]);
        
        Article::create($request->all());
        
        return redirect('article')->with('article','article berhasil Ditambahkan');
    }
    
    public function article_create()
    {
        return view('article.create');
    }
    
    public function article_update()
    {
        $request->merge([
            'title' => title_case($request->name)
        ]);
        
        Article::find($request->id)->update($request->all());
        return redirect('article')->with('article','Data article berhasil diperbarui');
    }
    
    public function article_edit($id)
    {
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }
    
    public function article_detail($id)
    {
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }
    
    public function article_delete()
    {
        Article::findOrFail($id)->delete();
        return redirect('article')->with('article','Data article berhasil dihapus');
    }
    
}

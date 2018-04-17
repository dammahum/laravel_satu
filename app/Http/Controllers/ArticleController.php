<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function article_list()
    {        
        $article = Article::orderBy('id', 'desc')->get();
        return view('article.index', compact('article'));
    }
    
    public function article_insert(Request $request)
    {
        $request->validate([
           'title' => 'required|min:10',
           'content' => 'required'           
        ]);
        
        $request->merge([
           'title'=> title_case($request->title)
        ]);
        
        Article::create($request->all());
        
        return redirect('article')->with('article','Article berhasil Ditambahkan');
    }
    
    public function article_create()
    {
        return view('article.create');
    }
    
    public function article_update(Request $request)
    {                
        $request->validate([
           'title' => 'required|min:10',
           'content' => 'required'           
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
        return view('article.show', compact('article'));
    }
    
    public function article_delete($id)
    {
        Article::findOrFail($id)->delete();
        return redirect('article')->with('article','Data article berhasil dihapus');
    }
    
}

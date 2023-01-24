<?php

namespace Application\Controllers;

use Application\Model\Category;
use Application\Model\Article;


class Home extends Controller{


    public function index()
    {
        $category = new category();
        $categories = $category->all();
        $article = new Article();
        $articles = $article->all();
        return $this->View('app.index' , compact('categories','articles'));
    }

    public function category($id)
    {
        $ob_category = new category();
        $categories = $ob_category->all();
        $ob_category = new category();
        $category = $ob_category->find($id);
        $ob_category = new category();
        $articles = $ob_category->articles($id);
        return $this->View('app.category' , compact('categories','articles','category'));
    }

    public function show($id)
    {
        $category = new Category();
        $categories = $category->all();
        $article = new Article();
        $article = $article->find($id);
        return $this->view('app.show' , compact('categories' , 'article'));
    }

}

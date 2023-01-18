<?php

namespace Application\Controllers;

use Application\Model\Category as CategoryModel;

class Category extends Controller
{
    public function index()
    {
        $category = new CategoryModel();
        $categories = $category->all();
        return $this->View('panel.category.index', compact('categories'));
    }

    public function create()
    {
        return $this->View('panel.category.create');
    }

    public function store()
    {
        $category = new CategoryModel();
        $category->insert($_POST);
        return $this->redirect('category');
    }

    public function show($id)
    {
        return $this->View('panel.category.show');
    }

    public function edit($id)
    {
        $ob_category = new CategoryModel();
        $category = $ob_category->find($id);
        return $this->view('panel.category.edit', compact('category'));
    }

    public function update($id)
    {
        $category = new CategoryModel();
        $category->update($id, $_POST);
        return $this->redirect('panel/category');
    }

    public function destroy($id)
    {
        $category = new CategoryModel();
        $category->delete($id);
        return $this->back();
    }
}

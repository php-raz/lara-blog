<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.articles', ['articles' => $articles]);
    }

    public function create()
    {
        $categories = Category::all()->toArray(); //выбираем все категории
        $cat = array();
        foreach ($categories as $category):
            $cat[$category['id']] = $category['title'];
        endforeach;
        return view('admin.articles.create', ['categories' => $cat]);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('preview')) //Проверяем была ли передана картинка, ведь статья может быть и без картинки.
        {
            $date = date('d.m.Y'); //опеределяем текущую дату, она же будет именем каталога для картинок
            $root = public_path() . "\\images\\"; // это корневая папка для загрузки картинок
            if (!file_exists($root . $date)) {
                mkdir($root . $date);
            } // если папка с датой не существует, то создаем ее
            $f_name = $request->file('preview')->getClientOriginalName();//определяем имя файла
            $request->file('preview')->move($root . $date, $f_name); //перемещаем файл в папку с оригинальным именем
            $all = $request->all(); //в переменой $all будет массив, который содержит все введенные данные в форме
            $all['preview'] = "/images/" . $date . "/" . $f_name;// меняем значение preview на нашу ссылку, иначе в базу попадет что-то вроде /tmp/sdfWEsf.tmp
            Article::create($all); //сохраняем массив в базу
        } else {
            Article::create($request->all()); // если картинка не передана, то сохраняем запрос, как есть.
        }
        return back()->with('message', 'Статья добавлена');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        if (!empty($article->preview)) {
            unlink(public_path() . $article->preview); //удаляем превьюшку
        }
        return back()->with('message', 'Статья удалена');
    }

    public function edit($id)
    {
        $article = Article::find($id)->toArray(); //выбираем статью для редактирования
        $categories = Category::all()->toArray(); // выбираем все категории
        $cat = array();
        foreach ($categories as $category):
            $cat[$category['id']] = $category['title'];
        endforeach;
        return view('admin.articles.edit', ['article' => $article, 'categories' => $cat]);
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        if ($request->hasFile('preview')) //Проверяем была ли передана картинка, ведь статья может быть и без картинки.
        {
            $date = date('d.m.Y'); //опеределяем текущую дату, она же будет именем каталога для картинок
            $root = public_path() . "\\images\\"; // это корневая папка для загрузки картинок
            if (!file_exists($root . $date)) {
                mkdir($root . $date);
            } // если папка с датой не существует, то создаем ее
            $f_name = $request->file('preview')->getClientOriginalName();//определяем имя файла
            $request->file('preview')->move($root . $date, $f_name); //перемещаем файл в папку с оригинальным именем
            $all = $request->all(); //в переменой $all будет массив, который содержит все введенные данные в форме
            $all['preview'] = "/images/" . $date . "/" . $f_name;// меняем значение preview на нашу ссылку, иначе в базу попадет что-то вроде /tmp/sdfWEsf.tmp
            $article->update($all);
        } else {
            $article->update($request->all());
        }
        $article->save();
        return back()->with('message', 'Статья изменена');
    }
}

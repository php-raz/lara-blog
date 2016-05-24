<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Page;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.pages', ['pages' => $pages]);
    }

    public function create()
    {
        return view('admin.pages.create');
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
            Page::create($all); //сохраняем массив в базу
        } else {
            Page::create($request->all()); // если картинка не передана, то сохраняем запрос, как есть.
        }
        return back()->with('message', 'Страница добавлена');
    }

    public function destroy($id)
    {
        $pages = Page::find($id);
        $pages->delete();
        if (!empty($pages->preview)) {
            unlink(public_path() . $pages->preview); //удаляем превьюшку
        }
        return back()->with('message', 'Статья удалена');
    }

    public function edit($id)
    {
        $pages = Page::find($id)->toArray(); //выбираем статью для редактирования
        return view('admin.pages.edit', ['pages' => $pages]);
    }

    public function update(Request $request, $id)
    {
        $pages = Page::find($id);
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
            $pages->update($all);
        } else {
            $pages->update($request->all());
        }
        $pages->save();
        return back()->with('message', 'Страница изменена');
    }

    public function show($id)
    {
        $pages = Page::where('public', '=', 1)->find($id); //показываем статью если она опубликована
        return view('site.show', ['article' => $pages]);
    }
}

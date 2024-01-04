<?php

namespace App\Http\Controllers;

use App\Models\category;
use Auth;
use App\Models\book;
use App\Models\favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class addbookController extends Controller
{


    public function index()
    {

        return view('pages.adDbook', ['categories' => category::paginate(10)]);
    }


    public function store(Request $request)
    {
        $info = 'Książka została dodana.';
        $request->file('imgPDF')->store('img', 'public');
        $path = Storage::putFile('img', $request->file('imgPDF'));
        book::create([
            'title' => $request->input('title'),
            'Description' => $request->input('description'),
            'nameFile' => $path,
            'id_category' => $request->input('category')
        ]);
        return view('pages.adDbook', ['info' => $info, 'categories' => category::all()]);
    }

    public function download(Request $request)
    {
        return Storage::download($request->input('nameFile'));
    }

    public function index_category()
    {

        return view('pages.adDcategory', ['categories' => category::paginate(5)]);
    }

    public function store_category(Request $request)
    {
        $categories = category::paginate(5);
        $a = category::all()->where('name_category', $request->input('name'))->count();
        if ($a == 0) {
            category::create([
                'name_category' => $request->input('name')
            ]);
            $info = 'Kategoria o nazwie :' . $request->input('name') . ' zostala dodana';
        } else {
            $info = 'Kategoria o nazwie :' . $request->input('name') . ' juz istnieje';
        }
        return view('pages.adDcategory', ['info' => $info, 'categories' => $categories]);
    }

    public function destroy_category(Request $request)
    {
        $categories = category::paginate(5);
        $idCategory = $request->input('idCategory');
        if (category::where('id', $idCategory)->exists()) {
            category::where('id', $idCategory)->delete();
            $info = 'Kategoria zostala usunieta';
        }
        return view('pages.adDcategory', ['info' => $info, 'categories' => $categories]);
    }
}

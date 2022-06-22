<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function ListCategories()
    {
        $stmt = categories::query()->get()->all();
        return view('list', ['category' => $stmt]);
    }

    public function ShowCategories($id)
    {
        $stmt = categories::query()->where('id', $id)->first();
        return view('show', ["show" => $stmt]);
    }

    public function DeleteCategories(categories $id)
    {
        $id->delete();
        return redirect()->route('list');
    }

    public function UpdateCategory($id)
    {
        $stmt = categories::query()->find($id);
        $stmt->update();
    }

    public function StoreCategories(CategoriesRequest $request)
    {
        $categories = new categories();
        $categories->name = $request->name;
        if ($categories->save()) {
            return redirect()->route('list');
        }
        return;
    }

    public function UpdateCategories($id)
    {
        return view('update', ["id" => $id]);
    }

    public function EditCategories(Request $request, $id)
    {
        $stmt = categories::query()->where('id', $id)->first();
        if ($stmt) {
            $stmt->name = $request->name;
            if ($stmt->save()) {
                return redirect()->route('list');
            }
        }
        return;
    }

    // public function deletecategory($id) {
    //     $stmt = categories::query()->find($id);
    //     $stmt->delete();
    //     return redirect()->route('list');
    // }

}

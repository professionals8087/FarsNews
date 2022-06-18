<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function Category() {
        $stmt = categories::query()->get()->all();
        return view('pages.category', ['category' => $stmt]);
    }
}

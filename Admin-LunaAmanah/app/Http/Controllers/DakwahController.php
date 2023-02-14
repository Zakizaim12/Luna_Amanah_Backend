<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dakwah;
use App\Models\User;
use App\Models\Category;


class DakwahController extends Controller
{
    public function index(){ 
        $title = '';   
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '.$category->name;
        }
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by '.$author->name;
        }    
        return view('dakwahs', [
            "title" => "Informasi".$title,
            "active" => 'dakwahs',
            "dakwahs" => Dakwah::latest()->filter(request(['search' , 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Dakwah $dakwah){
        return view('dakwah', [
            "title" => "Single dakwah",
            "active" => 'dakwahs',
            "dakwah" => $dakwah
        ]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class VacancyController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacancies = \App\Vacancy::all();
        return view('admin.vacancies.index', compact('vacancies'));

//        $data = $request->all();
//        $vacancies = $request->get('vacancies', null);
//
//        $store = user()->store;
//        $product = $store->products()->create($data);
//
//        $product->categories()->sync($vacancies);
//
//        flash('Produto criado com sucesso!')->success();
//        return redirect()->route('admin.vacancies.index');
    }

    public function index()
    {
        $vacancies = \App\Vacancy::all();

        return view('admin.vacancies.index', compact('vacancies'));
    }

    public function create()
    {
        // $providers = \App\Provider::all(['id', 'name']);
        return view('admin.vacancies.create');
    }

}

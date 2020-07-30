<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Vacancy;

class VacancyController extends Controller
{
    private $vacancy;
    public function __construct(Vacancy $vacancy)
    {
        $this->vacancy = $vacancy;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $provider = \App\Provider::find($data['provider']);
        $provider->vacancies()->create($data);
        // return view('admin.vacancies.index', compact('vacancies'));
        flash('Vaga criada com sucesso!')->success();
        return redirect()->route('admin.vacancies.index');

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
        // $vacancies = \App\Vacancy::all();
        $vacancies = $this->vacancy->paginate(10);

        return view('admin.vacancies.index', compact('vacancies'));
    }

    public function create()
    {
        // $providers = \App\Provider::all(['id', 'name']);
        return view('admin.vacancies.create');
    }

    public function edit($id)
    {
        $vacancy = $this->vacancy->find($id);

        return view('admin.vacancies.edit', compact('vacancy'));
    }

    public function update(Request $request, $vacancy)
    {
        $data = $request->all();
        $vacancy = $this->vacancy->find($vacancy);
        $vacancy->update($data);
    }

    public function destroy($id)
    {

    }
}

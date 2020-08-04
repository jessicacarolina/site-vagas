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
        $user = auth()->user();
        $vacancies = $user->vacancies()->create($data);

        flash('Vaga criada com sucesso!')->success();
        return redirect()->route('admin.vacancies.index');
    }

    public function index()
    {
        $vacancies = $this->vacancy->paginate();

        return view('admin.vacancies.index', compact('vacancies'));
//        $vacancy = $this->vacancy->limit(6)->orderBy('id', 'DESC')->get();
    }

    public function create()
    {
        $users = \App\User::all(['id', 'name']);
        return view('admin.vacancies.create', compact('users'));
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = \App\Vacancy::all();

        return view('admin.vacancies.index', compact('vacancies'));
    }

    public function create()
    {
        // $provider = \App\Provider::all(['id', 'name']);
        return view('admin.vacancies.create');
    }

}

<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages\Vacancy;

class VacancyController extends Controller
{
    public function index ()
    {
        $vacancies = Vacancy::where('active', true)->paginate(15);
        $vacancies->each(function (&$vacancy) {
            @#todo нужно будет тут сразу динамично подставлять текущий язык сайта и брать только его в запросе. Пока установил руками русский
            $vacancy->translation = $vacancy->translations->where('language_id', 1)->first();
            $vacancy->translation->requirements = explode(',',$vacancy->translation->requirements);
            $vacancy->translation->responsibilities = explode(',',$vacancy->translation->responsibilities);
            $vacancy->translation->conditions = explode(',',$vacancy->translation->conditions);
            $vacancy->translation->key_skills = explode(',',$vacancy->translation->key_skills);
            unset($vacancy->translations);
        });
        
        return view('pages.vacancies', compact('vacancies'));
    }
}

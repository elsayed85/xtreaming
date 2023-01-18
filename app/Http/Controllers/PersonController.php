<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::orderBy("popularity", "desc")
            ->where("is_male", true)
            ->paginate(20);
        return view('person.index', ['persons' => $persons]);
    }

    public function show(Person $person)
    {
        $person->loadCount('movies');
        $person->loadCount('series');
        return view('person.show', [
            'p' => $person
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\TermRequest;
use App\Models\Term;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class TermController extends Controller
{
    public function index()
    {
         $terms = QueryBuilder::for(Term::class)
        ->simplePaginate(10);
         
        return $terms;
    }

    public function create()
    {
        //
    }

    public function show($id)
    {
        $term = Term::findorfail($id);
        return $term;
    }

    public function store(TermRequest $request)
    {
        $validatedData= $request->validated();
        return Term::create($validatedData);
    }

    public function update(TermRequest $request, $id)
    {
        $term = Term::findorfail($id);
        $term->update($request->all());
        return $term;
    }

    public function destroy($id)
    {
        $term= Term::findorfail($id);
        $term->delete();

        return response(null, 204);
    }
}

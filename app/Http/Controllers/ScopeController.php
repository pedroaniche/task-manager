<?php

namespace App\Http\Controllers;

use App\Models\Scope;
use Illuminate\Http\Request;

class ScopeController extends Controller
{
    public function index(Request $request)
    {
        $scopes = Scope::query()->orderBy('name')->get();
        
        //$message = $request->session()->get('success.message');
        //$request->session()->forget('success.message');
        $message = session('success.message');

        return view('scopes.index')->with('scopes', $scopes)->with('message', $message);
    }

    public function create()
    {
        return view('scopes.create');
    }

    public function store(Request $request)
    {
        $scope = Scope::create($request->all());

        //$request->session()->flash('success.message', "Escopo '{$scope->name}' adicionado com sucesso!");
        return to_route('scopes.index')->with('success.message', "Escopo '{$scope->name}' adicionado com sucesso!");
    }

    public function destroy(Scope $scope, Request $request)
    {
        //Scope::destroy($request->scope);
        $scope->delete();
        
        //$request->session()->flash('success.message', "Escopo '{$scope->name}' removido com sucesso!");
        return to_route('scopes.index')->with('success.message', "Escopo '{$scope->name}' removido com sucesso!");
    }

    public function edit(Scope $scope)
    {
        return view('scopes.edit')->with('scope', $scope);
    }

    public function update(Scope $scope, Request $request)
    {
        //$scope->name = $request->name;
        $scope->fill($request->all());
        $scope->save();

        return to_route('scopes.index')->with('success.message', "Nome do escopo '{$scope->name}' atualizado com sucesso!");
    }
}

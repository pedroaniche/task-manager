<x-layout title="Editar Escopo">

    <x-scopes.form :action="route('scopes.update', $scope->id)" :name="$scope->name" />

</x-layout>
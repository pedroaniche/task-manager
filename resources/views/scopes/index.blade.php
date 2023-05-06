<x-layout title="Escopos">
    <a href="{{ route('scopes.create') }}" class="btn btn-dark mb-3">Adicionar</a>

    @isset($message)
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach ($scopes as $scope)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $scope->name }}

                <span class="d-flex">
                    <a href="{{ route('scopes.edit', $scope->id) }}" class="btn btn-primary btn-sm">
                        E
                    </a>

                    <form action="{{ route('scopes.destroy', $scope->id) }}" method="POST" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">X</button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>

</x-layout>

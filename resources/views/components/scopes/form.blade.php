<form action="{{ $action }}" method="POST">
    @csrf

    @isset($name)
    @method('PUT')
    @endisset
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" id="name" name="name" class="form-control"
        @isset($name)
            value="{{ $name }}"
        @endisset
        >
    </div>

    <button type="submit" class="btn btn-primary">Adionar</button>
</form>
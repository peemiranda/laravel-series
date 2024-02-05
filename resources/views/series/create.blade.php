<x-layout title="Nova serie">
    <form action="{{ route('series.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="name" class="form-label"> Nome: </label>
                <input type="text"
                       autofocus
                       id="name"
                       name="name"
                       class="form-control"
                       value="{{ old('name') }}">
            </div>
            <div class="col-2">
                <label for="seasonQty" class="form-label"> Numero de temporadas: </label>
                <input type="text"
                       id="seasonQty"
                       name="seasonQty"
                       class="form-control"
                       value="{{ old('name') }}">
            </div>
            <div class="col-2">
                <label for="episodesPerSeason" class="form-label"> Episodios por temporada: </label>
                <input type="text"
                       id="episodesPerSeason"
                       name="episodesPerSeason"
                       class="form-control"
                       value="{{ old('name') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary"> Adicionar </button>
    </form>
</x-layout>

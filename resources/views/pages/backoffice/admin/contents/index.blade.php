<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('backoffice.contents.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter une actualité</a>
    </div>

    <table class="table table-stripped">
        <thead>
        <tr>
            <th>Code News</th>
            <th>Titre</th>
            <th class="text-end">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contents as $content)
            <tr>
                <td>{{ $content->id }}</td>
                <td>{{ $content->title }}</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="{{ route('backoffice.contents.edit', $content) }}" class="btn btn-primary">Editer</a>
                        <form action="{{ route('backoffice.contents.destroy', $content) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $contents->links() }}

</div>

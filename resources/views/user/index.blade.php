<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1>Usuários</h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>
                                        {{-- <button type="button" class="btn btn-xs btn-primary"><a href="{{ url('/users', $user) }}">Ver</a></button> --}}
                                        <button type="button" class="btn btn-xs btn-primary"><a href="{{ route('user.show', [$user->id]) }}">See</a></button>
                                        <button type="button" class="btn btn-xs btn-primary"><a href="{{ route('user.edit', [$user->id]) }}">Edit</a></button>

                                        {{-- Destroying has to be ran into a form, not from link directly --}}
                                        <form action="{{ route('user.destroy', [$user->id]) }}" method="post">
                                            @csrf
                                            @method("DELETE")

                                            <input name="user" type="hidden" value="{{ $user->id }}"/>
                                            <button type="submit" class="btn btn-xs btn-primary">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
  </body>
</html>

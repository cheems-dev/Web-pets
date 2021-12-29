<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el correo o nombre de un usuario">
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td width="10px">
                                    <a class="btn btn-sm btn-primary"
                                    href="{{route('admin.users.edit', $user)}}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{$users->links()}}
            </div>
        @else
            <div class="card-body">
                <div class="alert alert-warning" role="alert">
                    No se encontró ninguna coincidencia !!!
                </div>
            </div>
        @endif
    </div>
</div>

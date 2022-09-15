@extends('clients.layout')
 
@section('content')
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>LES MEMBRES DU PERSONNEL</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/clients/create') }}" class="btn btn-success btn-sm" title="ajouter une information complémentaire">
                        Ajouter 
                    </a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Noms</th>
                                    <th>Prenoms</th>
                                    <th>Ages</th>
                                    <th>Sexes</th>
                                    <th>Telephones</th>
                                    <th>Adresse</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                               
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $client->nom_client }}</td>
                                    <td>{{ $client->prenom_client }}</td>
                                    <td>{{ $client->age_client }}</td>
                                    <td>{{ $client->sexe_client}}</td>
                                    <td>{{ $client->numero_client }}</td>
                                    <td>{{ $client->adresse_client }}</td>
                                    <td>
                                        <a href="{{ url('/clients/' . $client->id) }}" title="Voir Client"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true">Voir</i></button></a>
                                        <a href="{{ url('/clients/' . $client->id) . '/edit' }}" title="Modifier Client"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true">Modifier</i></button></a>
                                        <form action="{{ url('/clients' . '/' . $client->id) }}" method="POST" accept-charset="UTF-8" style="display: inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Supprimer Client" onclick="return confirm('Confirmez la suppression?') "><i class="fa fa-pencil-square-o" aria-hidden="true">Supprimer</i></button>
                                        </form>                                        
                                    </td>
                                </tr>
                                     
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

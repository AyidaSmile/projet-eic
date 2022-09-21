@extends('employes.layout')

 
@section('content')
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center text-white bg-success">
                  <h2>NOS EMPLOYES</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/employes/create') }}" class="btn btn-success btn-sm" title="Ajouter un employé">
                        Ajouter
                    </a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type d'employé</th>
                                    <th>Nom complet</th>
                                    <th>Adresse</th>
                                    <th>Email</th>
                                    <th>Numero</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ( $employes as $employe)
                               <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $employe->type_employe }}</td>
                                <td>{{ $employe->nom }}</td>
                                <td>{{ $employe->adresse }}</td>
                                <td>{{ $employe->type_email }}</td>
                                <td>{{ $employe->mobile }}</td>
                                <td>
                                    <a href="{{ url('/employes/' . $employe->id) }}" title="Voir Employe"><button class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true">Voir</i></button></a>
                                    <a href="{{ url('/employes/' . $employe->id) . '/edit' }}" title="Modifier Employe"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true">Modifier</i></button></a>
                                    <form action="{{ url('/employes' . '/' . $employe->id) }}" method="POST" accept-charset="UTF-8" style="display: inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer Client" onclick="return confirm('Confirmez la suppression?') "><i class="fa fa-pencil-square-o" aria-hidden="true">Supprimer</i></button>
                                    </form>  
                                </td>
                            </tr>
                               @endforeach
                            </tbody>
                        </table>
                        <a href="/dashboardAdmin">
                            <button class="btn btn-primary btn-sm">Retour</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
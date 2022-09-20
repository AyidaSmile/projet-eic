@extends('employes.layout')

 
@section('content')
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h2>ICI NOTRE CRUD</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/employes/create') }}" class="btn btn-success btn-sm" title="Ajouter un employé">
                        Ajouter
                    </a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type_employe</th>
                                    <th>Nom</th>
                                    <th>Adresse</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Comptable</td>
                                    <td>SESSO Ayida</td>
                                    <td>Agoe</td>
                                    <td>sessoayida@gmail.com</td>
                                    <td>93568521</td>
                                    <td>
                                        <a href="" title="Voir Employe"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true">Voir</i></button></a>
                                        <a href="" title="Modifier Employe"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true">Modifier</i></button></a>
                                        <a href="" title="Supprimer Employe"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true">Supprimer</i></button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
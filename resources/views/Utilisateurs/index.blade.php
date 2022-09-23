@extends('layouts.master')

@section('content')
<div class="row" style="margin:20px;">
    <div class="col-12">
        <div class="card">
            <div class="card-header text-center text-white" style="background-color: #268D72">
              <h2>Liste des reservations</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table border="2" class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Type de client</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Nom de la structure</th>
                                <th>Numero</th>
                                <th>Sexe</th>
                                <th>Email</th>
                                <th>Adresse</th>
                                <th>Ville</th>
                                <th>Type de service</th>
                                <th>Détails</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ $reservations }} --}}
                        @foreach ( $reservations as $reservation)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $reservation->Type_client }}</td>
                            <td>{{ $reservation->user->name }}</td>
                            <td>{{ $reservation->user->surname }}</td>
                            <td>{{$reservation->nom_structure }}</td>
                            <td>{{ $reservation->user->phone }}</td>
                            <td>{{ $reservation->user->sexe }}</td>
                            <td>{{ $reservation->user->email }}</td>
                            <td>{{ $reservation->adresse}}</td>
                            <td>{{$reservation->ville}}</td>
                            <td>{{ $reservation->type_service}}</td>
                            <td>{{ $reservation->details}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="/dashboardAdmin">
                    <button class="btn btn-danger btn-sm">Retour</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
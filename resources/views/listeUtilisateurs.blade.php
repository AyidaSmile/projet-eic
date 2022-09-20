@extends('layouts.master')

@section('title')
Liste des utilisateurs
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-header">
          <h4 class="card-title">Liste des utilisateurs</h4>
          {{-- <p class="category"> Here is a subtitle for this table</p> --}}
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Nom</th>
                <th>Prenom</th>
                <th>Phone</th>
                <th>Sexe</th>
                <th>Email</th>
                <th>Type</th>
                <th>Modifier</th>
                <th>Supprimer</th>
              </thead>
              <tbody>
               @foreach ($users as $user )
               <tr>
                {{-- ici asssurer vous que vos données soit conforme à ceux du model --}}
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->sexe }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->type }}</td>
                <td>
                  <a href="#" class="btn btn-success">Modifier</a>
                </td>
                <td>
                  <a href="#" class="btn btn-danger">Supprimer</a>
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
@endsection

@section('scripts')
@endsection

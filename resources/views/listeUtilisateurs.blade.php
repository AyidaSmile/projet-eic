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
                <th>Modifier</th>
                <th>Supprimer</th>
              </thead>
              <tbody>
                <tr>
                  <td>SESSO</td>
                  <td>Prenom</td>
                  <td>Phone</td>
                  <td>Sexe</td>
                  <td>Email</td>
                  <td>
                    <a href="#" class="btn btn-success">Modifier</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger">Supprimer</a>
                  </td>
                </tr>
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

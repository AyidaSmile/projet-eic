@extends('layouts.master')

@section('title')
Dashboard admin
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-header">
          <h4 class="card-title text-primary text-center">Tableau de bord</h4>
          {{-- <p class="category"> Here is a subtitle for this table</p> --}}
        </div>
        <div class="card-body">
          {{-- <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Mes informations</th>
                <th>Les utilisateurs</th>
                <th>Nouvelles Réservations</th>
                <th>Formations&Recrutements</th>
              </thead>
              <tbody>
                <tr>
                  <td>Dakota Rice</td>
                  <td>Niger</td>
                  <td>Oud-Turnhout</td>
                  <td>$36,738</td>
                </tr>
              </tbody>
            </table>
          </div> --}}
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <a href="profil_admin">
                                <div class="card-title text-primary text-center">
                                    Mes informations
                                </div>
                            </a>
                        </div>
                        <div class="card-body">

                        </div>

                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <a href="/listeUtilisateurs">
                                <div class="card-title text-primary text-center">
                                    Liste des utilisateurs
                                </div>
                            </a>
                            
                        </div>
                        <div class="card-body">

                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title text-primary text-center">
                                Les messages
                            </div>
                        </div>
                        <div class="card-body">

                        </div>

                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title text-primary text-center">
                                Les réservations
                            </div>
                        </div>
                        <div class="card-body">

                        </div>

                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   Bienvenue chers admin dans votre tableau de bord!.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

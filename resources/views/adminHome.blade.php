{{-- @extends('layouts.master')

@section('title')
Dashboard admin
@endsection
   
@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-header">
          <h4 class="card-title">Tableau de bord admin</h4> --}}
          {{-- <p class="category"> Here is a subtitle for this table</p> --}}
        {{-- </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Name</th>
                <th>Country</th>
                <th>City</th>
                <th>Salary</th>
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
          </div>
        </div>
      </div>
    </div>
  </div> 
@endsection --}}

{{-- @section('scripts')
@endsection --}}
 @extends('layouts.app')
   
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
@endsection 
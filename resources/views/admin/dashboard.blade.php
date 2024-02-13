@extends('layouts.master')


@section('title')
    Dashboard | Funda of web IT
@endsection




@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Simple Table</h4>
        </div>
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
                  <td>Oud-Turnhout</td>
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
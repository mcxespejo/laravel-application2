@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 CRUD (Create, Read, Update and Delete)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/students') }}" class="btn btn-success btn-sm" title="Back">
                            Back
                        </a>
                        <br/>
                        <br/>
                        <form class="form-control" method="POST" action="{{ route('students.store') }}">
                    @csrf
                        <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
  <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Address</span>
  <input type="text" name="address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Contact</span>
  <input type="text" name="contact" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
<input type="submit" class="btn btn-primary mb-3" value="submit"></input>
</div>
</form>
 
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
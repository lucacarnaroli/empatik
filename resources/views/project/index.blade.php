@extends('layouts.app');

@section('content')

<div class="form" id="form-search">
    <div class="form" id="form-search-filter">
      <div class="col-sm-10 box-form-filter ">
        <div class="container-group">
          <div class="value-group">
            
            <div class="form-group">
            <input class="filter-input" type="text" name="" id="" placeholder="Nome progetto" for="">
            </div>
            <div class="form-group">
              <input class="filter-input" type="text" name="servizo" id="" placeholder="Servizio">
            </div>
            <div class="form-groud">
              <input class="filter-input" type="email" name="username" id="" placeholder="Username(email)">
            </div>
             @foreach ($projects as $project)
                <div class="form-group">
                <input class="filter-input" type="password" name="password" id="" placeholder="" value="{{$project->password}}"> 
                <span><a href="">Mostra password</a></span>
                </div>
            @endforeach
                
            
          </div>
        </div>
          <button class="btn btn-family" id="btn-filter" type="submit">Accedi</button>
        </div>
    </div>
</div>
@endsection
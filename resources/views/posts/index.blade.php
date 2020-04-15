@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">index</div>

                <div class="card-body">
                   
                    @if ($posts->count()>0)

                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">images</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $c)
                            <tr>
                            <th scope="row">{{$c->id}}</th>
                            <td>{{$c->title}}</td>
                            <td><img src="{{$c->image}}" alt="{{$c->title}}" height="70" width="70"></td>
                            <td>
                                  <a href="/post/edit/{{$c->id}}">Edit</a>
                            </td>
                            <td>
                                  <a href="/post/delete/{{$c->id}}">Delete</a>
                            </td>
                            
                            <tr>
                           @endforeach
                        </tbody>
                    </table> 
                        
                    @else

                    <p>No Posts to show</p>
                        
                    @endif
                       
                
                 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.erp.app')
@section('page')


<div class="d-flex justify-content-between m-3">
  <h3 class="text-primary">Manage Hall</h3>
  <a href="{{route('hall.create')}}" class="btn btn-outline-primary"> + </a>
</div>


<table class="table table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <!-- <th scope="col">Details</th> -->
      <th scope="col">Price</th>
      <th scope="col">Capacity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
    @forelse ($hall as $row)
    <tr>

      <th scope="row">{{$row->id}}</th>
      <th scope="row">{{$row->name}}</th>
      <td style="width: 100px; height: 70px; text-align: center;">
        <img style="width: 100%; height: 100%; object-fit: contain;" src="{{asset('storage/')}}/{{$row->image}}" alt="">
      </td>
      <!-- <th scope="row">{{$row->details}}</th> -->
      <th scope="row">{{$row->price}}</th>
      <th scope="row">{{$row->capacity}}</th>
     

      <td>
        <a class="btn btn-primary" href="{{route('hall.edit',$row->id)}}"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>

        <form class="d-inline" onsubmit="return confirm('Are you sure?')" action="{{route('hall.destroy',$row->id)}}" method="post">
          @csrf
          @method('delete')
        
          <button type="submit" class="btn btn-danger" name="delete"><i class='fa-solid fa-trash'></i></button>
        </form>
       
      </td>
      
    </tr>


    @empty

    @endforelse

  </tbody>
</table>
<hr>


@endsection
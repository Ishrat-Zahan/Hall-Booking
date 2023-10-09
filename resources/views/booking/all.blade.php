@extends('layouts.erp.app')
@section('page')


<div class="d-flex justify-content-between m-3">
  <h3 class="text-primary">Manage Booking</h3>
  
</div>


<table class="table table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User</th>
      <th scope="col">Hall</th>
      <th scope="col">Total</th>
      <th scope="col">Comment</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
    @forelse ($booking as $row)
    <tr>

      <th scope="row">{{$row->id}}</th>
      <th scope="row">{{$row->user->name}}</th>
      <th scope="row">{{$row->hall->name}}</th>
      <th scope="row">{{$row->total}}</th>
      <th scope="row">{{$row->comment}}</th>
      <th scope="row">{{$row->status}}</th>
     

      <td>
        <a class="btn btn-primary" href="{{route('booking.edit',$row->id)}}"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>

        <form class="d-inline" onsubmit="return confirm('Are you sure?')" action="{{route('booking.destroy',$row->id)}}" method="post">
          @csrf
          @method('delete')
        
          <button type="submit" class="btn btn-danger" name="delete"><i class='fa-solid fa-trash'></i></button>
        </form>

        <a class="btn btn-success" href="{{route('booking.show',$row->id)}}"><i class="fa-solid fa-eye"></i></a>
       
      </td>
      
    </tr>


    @empty

    @endforelse

  </tbody>
</table>
<hr>


@endsection
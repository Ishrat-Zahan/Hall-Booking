@extends('layouts.erp.app')
@section('page')

<table style="width: 50%; margin: auto;" class="table table-bordered">
    <thead>
        <tr>
            <th colspan="2" class="text-center">
                <h4 class="text-primary">Create Hall</h4>
            </th>
        </tr>
    </thead>
    <tbody>
        <form action="{{ route('hall.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <tr>
                <td>Name</td>
                <td>
                    <input class="form-control" type="text" name="name" required>
                </td>
            </tr>
            <tr>
                <td>Images</td>
                <td>
                    <input type="file" name="image" id="image" class="form-control" required >
                </td>
            </tr>
            <tr>
                <td>Details</td>
                <td>
                    <input class="form-control" type="text" name="details" required>
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td>
                    <input class="form-control" type="text" name="price" required>
                </td>
            </tr>
            <tr>
                <td>Capacity</td>
                <td>
                    <input class="form-control" type="text" name="capacity" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="btn btn-primary mt-3" type="submit" value="Create Hall">
                </td>
            </tr>
        </form>
    </tbody>
</table>


@endsection
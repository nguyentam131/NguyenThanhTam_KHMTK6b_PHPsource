@extends('layout.master');
@section('Content')
@endsection
<form method="get" action="{{ route ('admin.product.getProductsByBand')}}">
    <input type ="hidden" name = "_token" value = "{{ csrf_token()}}">
    <div class="mb-3">
        <label for="" class="form-label">Select Band</label> <br>
        <select
            class="form-select form-select-lg"
            name="selectBand"
            id=""
        >
            <option selected>Select one</option>
            <option value="Monoclate-P">Monoclate-P</option>
            <option value="Natures Gate">Natures Gate</option>
            <option value="Acneen">Acneen</option>
            <option value="Dipyridamole">Dipyridamole</option>
            <option value="Levofloxacin">Levofloxacin</option>
        </select>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="btSearch">Bấm</button>
        </div>
    </div>  

</form>

<table>
    <tbody>
        <thead>
            <tr>
                <th class =\"text-centre\"> PID</th>
                <th class =\"text-centre\"> Name</th>
                <th class =\"text-centre\"> Company</th>
                <th class =\"text-centre\"> Year</th>
                <th class =\"text-centre\"> Band</th>
                <th class =\"text-centre\"> Image</th>
                <th class =\"text-centre\"> Edit</th>
                <th class =\"text-centre\"> Delete</th>
            </tr>
            @foreach($products as $product)
        </thead>
<tr>
<td class =\"text-left\"> {{$product->pid}}</td>
<td class =\"text-left\"> {{$product->pname}}</td>
<td class =\"text-left\"> {{$product->company}}</td>
<td class =\"text-left\"> {{$product->year}}</td>
<td class =\"text-left\"> {{$product->band}}</td>
<td class =\"text-left\"><img src = "{{$product->pimage}}" alt ="Image</td>
<td class="centre"><i class ="fa fa-trash-o fa-fw"></i>
<a href="deleteProduct/{{$product->pid}}"> Delete</a></td>
<td class ="centre"><i class ="fa fa-pencil fa-fw"></i>
<a href="updateProduct/{{$product->pid}}">Edit</a></td>
</tr>
@endforeach
    </tbody>
</table>

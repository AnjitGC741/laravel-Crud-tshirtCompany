<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('saveList')}}" method="post">
        @csrf
        <input type="number" name="batchNo">
        <br>
        <input type="number" name="quantity">
        <br>
        <input type="date" name="manDate">
        <br>
        <select name="quality" id="quality" value="">
            <option value="good">Good</option>
            <option value="medium">Medium</option>
            <option value="bad">Bad</option>
        </select>
        <br>
        <textarea rows="4" cols="50" name="remark">
        </textarea>
        <button type="submit">Add</button>

    </form>
    <table border="1">
        <tr>
        <th>Batch No</th>
        <th>Quantity</th>
        <th>Manifacture Date</th>
        <th>Quanlity</th>
        <th>Remark</th>
        <th colspan="2">Action</th>
     </tr>
     @foreach($list as $value)
        <tr>
            <td>{{$value->BN}}</td>
            <td>{{$value->Quanity}}</td>
            <td>{{$value -> dateOfManifacture}}</td>
            <td>{{$value->status}}</td>
            <td>{{$value -> remark}}</td>
            <td><a href="{{url('delete/'.$value->id)}}"><button>Delete</button></a></td>
            <td><a href="{{url('edit/'.$value->id)}}"> <button class="btn btn-warning">update</button></a></td>

        </tr>
        @endforeach
    </table>
</body>

</html>
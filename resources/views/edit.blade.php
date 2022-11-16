<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Edit data</h1>
    <form action="{{route('updateData')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$value->id}}">
        <input type="number" name="batchNo" value="{{$value->BN}}">
        <br>
        <input type="number" name="quantity" value="{{$value->Quanity}}">
        <br>
        <input type="date" name="manDate" value="{{$value->dateOfManifacture}}">
        <br>
        <select name="quality" id="quality">
            <option value="{{$value->status}}"> {{$value->status}}</option>
            <option value="good">Good</option>
            <option value="medium">Medium</option>
            <option value="bad">Bad</option>
        </select>
        <br>
        <textarea rows="4" cols="50" name="remark">
        {{$value->remark}}
        </textarea>
        <button type="submit">update</button>

    </form>
</body>
</html>
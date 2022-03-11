
<style>
    table,table tr th, table tr td { border:1px solid #0094ff; }
        table { width: 500px; min-height: 25px; line-height: 25px; text-align: center; border-collapse: collapse;}
</style>
<form action="">
    <input type="text" name=“text”>
</form>
<table>

    <tr>
        <th>id</th>
        <th>text</th>
        <th>responseType</th>

    </tr>

    @foreach($data as $value)

    <tr>
    <td>{{$value->id}}</td>
        <td>{{$value->text}}</td>
        <td>{{$value->responseType}}</td>

    </tr>
@endforeach

</table>

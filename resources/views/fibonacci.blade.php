<html>
<head>
    <title>Fibonacci</title>
</head>
<body>
    <h1>SOAL 1</h1>
    <form method="post" action="{{ route('hasil.fibonacci') }}">
        @csrf
        <br>
        <table>
            <tbody>
                <tr>
                    <td>Rows</td>
                    <td>
                        : <input type="text" name="rows" value="{{ old('rows', isset($rows) ? $rows : '') }}">
                    </td>
                </tr>
                <tr>
                    <td>Columns</td>
                    <td>
                        : <input type="text" name="columns" value="{{ old('columns', isset($columns) ? $columns : '') }}">
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="submit" value="Submit">
    </form>

    @if(isset($array))
        <br>
        <table border='1'>
            @foreach($array as $row)
                <tr>
                    @foreach($row as $num)
                        <td style='padding: 5px;'>{{ $num }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
        @endif
</body>
</html>





<table border="1">
    <thead>
        <th>Code</th>
        <th>Name</th>
    </thead>
    <tbody>
    @foreach($countries as $country)
        <tr>
            <td>{{ $country->Code }}</td>
            <td>{{ $country->Name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
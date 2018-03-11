<table border="1">
    <thead>
        <th>Name</th>
        <th>Country Code</th>
        <th>District</th>
        <th>Population</th>
    </thead>
    <tbody>
    @foreach($cities as $city)
        <tr>
            <td>{{ $city->Name }}</td>
            <td>{{ $city->CountryCode }}</td>
            <td>{{ $city->District }}</td>
            <td>{{ $city->Population }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
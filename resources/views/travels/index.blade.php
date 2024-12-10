


    <h1>Всички Пътувания</h1>
    @if (Auth::user()->role_id == 1)
        <a href="{{ route('travels.export') }}">Експортирай в Excel</a>
    @endif
    <a href="{{ route('travels.create') }}">Добави Пътуване</a>
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Дата</th>
                <th>Град</th>
                <th>Компания</th>
                <th>КМ</th>
                <th>Свързване/Разкачване</th>
                <th>Номер на Ремарке</th>
            </tr>
        </thead>
        <tbody>
            @foreach($travels as $travel)
                <tr>
                    <td>>{{$travel->truck_id}}</td>
                    <td>{{ $travel->date }}</td>
                    <td>{{ $travel->city }}</td>
                    <td>{{ $travel->company }}</td>
                    <td>{{ $travel->km }}</td>
                    <td>{{ $travel->connect_disconnect }}</td>
                    <td>{{ $travel->trailer_nr }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>



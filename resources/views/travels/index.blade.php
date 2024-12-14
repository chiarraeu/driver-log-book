<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css" rel="stylesheet" />
</head>

<div class="card text-center"><h1>ALL TRIPS</h1>
    <div class="card-body">
    </div>
    <a href="{{ route('travels.create') }}">
    <button type="button" class="btn bg-gradient-success btn-lg w-35" >ADD TRIP</button>
    </a>
@if (Auth::user()->role_id == 1)
    <a href="{{ route('travels.export') }}">Експортирай в Excel</a>
@endif



<div class="card">
    <div class="table-responsive">
        <table class="table align-items-center mb-3">
            <thead>
                <tr class= "align-middle text-center">

                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Truck Number</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">City</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Company
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Odometer
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Conect/Disconect</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trailer
                        number</th>
                    <th class="text-secondary opacity-7"></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($travels as $travel)
                    <tr class= "align-middle text-center">
                        <td class= "align-middle text-center">
                         {{ $travel->truck_id }}
                        </td>
                        <td class= "align-middle text-center">
                            {{ $travel->date }}
                        </td>
                        <td class="align-middle text-center">
                            {{ $travel->city }} </td>
                        <td class="align-middle text-center">
                            {{ $travel->company }} </td>
                        <td class="align-middle text center">
                            {{ $travel->km }}
                        </td>
                        <td class="align-middle text-center">
                            {{ $travel->connect_disconnect }} </td>
                        <td class="align-middle text-center">
                            {{ $travel->trailer_nr }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

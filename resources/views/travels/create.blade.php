<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create trip</title>
</head>

<body>

</body>

</html>

<head>
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

<body>
    <div class="card shadow-xl p-5">
        <form action="{{ route('travels.store') }}" method="POST">
            @csrf
            <div class="card">
                <h2 class="text-center">Welcome Veselin</h2>
                <p class="text-center">Add your new trip</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="truck_id" placeholder="Truck plate"
                                required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="date" class="form-control" name="date" placeholder="Date" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="city" class="form-control" placeholder="City" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="company" class="form-control" placeholder="Company" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">

                            <input type="text" name="km" class="form-control" placeholder="Odometer" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{-- <input type="text" name="connect_disconnect"  class="form-control" placeholder="Connect/Disconect" required> --}}
                            <select name="connect_disconnect" class="form-control" required>
                                <option value="Connect/Disconnect">Connect/Disconect</option>
                                <option value="Connect">Connect</option>
                                <option value="Disconnect">Disconnect</option>
                                <option value="Loading">Loading</option>
                                <option value="Unloading">Unloading</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="trailer_nr" class="form-control" placeholder="Trailer Plate"
                                required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn bg-gradient-success">SAVE</button>
            </div>
        </form>
    </div>
</body>

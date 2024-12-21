 <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="shadow-xl">
          {{-- <h6 class="text-center">All trips</h6> --}}
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
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
              <!--  Start table body -->

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
      </div>
    </div>
  </div>


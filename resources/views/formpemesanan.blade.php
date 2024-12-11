<x-layout>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <h1 class="text-center">Buat Perjalanan Anda</h1>
            <div class="row justify-content-center">
                <select id="service_type" onchange="toggleForm()" class="form-control col-md-3 mt-2">
                    <option value="rental" selected>Rental</option>
                    <option value="travel">Travel</option>
                </select>
            </div>
            <span></span>

            {{-- FORM TRAVEL --}}


            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('submitTravelBooking') }}" class="row mt-3" method="POST" id="travelForm"
                style="display: none;">
                @csrf
                <div class="col-md-8 ftco-animate">
                    <div class="form-group mr-5">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group mr-5">
                        <label for="phone">Nomor Telepon</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="form-group mr-5">
                        <label for="route_id">Rute</label>
                        <select class="form-control" name="route_id" id="route_id">
                            <option value="">Pilih Rute</option>
                            @foreach ($travelRoutes as $route)
                                <option value="{{ $route->id }}">{{ $route->origin }} - {{ $route->destination }}
                                    (Rp{{ number_format($route->price, 2) }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mr-5">
                        <label for="vehicle_model">Pilih Kendaraan</label>
                        <select class="form-control" name="vehicle_model" id="vehicle_model">
                            <option>Pilih Kendaraan</option>
                        </select>
                    </div>
                    {{-- <div class="form-group mr-5">
                        <label for="travel_date">Tanggal</label>
                        <input type="date" id="travel_date" name="travel_date" class="form-control" required>
                    </div> --}}
                    <div class="form-group mr-5">
                        <label for="departure_time">Pilihan Waktu</label>
                        <select class="form-control" name="departure_time" id="departure_time">
                            <option value="">Pilih Waktu</option>
                        </select>
                    </div>
                    <div class="form-group mr-5">
                        <label for="pickup_location">Lokasi Penjemputan</label>
                        <input type="text" class="form-control" name="pickup_location" id="pickup_location">
                    </div>
                    <div class="form-group mr-5">
                        <label for="dropoff_location">Lokasi Pengantaran</label>
                        <input type="text" class="form-control" name="dropoff_location" id="dropoff_location">
                    </div>
                    <div class="form-group mt-2 mr-5">
                        <label for="travel_notes">Catatan</label>
                        <textarea class="form-control" id="travel_notes" name="travel_notes" rows="3"></textarea>
                    </div>
                </div>

                <div class="col-md-4 sidebar ftco-animate d-block">
                    <h5 class="mb-4">Travel Summary</h5>
                    <div class="d-flex justify-content-between">
                        <p>Subtotal</p>
                        <p class="text-dark">Rp. 500.000</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Biaya Admin</p>
                        <p class="text-dark">Rp. 2.000</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <p>Total</p>
                        <p class="text-dark">Rp. 502.000</p>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Pesan Sekarang</button>
                </div>
            </form>

            {{-- FORM RENTAL --}}
            <form action="{{ route('submitRentalBooking') }}" class="row mt-3" method="POST" id="rentalForm"
                style="display: flex;">
                @csrf
                <div class="col-md-8 ftco-animate">
                    <div class="form-group mr-5">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name" id="name_rental">
                    </div>
                    <div class="form-group mr-5">
                        <label for="phone">Nomor Telepon</label>
                        <input type="text" class="form-control" name="phone" id="phone_rental">
                    </div>
                    <div class="form-group mr-5">
                        <label for="pickup_option">Pilihan Pengambilan</label>
                        <select class="form-control" name="pickup_option" id="pickup_option" onchange="toggleAddressField()">
                            <option>Pilih Pengambilan</option>
                            <option value="office">Ambil di Kantor</option>
                            <option value="address">Diantar ke Alamat</option>
                        </select>
                    </div>
                    <!-- Form Alamat Pengantaran (Tetap Ada, Tapi Tidak Wajib Kecuali Jika Pilih "Diantar ke Alamat") -->
                    <div class="form-group mr-5" id="pickup_address_field">
                        <label for="pickup_address">Alamat Pengantaran</label>
                        <input type="text" class="form-control" name="pickup_address" id="pickup_address">
                    </div>
                    <div class="form-group mr-5">
                        <label for="driver_option">Opsi Driver</label>
                        <select class="form-control" name="driver_option" id="driver_option">
                            <option value="without_driver">Lepas Kunci</option>
                            <option value="with_driver">Dengan Driver</option>
                        </select>
                    </div>
                    <div class="form-group mr-5">
                        <label for="pickup_date">Tanggal Mulai</label>
                        <input type="date" id="pickup_date" name="pickup_date" class="form-control" required>
                    </div>
                    <div class="form-group mr-5">
                        <label for="return_date">Tanggal Pengembalian</label>
                        <input type="date" id="return_date" name="return_date" class="form-control" required>
                    </div>
                    <div class="form-group mr-5">
                        <label for="vehicle_model">Pilih Kendaraan</label>
                        <select class="form-control" name="vehicle_model">
                            <option value="">Default select</option>
                            @foreach ($vehicles as $vehicle)
                                <option value="{{ $vehicle->id }}">{{ $vehicle->model }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mr-5">
                        <label>Tambahan (Add-ons)</label>
                        @foreach ($addons as $addon)
                            <div class="form-check d-flex justify-content-between">
                                <!-- <input class="form-check-input" type="checkbox" value="{{ $addon->id }}"
                                    id="addon_{{ $addon->id }}" name="addons[]"> -->
                                <input class="form-check-input" type="checkbox" name="addons[]" value="{{ $addon->id }}">

                                <label class="form-check-label text-dark" for="addon_{{ $addon->id }}">
                                    {{ $addon->name }}
                                </label>
                                <span>Rp{{ number_format($addon->price, 3) }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="form-group mt-2 mr-5">
                        <label for="rental_notes">Catatan</label>
                        <textarea class="form-control" id="rental_notes" name="rental_notes" rows="3"></textarea>
                    </div>
                </div>

                <div class="col-md-4 sidebar ftco-animate d-block">
                    <h5 class="mb-4">Rental Summary</h5>

                    <div class="d-flex justify-content-between">
                        <p>Subtotal</p>
                        <p class="text-dark">Rp. 500.000</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Biaya Admin</p>
                        <p class="text-dark">Rp. 2.000</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <p>Total</p>
                        <p class="text-dark">Rp. 502.000</p>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100">Pesan Sekarang</button>
                </div>
            </form>


        </div>
    </section>

    <script>
        const travelRoutes = @json($travelRoutes);
        document.getElementById('route_id').addEventListener('change', function() {
            const selectedRoute = travelRoutes.find(route => route.id == this.value);
            const departureSelect = document.getElementById('departure_time');
            const vehicleSelect = document.getElementById('vehicle_model');
            departureSelect.innerHTML = '<option value="">Pilih Waktu</option>';
            vehicleSelect.innerHTML = '<option value="">Pilih Kendaraan</option>';
            if (selectedRoute && selectedRoute.departure_times) {
                selectedRoute.departure_times.forEach(time => {
                    departureSelect.innerHTML += `<option value="${time}">${time}</option>`;
                });
                selectedRoute.vehicles.forEach(vehicle => {
                    vehicleSelect.innerHTML += `<option value="${vehicle.id}">${vehicle.model}</option>`;
                });
            }
        });

        window.onload = initMap;

        document.getElementById('rentalForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah pengiriman otomatis
            console.log('Form data:', new FormData(this)); // Menampilkan data yang dikirimkan
        });

        function toggleAddressField() {
        const pickupOption = document.getElementById('pickup_option').value;
        const addressField = document.getElementById('pickup_address_field');

        if (pickupOption === 'address') {
            addressField.style.display = 'block';
            document.getElementById('pickup_address').required = true;
        } else {
            addressField.style.display = 'none';
            document.getElementById('pickup_address').required = false;
        }
    }



    </script>
</x-layout>

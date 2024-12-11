<x-layout>
    <section class="ftco-section bg-light">

        <div class="container">
            <h1 class="text-center mb-5">Daftar Kendaraan</h1>
            <div class="row mb-5 px-3 justify-content-between">
                <input class="form-control col-md-3 mt-2" type="search" placeholder="Search" aria-label="Search">
                <select id="jenisMobil" onchange="filterVehicles()" class="form-control col-md-3 mt-2">
                    <option value="">Semua Jenis Mobil</option>
                    <option value="SUV">SUV</option>
                    <option value="MPV">MPV</option>
                    <option value="Sedan">Sedan</option>
                    <option value="Pickup">Pickup</option>
                    <!-- Tambahkan jenis mobil lainnya sesuai kebutuhan -->
                </select>

                <select id="harga" onchange="filterVehicles()" class="form-control col-md-3 mt-2">
                    <option value="">Semua Harga</option>
                    <option value="0-500000">Rp 0 - Rp 500.000</option>
                    <option value="500000-1000000">Rp 500.000 - Rp 1.000.000</option>
                    <option value="1000000-1500000">Rp 1.000.000 - Rp 1.500.000</option>
                    <!-- Tambahkan rentang harga lainnya sesuai kebutuhan -->
                </select>

                <select id="" onchange="filterVehicles()" class="form-control col-md-2 mt-2">
                    <option value="">Kapasitas</option>
                    <option value="0-500000">3-4</option>
                    <option value="500000-1000000">7-8</option>
                    <option value="1000000-1500000">>8</option>
                    <!-- Tambahkan rentang harga lainnya sesuai kebutuhan -->
                </select>

            </div>


            <div class="row">
                @foreach ($vehicles as $vehicle)
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                style="background-image: url({{ asset($vehicle->image) }});">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="car-single.html">{{ $vehicle->model }}</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">{{ $vehicle->seating_capacity }} Penumpang</span>
                                    <p class="price ml-auto">Rp
                                        {{ number_format($vehicle->harga_sewa, 0, ',', '.') }}<span>/hari</span></p>
                                </div>
                                <p class="d-flex mb-0 d-block"><a href="/pemesanan" class="btn btn-primary py-2 mr-1">Pesan</a>
                                    <a href="." class="btn btn-secondary py-2 ml-1">Detail</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
</x-layout>

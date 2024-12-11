<x-layout>
    <div class="ftco-section">
        <div class="container">
            <h2 class="form-title"><i class="fas fa-car"></i> Pendaftaran Mitra Armada</h2>

            <!-- Success Message -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('submitMitra') }}" method="POST">
                @csrf

                <!-- Informasi Pribadi Mitra -->
                <div class="form-section">
                    <h3><i class="fas fa-user"></i> Informasi Pribadi</h3>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="telepon" name="telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Tempat Tinggal</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="identitas">Nomor Identitas (KTP/SIM)</label>
                        <input type="text" class="form-control" id="identitas" name="identitas" required>
                    </div>
                </div>

                <!-- Informasi Kendaraan -->
                <div class="form-section">
                    <h3><i class="fas fa-car-side"></i> Informasi Kendaraan</h3>
                    <div class="form-group">
                        <label for="jenis_kendaraan">Jenis Kendaraan</label>
                        <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" required>
                            <option value="">Pilih Jenis Kendaraan</option>
                            <option value="mobil">Mobil</option>
                            <option value="suv">SUV</option>
                            <option value="minibus">Minibus</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="merk_model">Merk dan Model Kendaraan</label>
                        <input type="text" class="form-control" id="merk_model" name="merk_model" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_pembuatan">Tahun Pembuatan</label>
                        <input type="number" class="form-control" id="tahun_pembuatan" name="tahun_pembuatan" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor_polisi">Nomor Polisi (Plat Nomor)</label>
                        <input type="text" class="form-control" id="nomor_polisi" name="nomor_polisi" required>
                    </div>
                    <div class="form-group">
                        <label for="warna_kendaraan">Warna Kendaraan</label>
                        <input type="text" class="form-control" id="warna_kendaraan" name="warna_kendaraan" required>
                    </div>
                    <div class="form-group">
                        <label for="kapasitas_penumpang">Kapasitas Penumpang</label>
                        <input type="number" class="form-control" id="kapasitas_penumpang" name="kapasitas_penumpang"
                            required>
                    </div>
                </div>

                <!-- Kondisi Kendaraan -->
                <div class="form-section">
                    <h3><i class="fas fa-clipboard-check"></i> Kondisi Kendaraan</h3>
                    <div class="form-group">
                        <label for="kondisi_fisik">Kondisi Fisik</label>
                        <textarea class="form-control" id="kondisi_fisik" name="kondisi_fisik" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kapasitas_bagasi">Kapasitas Bagasi</label>
                        <input type="text" class="form-control" id="kapasitas_bagasi" name="kapasitas_bagasi"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="jarak_tempuh">Jarak Tempuh Kendaraan (km)</label>
                        <input type="number" class="form-control" id="jarak_tempuh" name="jarak_tempuh" required>
                    </div>
                    <div class="form-group">
                        <label for="dokumen_lengkap">Dokumen Kendaraan Lengkap?</label>
                        <select class="form-control" id="dokumen_lengkap" name="dokumen_lengkap" required>
                            <option value="yes">Ya</option>
                            <option value="no">Tidak</option>
                        </select>
                    </div>
                </div>

                <!-- Detail Asuransi dan Keamanan -->
                <div class="form-section">
                    <h3><i class="fas fa-shield-alt"></i> Detail Asuransi dan Keamanan</h3>
                    <div class="form-group">
                        <label for="jenis_asuransi">Jenis Asuransi</label>
                        <select class="form-control" id="jenis_asuransi" name="jenis_asuransi" required>
                            <option value="tpl">TPL (Pihak Ketiga)</option>
                            <option value="all-risk">All-Risk</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nomor_polis">Nomor Polis Asuransi</label>
                        <input type="text" class="form-control" id="nomor_polis" name="nomor_polis" required>
                    </div>
                    <div class="form-group">
                        <label for="masa_berlaku_asuransi">Masa Berlaku Asuransi</label>
                        <input type="date" class="form-control" id="masa_berlaku_asuransi"
                            name="masa_berlaku_asuransi" required>
                    </div>
                    <div class="form-group">
                        <label for="fitur_keamanan">Fitur Keamanan</label>
                        <input type="text" class="form-control" id="fitur_keamanan" name="fitur_keamanan"
                            required>
                    </div>
                </div>

                <!-- Waktu Operasional -->
                <div class="form-section">
                    <h3><i class="fas fa-clock"></i> Waktu Operasional yang Disetujui</h3>
                    <div class="form-group">
                        <label for="ketersediaan_waktu">Ketersediaan Waktu Kendaraan</label>
                        <select class="form-control" id="ketersediaan_waktu" name="ketersediaan_waktu" required>
                            <option value="full-time">Full-Time</option>
                            <option value="part-time">Part-Time</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="rute_disetujui">Rute yang Disetujui</label>
                        <input type="text" class="form-control" id="rute_disetujui" name="rute_disetujui"
                            required>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-block btn-lg">Kirim Pendaftaran</button>
            </form>
        </div>
    </div>

</x-layout>

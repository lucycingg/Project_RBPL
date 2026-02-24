<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ajukan Izin | CV Cipta Manunggal Konsultan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../kontraktor/asset/izinkontraktor.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar">
    <div class="nav-container">
        <div class="logo">CIPTA MANUNGGAL</div>
        <div class="nav-menu">
            <a href="#">Dashboard</a>
            <a href="#">Project</a>
            <a href="#">Laporan</a>
            <a href="#" class="nav-btn">Logout</a>
        </div>
    </div>
</nav>

<!-- ===== HERO ===== -->
<section class="hero">
    <h1>Ajukan Izin Pekerjaan</h1>
    <p>Sistem manajemen proyek terintegrasi untuk kontrol pekerjaan konstruksi</p>
</section>

<!-- ===== FORM SECTION ===== -->
<section class="form-section">
    <div class="form-card">

        <form method="POST">

            <div class="field">
                <label>Jenis Pekerjaan</label>
                <select required>
                    <option value="">Pilih jenis pekerjaan</option>
                    <option>Pekerjaan Persiapan</option>
                    <option>Pekerjaan Struktur</option>
                    <option>Pekerjaan Finishing</option>
                    <option>Pekerjaan Landscape</option>
                </select>
            </div>

            <div class="grid-2">
                <div>
                    <label>Volume</label>
                    <input type="number" required>
                </div>
                <div>
                    <label>Satuan</label>
                    <select required>
                        <option value="">Pilih satuan</option>
                        <option>m²</option>
                        <option>m³</option>
                        <option>unit</option>
                        <option>kg</option>
                        <option>meter</option>
                    </select>
                </div>
            </div>

            <div class="field">
                <label>Material</label>
                <select required>
                    <option value="">Pilih material</option>
                    <option>Beton Ready Mix</option>
                    <option>Besi Beton</option>
                    <option>Bata Ringan</option>
                    <option>Keramik</option>
                    <option>Cat Interior</option>
                </select>
            </div>

            <div class="field">
                <label>Lokasi Pekerjaan</label>
                <select required>
                    <option value="">Pilih lokasi</option>
                    <option>Lantai 1</option>
                    <option>Lantai 2</option>
                    <option>Area Parkir</option>
                    <option>Area Landscape</option>
                </select>
            </div>

            <div class="field">
                <label>Metode Kerja</label>
                <select required>
                    <option value="">Pilih metode kerja</option>
                    <option>Manual</option>
                    <option>Semi Mekanis</option>
                    <option>Mekanis</option>
                    <option>Precast</option>
                </select>
            </div>

            <div class="grid-2">
                <div>
                    <label>Tanggal Mulai</label>
                    <input type="date" required>
                </div>
                <div>
                    <label>Tanggal Selesai</label>
                    <input type="date" required>
                </div>
            </div>

            <button type="submit">Ajukan Izin</button>

        </form>

    </div>
</section>

</body>
</html>
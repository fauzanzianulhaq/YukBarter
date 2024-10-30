    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="/css/berandaUser.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <title>YukBarter</title>
        </head>
        <body>
            <div class="container">
                <!-- Sidebar -->
                <aside class="sidebar">
                    <div class="logo">YukBarter</div>
                    <nav>
                        <a href="#" class="nav-item"><span>🏠</span> Beranda</a>
                        <a href="#" class="nav-item"><span>🔍</span> Jelajahi Barang</a>
                        <a href="#" class="nav-item"><span>👤</span> Profil</a>
                    </nav>
                </aside>
        
                <!-- Main Content -->
                <main class="content">
                    <header>
                        <input type="text" class="search-bar" placeholder="Cari Berdasarkan Nama Kategori">
                        <button class="add-button">+ Tambah</button>
                    </header>
        
                    <!-- Table -->
                    <div class="table-container">
                        <table class="item-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Nama Kategori</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Rak Buku</td>
                                    <td>Perabot</td>
                                    <td>Kondisi 90% baru digunakan 3 minggu. Berguna untuk simpan buku di kos.</td>
                                    <td><span class="status aktif">Aktif</span></td>
                                    <td>
                                        <button class="edit-button">✏️</button>
                                        <button class="delete-button">🗑️</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Speaker</td>
                                    <td>Elektronik</td>
                                    <td>Kondisi 87% sudah digunakan selama 2 bulan. Masih berjalan dengan baik.</td>
                                    <td><span class="status aktif">Aktif</span></td>
                                    <td>
                                        <button class="edit-button">✏️</button>
                                        <button class="delete-button">🗑️</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
        
                    <!-- Pagination -->
                    <div class="pagination">
                        <button class="page-button">« Previous</button>
                        <span class="page-number">1</span>
                        <button class="page-button">Next »</button>
                    </div>
        
                    <!-- Footer -->
                    <footer class="footer">
                        © 2024 All Right Reserved YukBarter.xyz
                    </footer>
                </main>
            </div>
        </body>
        </html>
        
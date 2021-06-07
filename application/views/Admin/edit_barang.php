<!-- Wrapper -->
<div id="main_wrapper">
    <header id="header_part" class="fixed fullwidth_block dashboard">
        <div id="header" class="not-sticky">
            <div class="container">
                <div class="utf_left_side">
                    <div id="logo"> <a href="<?= base_url(); ?>Admin" class="dashboard-logo"><img src="images/logo2.png" alt=""></a> </div>
                    <div class="mmenu-trigger">
                        <button class="hamburger utfbutton_collapse" type="button">
                            <span class="utf_inner_button_box">
                                <span class="utf_inner_section"></span>
                            </span>
                        </button>
                    </div>
                    <nav id="navigation" class="style_one">
                        <ul id="responsive">
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                </div>
                <div class="utf_right_side">
                    <div class="header_widget">
                        <div class="utf_user_menu">
                            <div class="utf_user_name">Hi, Richo</div>
                            <ul>
                                <li><a href="<?= base_url(); ?>User"><i class="sl sl-icon-power"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="clearfix"></div>

    <!-- Dashboard -->
    <div id="dashboard">
        <a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Dashboard</a>
        <div class="utf_dashboard_navigation js-scrollbar">
            <div class="utf_dashboard_navigation_inner_block">
                <ul>
                    <li><a href="<?= base_url(); ?>Admin"><i class="sl sl-icon-plus"></i> Tambah Barang</a></li>
                    <li>
                        <a href="<?= base_url(); ?>Admin_daftarbarang"><i class="sl sl-icon-layers"></i> Daftar Barang</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Content -->
        <div class="utf_dashboard_content">
            <div class="row">
                <div class="col-lg-12">
                    <div id="utf_add_listing_part">
                        <div class="add_utf_listing_section">
                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-note"></i> Edit Barang</h3>
                            </div>
                            <div class="row with-forms">
                                <div class="col-md-12">
                                    <h5>Nama Barang</h5>
                                    <input type="text" class="search-field" name="namabarang" id="namabarang" placeholder="Nama Barang..." value="">
                                </div>
                                <div class="col-md-12">
                                    <h5>Deskripsi Barang</h5>
                                    <textarea name="deskripsibarang" cols="40" rows="3" id="deskripsibarang" placeholder="Deskripsi Barang..." spellcheck="true"></textarea>
                                </div>
                            </div>
                            <div class="row with-forms">
                                <div class="col-md-6">
                                    <h5>Pilih Barang</h5>
                                    <div class="intro-search-field utf-chosen-cat-single">
                                        <select class="selectpicker default" data-selected-text-format="count" data-size="7" title="Pilih Barang" name="pilihbarang" id="pilihbarang">
                                            <option>Alat</option>
                                            <option>Laboratorium</option>
                                            <option>Layanan</option>
                                            <option>Kegiatan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>Pilih Fakultas</h5>
                                    <div class="intro-search-field utf-chosen-cat-single">
                                        <select class="selectpicker default" data-selected-text-format="count" data-size="7" title="Pilih Fakultas" name="pilihfakultas" id="pilihfakultas">
                                            <option>Biologi</option>
                                            <option>Direktorat Penelitian</option>
                                            <option>Ekonomika dan Bisnis</option>
                                            <option>Farmasi</option>
                                            <option>Filsafat</option>
                                            <option>Geografi</option>
                                            <option>Hukum</option>
                                            <option>Ilmu Budaya</option>
                                            <option>Ilmu Sosial dan Politik</option>
                                            <option>Kedokteran</option>
                                            <option>Kedokteran Gigi</option>
                                            <option>Kedokteran Hewan</option>
                                            <option>Kehutanan</option>
                                            <option>Laboratorium Penelitian dan Pengujian Terpadu</option>
                                            <option>Matematika dan Ilmu Pengetahuan Alam</option>
                                            <option>Pertanian</option>
                                            <option>Peternakan</option>
                                            <option>Psikologi</option>
                                            <option>Sekolah Pascasarjana</option>
                                            <option>Sekolah Vokasi</option>
                                            <option>Teknik</option>
                                            <option>Teknologi Pertanian</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row with-forms">
                                <div class="col-md-6">
                                    <h5>Fungsi Utama Barang</h5>
                                    <input type="text" class="search-field" name="fungsiutama" id="fungsiutama" placeholder="Fungsi Utama..." value="">
                                </div>
                                <div class="col-md-6">
                                    <h5>Lokasi Barang</h5>
                                    <input type="text" class="search-field" name="lokasibarang" id="lokasibarang" placeholder="Lokasi Barang..." value="">
                                </div>
                            </div>
                            <div class="row with-forms">
                                <div class="utf_submit_section col-md-12">
                                    <h4>Upload Gambar Barang</h4>
                                    <form action="file-upload" class="dropzone"></form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="<?= base_url(); ?>Admin_daftarbarang" class="button preview"><i class="fa fa-arrow-circle-right"></i> Edit Barang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer_copyright_part">Copyright © 2021 All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>
</div>
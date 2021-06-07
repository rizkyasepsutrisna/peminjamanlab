<!-- Wrapper -->
<div id="main_wrapper">
    <header id="header_part">
        <div id="header">
            <div class="container">
                <div class="utf_left_side">
                    <div id="logo"> <a href="<?= base_url(); ?>User"><img src="images/logo.png" alt=""></a> </div>
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
                        <a href="#dialog_signin_part" class="button border sign-in popup-with-zoom-anim"><i class="fa fa-sign-in"></i> Admin Sign In</a>
                    </div>
                </div>
                <div id="dialog_signin_part" class="zoom-anim-dialog mfp-hide">
                    <div class="small_dialog_header">
                        <h3>Admin Sign In</h3>
                    </div>
                    <div class="utf_signin_form style_one">
                        <div class="tab_container alt">
                            <form method="post" class="login" action="<?= base_url(); ?>Admin">
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="username">
                                        <input type="text" class="input-text" name="username" id="username" value="" placeholder="Username" />
                                    </label>
                                </p>
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="password">
                                        <input class="input-text" type="password" name="password" id="password" placeholder="Password" />
                                    </label>
                                </p>
                                <div class="utf_row_form">
                                    <input type="submit" class="button border margin-top-5" name="login" value="Login" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</header>
<div class="clearfix"></div>

<!-- Banner -->
<div class="search_container_block main_search_block" data-background-image="images/banner.jpg">
    <div class="main_inner_search_block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Peminjaman Alat</h2>
                    <h4>Sistem Informasi Laboratorium</h4>
                    <form method="POST" action="<?= base_url(); ?>Search">
                        <div class="main_input_search_part">
                            <div class="main_input_search_part_item">
                                <input type="text" placeholder="Search..." value="" />
                            </div>
                            <div class="main_input_search_part_item intro-search-field">
                                <select data-placeholder="Select Kategori" class="selectpicker default" title="Select Kategori" data-live-search="true" data-selected-text-format="count" data-size="4">
                                    <option>Alat</option>
                                    <option>Laboratorium</option>
                                    <option>Layanan</option>
                                    <option>Kegiatan</option>
                                </select>
                            </div>
                            <div class="main_input_search_part_item intro-search-field">
                                <select data-placeholder="Select Faculty" class="selectpicker default" title="Select Faculty" data-live-search="true" data-selected-text-format="count" data-size="5">
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
                            <button id="search-button" type="submit" class="button">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- [Information] -->
<section class="fullwidth_block padding-bottom-75">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="headline_part centered margin-top-80">Pemberitahuan</h2>
            </div>
        </div>
        <div class="row container_icon">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box_icon_two box_icon_with_line"> <i class="fa fa-bullhorn"></i>
                    <h3>Info Laboratorium</h3>
                    <p>Informasi Umum tentang Laboratorium terkait. Berisi tentang profil singkat laboratorium dengan dilengkapi keterangan pengelola.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box_icon_two box_icon_with_line"> <i class="fa fa-gavel"></i>
                    <h3>Penggunaan Alat</h3>
                    <p>Sistem penggunaan alat atau fasilitas laboratorium bagi civitas akademika Universitas Gadjah Mada dan pengguna dari kalangan umum.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box_icon_two box_icon_with_line"> <i class="fa fa-flask"></i>
                    <h3>Kunjungi Laboratorium</h3>
                    <p>Ingin tahu tentang laboratorium terkait lebih jauh? Anda dapat menghubungi kami atau laboratorium terkait, sesuai dengan rencana kunjungan Anda.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="row">
    <div class="col-md-12">
        <div class="footer_copyright_part">Copyright © 2021 All Rights Reserved.</div>
    </div>
</div>
</div>
</div>
<div id="bottom_backto_top"><a href="#"></a></div>
</div>
<!-- Wrapper -->
<div id="main_wrapper">
    <header id="header_part">
        <div id="header">
            <div class="container">
                <div class="utf_left_side">
                    <div id="logo"> <a href="<?= base_url() ?>User"><img src="images/logo.png" alt=""></a> </div>
                    <div class="mmenu-trigger">
                        <button class="hamburger utfbutton_collapse" type="button">
                            <span class="utf_inner_button_box">
                                <span class="utf_inner_section"></span>
                            </span>
                        </button>
                    </div>
                    <nav id="navigation" class="style_one">
                    </nav>
                    <div class="clearfix"></div>
                </div>
                <div class="utf_right_side">
                    <div class="header_widget"> <a href="#dialog_signin_part" class="button border sign-in popup-with-zoom-anim"><i class="fa fa-sign-in"></i>Admin Sign In</a></div>
                </div>
                <div id="dialog_signin_part" class="zoom-anim-dialog mfp-hide">
                    <div class="small_dialog_header">
                        <h3>Admin Sign In</h3>
                    </div>
                    <div class="utf_signin_form style_one">
                        <div class="tab_container alt">
                            <div class="tab_content" id="tab1" style="display:none;">
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
    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Detail Alat</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container margin-bottom-75">
        <div class="row">
            <div class="col-lg-8 col-md-8 utf_listing_payment_section">
                <!--CONTENT-->
                <div class="container">
                    <div class="style-2 element_tab">
                        <ul class="utf_tabs_nav">
                            <li class="active"><a href="#tab1a"><i class="sl sl-icon-note"></i> Form Peminjaman</a></li>
                            <li><a href="#tab2a"><i class="sl sl-icon-people"></i> Daftar Pengajuan</a></li>
                            <li><a href="#tab3a"><i class="sl sl-icon-notebook"></i> Jadwal Penggunaan</a></li>
                        </ul>
                        <div class="tab_container">
                            <div class="tab_content" id="tab1a">
                                <div class="container margin-bottom-75">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 utf_listing_payment_section">
                                            <div class="col-lg-12">
                                                <div id="utf_add_listing_part" class="margin-right-80">
                                                    <div class="add_utf_listing_section margin-top-35">
                                                        <div class="utf_add_listing_part_headline_part">
                                                            <h3><i class="sl sl-icon-note"></i> Form Peminjaman</h3>
                                                        </div>
                                                        <div class="row with-forms margin-right-50">
                                                            <form method="POST" action="<?= base_url(); ?>Confirm">
                                                                <div class="col-md-12">
                                                                    <h5>Pilih Pengguna</h5>
                                                                    <select data-placeholder="All Categories" class="form-select form-select-lg mb-3 default" aria-label="Disabled select example" title="All Categories" data-selected-text-format="count" data-size="5">
                                                                        <option selected>== Pilih Pengguna ==</option>
                                                                        <option>Mahasiswa UGM</option>
                                                                        <option>Mahasiswa Non UGM</option>
                                                                        <option>Swasta</option>
                                                                        <option>Pribadi</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h5>Nama Lengkap</h5>
                                                                    <input type="text" id="name" name="name" placeholder="Nama Lengkap">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h5>Email</h5>
                                                                    <input type="text" id="email" name="email" placeholder="Email">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h5>Asal Instansi</h5>
                                                                    <input type="text" id="instansi" name="instansi" placeholder="Instansi">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h5>Nomor HP</h5>
                                                                    <input type="number" id="nomorhp" name="nomorhp" placeholder="Pastikan nomor HP aktif">
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <h5>Nomor Identitas</h5>
                                                                    <input type="number" id="nomoridentitas" name="nomoridentitas" placeholder="Nomor Identitas">
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <h5>Tujuan Penggunaan</h5>
                                                                    <textarea name="tujuanpenggunaan" cols="40" rows="3" id="tujuanpenggunaan" placeholder="Tujuan Penggunaan" spellcheck="true"></textarea>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <h5>Tanggal Penggunaan</h5>
                                                                    <input type="text" placeholder="Pilih Tanggal" id="booking-date-search" name="booking-date-search">
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="row utf_opening_day utf_js_demo_hours">
                                                                        <div class="col-md-12">
                                                                            <h5>Jam Penggunaan</h5>
                                                                            <select class="utf_chosen_select" data-placeholder="Pilih Jam"></select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a href="<?= base_url(); ?>Confirm" class="button preview"><i class="fa fa-arrow-circle-right"></i> Submit</a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content" id="tab2a">
                                <div class="container margin-bottom-75">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 utf_listing_payment_section">
                                            <div class="col-lg-12">
                                                <div id="utf_add_listing_part" class="margin-right-80">
                                                    <div class="add_utf_listing_section margin-top-35">
                                                        <div class="utf_add_listing_part_headline_part">
                                                            <h3><i class="sl sl-icon-people"></i> Daftar Pengajuan</h3>
                                                        </div>
                                                        <div class="row with-forms margin-right-50">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">No</th>
                                                                        <th scope="col">Nama Lengkap</th>
                                                                        <th scope="col">Nama Barang</th>
                                                                        <th scope="col">Tanggal</th>
                                                                        <th scope="col">Jam</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Adam</td>
                                                                        <td>Mikroskop</td>
                                                                        <td>06/13/2021-06/13/2021</td>
                                                                        <td>08:00 WIB</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Adam</td>
                                                                        <td>Mikroskop</td>
                                                                        <td>06/13/2021-06/13/2021</td>
                                                                        <td>08:00 WIB</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Adam</td>
                                                                        <td>Mikroskop</td>
                                                                        <td>06/13/2021-06/13/2021</td>
                                                                        <td>08:00 WIB</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content" id="tab3a">
                                <div class="container margin-bottom-75">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 utf_listing_payment_section">
                                            <div class="col-lg-12">
                                                <div id="utf_add_listing_part" class="margin-right-80">
                                                    <div class="add_utf_listing_section margin-top-35">
                                                        <div class="utf_add_listing_part_headline_part">
                                                            <h3><i class="sl sl-icon-notebook"></i> Jadwal Penggunaan</h3>
                                                        </div>
                                                        <div class="row with-forms margin-right-50">
                                                            <div class="utf_listing_item-container list-layout">
                                                                <div class="utf_listing_item">
                                                                    <div class="utf_listing_item_content">
                                                                        <div class="utf_listing_item-inner">
                                                                            <h3>Adam</h3>
                                                                            <p>Sedang Meminjam</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END CONTENT-->
            <!--Side Bar right-->
            <div class="col-lg-4 col-md-4 margin-top-120 utf_listing_payment_section">
                <div class="utf_booking_listing_item_container compact utf_order_summary_widget_section">
                    <div class="listing-item"> <img src="images/konten.jpeg" alt=""></div>
                </div>
                <div class="boxed-widget opening-hours summary margin-top-0">
                    <ul>
                        <h2>Mikroskop</h2>
                        <li class="total-costs">
                        <li>
                            <h4>Fungsi Utama</h4>
                            <p>Membersihkan dan sterilisasi alat-alat gelas dengan ultrasonic</p>
                        </li>
                        <li class="total-costs">
                        <li>
                            <h4>Lokasi Alat</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </li>
                        <div class="clearfix"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End SideBar Right-->

    <!-- Footer -->
    <div class="row">
        <div class="col-md-12">
            <div class="footer_copyright_part">Copyright © 2021 All Rights Reserved.</div>
        </div>
    </div>
    <div id="bottom_backto_top"><a href="#"></a></div>
</div>
<!-- End Footer -->
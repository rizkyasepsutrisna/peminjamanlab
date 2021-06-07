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
                    <div class="header_widget"> <a href="#dialog_signin_part" class="button border sign-in popup-with-zoom-anim"><i class="fa fa-sign-in"></i>Admin Sign In</a></div>
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
<div class="search_container_block main_search_block" data-background-image="images/banner.jpg">
    <div class="main_inner_search_block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main_input_search_part">
                        <div class="main_input_search_part_item">
                            <input type="text" placeholder="Search..." value="" />
                        </div>
                        <div class="main_input_search_part_item intro-search-field">
                            <select data-placeholder="Select Item" class="selectpicker default" title="Select Item" data-live-search="true" data-selected-text-format="count" data-size="4">
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
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="margin-top-30"></div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="utf_listing_item-container list-layout"> <a href="<?= base_url() ?>Detail" class="utf_listing_item">
                            <div class="utf_listing_item-image">
                                <img src="images/konten.jpeg" alt="">
                            </div>
                            <div class="utf_listing_item_content">
                                <span class="featured_tag">Biologi</span>
                                <div class="utf_listing_item-inner">
                                    <h3>Mikroskop</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="utf_listing_item-container list-layout"> <a href="<?= base_url() ?>Detail" class="utf_listing_item">
                            <div class="utf_listing_item-image">
                                <img src="images/konten.jpeg" alt="">
                            </div>
                            <div class="utf_listing_item_content">
                                <span class="featured_tag">Biologi</span>
                                <div class="utf_listing_item-inner">
                                    <h3>Mikroskop</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="utf_listing_item-container list-layout"> <a href="<?= base_url() ?>Detail" class="utf_listing_item">
                            <div class="utf_listing_item-image">
                                <img src="images/konten.jpeg" alt="">
                            </div>
                            <div class="utf_listing_item_content">
                                <span class="featured_tag">Biologi</span>
                                <div class="utf_listing_item-inner">
                                    <h3>Mikroskop</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="utf_listing_item-container list-layout"> <a href="<?= base_url() ?>Detail" class="utf_listing_item">
                            <div class="utf_listing_item-image">
                                <img src="images/konten.jpeg" alt="">
                            </div>
                            <div class="utf_listing_item_content">
                                <span class="featured_tag">Biologi</span>
                                <div class="utf_listing_item-inner">
                                    <h3>Mikroskop</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="utf_listing_item-container list-layout"> <a href="<?= base_url() ?>Detail" class="utf_listing_item">
                            <div class="utf_listing_item-image">
                                <img src="images/konten.jpeg" alt="">
                            </div>
                            <div class="utf_listing_item_content">
                                <span class="featured_tag">Biologi</span>
                                <div class="utf_listing_item-inner">
                                    <h3>Mikroskop</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="utf_pagination_container_part margin-top-20 margin-bottom-75">
                        <nav class="pagination">
                            <ul>
                                <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                                <li><a href="#" class="current-page">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
    </div>
</div>
</div>
</div>
<div id="bottom_backto_top"><a href="#"></a></div>
</div>
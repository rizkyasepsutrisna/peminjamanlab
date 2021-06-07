<!-- Wrapper -->
<div id="main_wrapper">
    <header id="header_part" class="fixed fullwidth_block dashboard">
        <div id="header" class="not-sticky">
            <div class="container">
                <div class="utf_left_side">
                    <div id="logo"><a href="<?= base_url(); ?>Admin"" class=" dashboard-logo"><img src="images/logo2.png" alt=""></a> </div>
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
                    <li class="active">
                        <a href="<?= base_url(); ?>Admin_daftarbarang"><i class="sl sl-icon-layers"></i> Daftar Barang</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="utf_dashboard_content">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="utf_dashboard_list_box margin-top-0">
                        <h4><i class="sl sl-icon-list"></i> Daftar Barang</h4>
                        <ul>
                            <li>
                                <div class="utf_list_box_listing_item">
                                    <div class="utf_list_box_listing_item-img"><a href="#"><img src="images/konten.jpeg" alt=""></a></div>
                                    <div class="utf_list_box_listing_item_content">
                                        <div class="inner margin-top-50">
                                            <h3>Mikroskop</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                when an unknown printer took a galley of type and scrambled it to make a type
                                                specimen book. It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was popularised in
                                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                                                more recently with desktop publishing software like Aldus PageMaker including versions
                                                of Lorem Ipsum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="<?= base_url(); ?>Admin_editbarang" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="#" class="button gray"><i class="fa fa-trash-o"></i> Delete</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="utf_pagination_container_part margin-top-30 margin-bottom-30">
                        <nav class="pagination">
                            <ul>
                                <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                                <li><a href="#" class="current-page">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer_copyright_part">Copyright © 2021 All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="wrapper">

    <!--/. NAV TOP  -->
    <nav  class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li <?=$this->uri->segment(1) == 'beranda' || $this->uri->segment(1) == '' ? 'class="active-menu"' : ''?>>

                    <a href="<?=site_url('beranda')?>">
                        <i class="fa fa-dashboard"></i> <span>Beranda</span>
                    </a>
                </li>
                <li <?=$this->uri->segment(1) == 'user' ? 'class="active-menu"' : ''?>> 
                    <a href="<?=site_url('user')?>">
                        <i class="fa fa-users"></i>
                        <span>User</span>
                    </a>
                </li>
                <li <?=$this->uri->segment(1) == 'supplier' ? 'class="active-menu"' : ''?>> 
                    <a href="<?=site_url('supplier')?>">
                        <i class="fa fa-users"></i>
                        <span>Supplier</span>
                    </a>
                </li>
                <li <?=$this->uri->segment(1) == 'barang' ? 'class="active-menu"' : ''?>> 
                    <a href="<?=site_url('barang')?>">
                       <i class="fa fa-asterisk"></i>
                       <span>Barang</span>
                   </a>
               </li>
               <li>
                <a href="#"><i class="fa fa-th-list"></i> Transaksi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li <?=$this->uri->segment(1) == 'menyuplai' ? 'class="active-menu"' : ''?>> 
                        <a href="<?=site_url('menyuplai')?>">Transaksi Supplier</a>
                    </li>
                    <li <?=$this->uri->segment(1) == 'pemesanan' ? 'class="active-menu"' : ''?>> 
                        <a href="<?=site_url('pemesanan')?>">Transaksi Customer</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-book"></i>Laporan<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li <?=$this->uri->segment(1) == 'laporan_barang' ? 'class="active-menu"' : ''?>> 
                        <a href="<?=site_url('laporan_barang')?>">Laporan Barang</a>
                    </li>
                     <li <?=$this->uri->segment(1) == 'laporan_supplier' ? 'class="active-menu"' : ''?>> 
                        <a href="<?=site_url('laporan_supplier')?>">Laporan Supplier</a>
                    </li>
                    <li <?=$this->uri->segment(1) == 'laporan_customer' ? 'class="active-menu"' : ''?>> 
                        <a href="<?=site_url('laporan_customer')?>">Laporan Customer</a>
                    </li>
                    <li <?=$this->uri->segment(1) == 'laporan_menyuplai' ? 'class="active-menu"' : ''?>> 
                        <a href="<?=site_url('laporan_menyuplai')?>">Laporan Transaksi Supplier</a>
                    </li>
                    <li <?=$this->uri->segment(1) == 'laporan_pemesanan' ? 'class="active-menu"' : ''?>> 
                        <a href="<?=site_url('laporan_pemesanan')?>">Laporan Transaksi Customer</a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
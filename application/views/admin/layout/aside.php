<!-- BEGIN SIDEBAR -->
<div class="sidebar-scroll">
    <div id="sidebar" class="nav-collapse collapse">

        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <div class="navbar-inverse">
        <form class="navbar-search visible-phone">
            <input type="text" class="search-query" placeholder="Search" />
        </form>
        </div>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <li class="sub-menu active">
                <a class="" href="<?php echo base_url();  ?>index.php/dashboard">
                    <i class="icon-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon-cogs"></i>
                    <span>Master Data</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?php echo base_url();  ?>ruangan">Ruangan</a></li>
                    <?php 
                    foreach($ruang as $item)
                    {
                        echo '<li>'.anchor('ruangan/'.$item->id, $item->nama_ruang).'</li>';
                    }
                    ?>
                </ul>
            </li>
            
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->
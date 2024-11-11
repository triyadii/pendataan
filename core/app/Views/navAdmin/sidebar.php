<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url() ?>Dashboard_">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#master_nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-database"></i><span>Master</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="master_nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <?php
                if ($hakAkses == 1) { ?>
                    <li>
                        <a href="<?= base_url() ?>User_">
                            <i class="bi bi-circle"></i><span>User</span>
                        </a>
                    </li>
                <?php
                }
                ?>
                <li>
                    <a href="<?= base_url() ?>Pendataan_">
                        <i class="bi bi-circle"></i><span>Pendataan</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>

</aside><!-- End Sidebar-->
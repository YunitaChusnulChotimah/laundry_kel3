<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .bg_menu {
            background-image: Linear-gradient(#203c90, #646a948c);
        }
    </style>
</head>
</body>

<ul class="navbar-nav bg_menu bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Laundry Online</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>konsumen">
            <i class="fas fa-users"></i>
            <span>Data Konsumen</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>paket">
            <i class="fas fa-box-open"></i>
            <span>Data Paket</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>transaksi/tambah">
            <i class="fas fa-dollar-sign"></i>
            <span>Tambah Transaksi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>transaksi/riwayat">
            <i class="fas fa-history"></i>
            <span>Riwayat Transaksi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>laporan">
            <i class="fas fa-file-alt"></i>
            <span>Laporan</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>login/logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->


</ul>
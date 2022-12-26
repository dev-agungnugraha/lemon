<?php

// Beranda
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
});

// Beranda > Penulis
Breadcrumbs::for('admin.author.index', function($trail){
    $trail->parent('admin.dashboard');
    $trail->push('Data Penulis', route('admin.author.index'));
});

// Beranda > Penulis > Tambah
Breadcrumbs::for('admin.author.create', function($trail){
    $trail->parent('admin.author.index');
    $trail->push('Tambah Penulis', route('admin.author.create'));
});

// Beranda > Penulis > Edit
Breadcrumbs::for('admin.author.edit', function($trail, $author){
    $trail->parent('admin.author.index');
    $trail->push('Edit Penulis', route('admin.author.edit', $author));
});

// Beranda > Pegawai
Breadcrumbs::for('admin.pegawai.index', function($trail){
    $trail->parent('admin.dashboard');
    $trail->push('Data Pegawai', route('admin.pegawai.index'));
});

// Beranda > Pegawai > Tambah
Breadcrumbs::for('admin.pegawai.create', function($trail){
    $trail->parent('admin.pegawai.index');
    $trail->push('Tambah Pegawai', route('admin.pegawai.create'));
});

// Beranda > Pegawai > Edit
Breadcrumbs::for('admin.pegawai.edit', function($trail, $author){
    $trail->parent('admin.pegawai.index');
    $trail->push('Edit Pegawai', route('admin.pegawai.edit', $author));
});

// Beranda > Paket
Breadcrumbs::for('admin.paket.index', function($trail){
    $trail->parent('admin.dashboard');
    $trail->push('Data paket', route('admin.paket.index'));
});

// Beranda > paket > Tambah
Breadcrumbs::for('admin.paket.create', function($trail){
    $trail->parent('admin.paket.index');
    $trail->push('Tambah paket', route('admin.paket.create'));
});

// Beranda > paket > Edit
Breadcrumbs::for('admin.paket.edit', function($trail, $author){
    $trail->parent('admin.paket.index');
    $trail->push('Edit paket', route('admin.paket.edit', $author));
});

// Beranda > book
Breadcrumbs::for('admin.book.index', function($trail){
    $trail->parent('admin.dashboard');
    $trail->push('Data Buku', route('admin.book.index'));
});

// Beranda > book > Tambah
Breadcrumbs::for('admin.book.create', function($trail){
    $trail->parent('admin.book.index');
    $trail->push('Tambah Buku', route('admin.book.create'));
});

// Beranda > book > Edit
Breadcrumbs::for('admin.book.edit', function($trail, $author){
    $trail->parent('admin.book.index');
    $trail->push('Edit Buku', route('admin.book.edit', $author));
});

// Beranda > kontrak
Breadcrumbs::for('admin.kontrak.index', function($trail){
    $trail->parent('admin.dashboard');
    $trail->push('Data Kontrak', route('admin.kontrak.index'));
});

// Beranda > kontrak > Tambah
Breadcrumbs::for('admin.kontrak.create', function($trail){
    $trail->parent('admin.kontrak.index');
    $trail->push('Tambah Kontrak', route('admin.kontrak.create'));
});

// Beranda > kontrak > Edit
Breadcrumbs::for('admin.kontrak.edit', function($trail, $author){
    $trail->parent('admin.kontrak.index');
    $trail->push('Edit Kontrak', route('admin.kontrak.edit', $author));
});

// Beranda > Progers Kegiatan
Breadcrumbs::for('admin.progreskegiatan.index', function($trail){
    $trail->parent('admin.dashboard');
    $trail->push('Data Progres Kegiatan', route('admin.progreskegiatan.index'));
});

// Beranda > Progers Kegiatan > Tambah
Breadcrumbs::for('admin.progreskegiatan.create', function($trail){
    $trail->parent('admin.kontrak.index');
    $trail->push('Tambah Progres Kegiatan', route('admin.progreskegiatan.create'));
});

// Beranda > Progers Kegiatan > Edit
Breadcrumbs::for('admin.progreskegiatan.edit', function($trail, $author){
    $trail->parent('admin.kontrak.index');
    $trail->push('Edit Progres Kegiatan', route('admin.progreskegiatan.edit', $author));
});
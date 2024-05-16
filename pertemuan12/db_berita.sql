
create table tblKategori (
    idKategori int not null primary key auto_increment,
    nama_kategori varchar(100) not null
);

create table tblBerita (
    idBerita int not null primary key auto_increment,
    judulBerita varchar(100) not null,
    isiBerita text not null,
    penulis varchar(100) not null,
    tgldipublish datetime not null,
    idKategori int not null,
    foreign key (idKategori) references tblKategori(idKategori)
);

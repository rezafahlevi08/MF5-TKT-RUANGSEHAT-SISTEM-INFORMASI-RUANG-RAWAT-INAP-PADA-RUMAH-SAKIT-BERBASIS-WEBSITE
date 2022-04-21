
use ruang_sehat;

show tables;

select * from tb_user

drop tables tb_pasein

create table tb_pasien(
id_pasien varchar(20) primary key,
nama_pasien varchar(20) not null,
nik varchar(20) not null,
no_bpjs varchar(20) not null,
tgl_lahir date not null, 
tempat_lahir varchar(20) not null,
jenis_kelamin char (10) not null,
alamat text not null,
no_telepon varchar(20) not null,
riwayat_penyakit varchar(20) not null
);


INSERT INTO `tb_pasien` (`id_pasien`, `nama_pasien`, `nik`, `no_bpjs`, `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `alamat`, `no_telepon`, `riwayat_penyakit`) VALUES ('P1', 'Ahmad', '110121022', 'BPJS0909', '2004-04-13', 'Bandung', 'Laki Laki', 'Jalan Lampriet', '09019212', 'Malaria');
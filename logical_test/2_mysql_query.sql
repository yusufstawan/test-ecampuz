SELECT mhs_nama FROM tb_mahasiswa WHERE nilai = (SELECT MAX(nilai_mk303) FROM tb_matakuliah WHERE mk_kode = 'MK303')
<?php

class About {
	public function index($nama = 'Faza Iman Imron', $pekerjaan = 'siswa SMKN 1 BANYUWANGI jurusan RPL kelas 11')
	{
		echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
	}

	public function page()
	{
		echo ' About/page';
	}
}
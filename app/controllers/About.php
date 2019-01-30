<?php

class About {
	public function index($nama = 'Faza', $pekerjaan = 'siswa SMK kelas 11')
	{
		echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
	}
	public function page()
	{
		echo 'About/page';
	}
}
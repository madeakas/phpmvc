<?php

class Mahasiswa_model
{
  private $mhs = [
    [
      "nama" => "Doddy Ferdiansyah",
      "nrp" => "131222444",
      "email" => "Doddy@gmail.com",
      "jurusan" => "Teknik Informatika",
    ],
    [
      "nama" => "Marsela Maharani",
      "nrp" => "111322244",
      "email" => "Marsela@gmail.com",
      "jurusan" => "Teknik Industri",
    ],
    [
      "nama" => "Lesti Hanidewi",
      "nrp" => "131242744",
      "email" => "Lesti@gmail.com",
      "jurusan" => "Teknik Informatika",
    ],
    [
      "nama" => "Nabila Ramadani",
      "nrp" => "134232514",
      "email" => "Nabila.Ramadhani@gmail.com",
      "jurusan" => "Farmasi",
    ],
    [
      "nama" => "Bayu Segara",
      "nrp" => "152622643",
      "email" => "Bayu.segara@gmail.com",
      "jurusan" => "Teknik Informatika",
    ],
  ];



  public function getAllMahasiswa()
  {
    return $this->mhs;
  }
}

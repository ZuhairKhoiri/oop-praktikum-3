<?php
class Mahasiswa{
    public string $nim;
    public string $nama;

    public function setNim (string $a){
        $this->nim = $a;
    }
    public function setNama (string $b){
        $this->nama = $b;
    }
}

class Krs extends Mahasiswa {
    protected string $matakuliah;
    public function getNim(){
        return $this->nim;
    }
    public function getNama(){
        return $this->nama;
    }
    public function setMatakuliah(string $c) {
        return $this->matakuliah = $c;
    }
}

class Nilai extends Krs {
    private static int $nilai = 90;
    public function getMatakuliah() {
        return $this->matakuliah;
    }
    public function getNilai() {
        return self::$nilai;
    }
}

$nilai = new Nilai ();

//memanggil class mahasiswa
$nilai->setNim("2207101066");
$nilai->setNama("Zuhair");

//memanggil class Krs
$nilai->
setMatakuliah("Pemrograman Web 3");

echo "<p>Nim = ". $nilai->getNim() ."</p>";
echo "<p>Nama = ". $nilai->getNama() ."</p>";
echo "<p>Mata kuliah = ". $nilai->getMatakuliah() ."</p>";
echo "<p>Nilai = ". Nilai::getNilai(90) ."</p>";
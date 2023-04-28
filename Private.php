<?php
class Mahasiswa {
    private string $nim;
    public string $nama;

    public function setNim(string $a) {
        $this->nim = $a;
    }
    public function setNama(string $b) {
        $this->nama = $b;
    }
    public function getNim() {
        return $this->nim;
    }
}

$mhsw = new Mahasiswa;
$mhsw->setNim("2207101066");
$mhsw->setNama("Zuhair");

echo "<p>" . $mhsw->getNim() ."</p>";
echo "<p>" . $mhsw->nama ."</p>";
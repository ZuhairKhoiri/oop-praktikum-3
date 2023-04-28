<?php
class Mahasiswa {
    private string $nim = "2207101066";
    protected string $nama = "Zuhair";
}
class Nilai extends Mahasiswa {
    public function getNim() {
        return $this->nim;
    }
    public function getNama() {
        return $this->nama;
    }
}

$mhsw = new Nilai();

echo "<p>" . $mhsw->getNim() . "</p>";
echo "<p>" . $mhsw->getNama() . "</p>";
<?php
class Mahasiswa{
    // Variabel
    public $nim;
    public $nama;
    public $kuliah;
    public $mata_kuliah;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    // Constructor
    public function __construct($nim, $nama, $kuliah, $mata_kuliah, $nilai){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->mata_kuliah = $mata_kuliah;
        $this->nilai = $nilai;

        // Menghitung grade dan predikat berdasarkan nilai
        $this->hitungGrade();
        $this->hitungPredikat();
        // Menghitung status berdasarkan nilai
        $this->hitungStatus();
    }

    // Method untuk menghitung grade
    private function hitungGrade() {
        if ($this->nilai >= 85) {
            $this->grade = 'A';
        } elseif ($this->nilai >= 75) {
            $this->grade = 'B';
        } elseif ($this->nilai >= 60) {
            $this->grade = 'C';
        } elseif ($this->nilai >= 40) {
            $this->grade = 'D';
        } else {
            $this->grade = 'E';
        }
    }

    // Method untuk menghitung predikat
    private function hitungPredikat() {
        if ($this->nilai >= 85) {
            $this->predikat = 'Sangat Memuaskan';
        } elseif ($this->nilai >= 75) {
            $this->predikat = 'Memuaskan';
        } elseif ($this->nilai >= 60) {
            $this->predikat = 'Cukup';
        } elseif ($this->nilai >= 40) {
            $this->predikat = 'Kurang';
        } else {
            $this->predikat = 'Sangat Kurang';
        }
    }

    // Method untuk menghitung status
    private function hitungStatus() {
        if ($this->nilai >= 65) {
            $this->status = 'Lulus';
        } else {
            $this->status = 'Tidak Lulus';
        }
    }   
}
?>

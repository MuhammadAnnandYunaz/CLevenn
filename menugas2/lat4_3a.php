<?php
class mahasiswa
{
    private $nama;
    private $nim;
    function __construct(
        $a = "Muhammad Annand Yunaz <br>",
        $b = "G.211.21.0075"
    ) {
        $this->nama = $a;
        $this->nim = $b;
    }
    function setNama($a)
    {
        $this->nama = $a;
    }
    function setNim($b)
    {
        $this->nim = $b;
    }
    function getNama()
    {
        return $this->nama;
    }
    function getNim()
    {
        return $this->nim;
    }
}

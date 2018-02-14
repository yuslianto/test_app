<?php
  // membuat class methodApps
  class methodApps {
    // membuat method untuk class methodApps
    public function Biodata ($nama = "Yuslianto",
                            $alamat = "Jl Palem",
                            $hobi = "Tenis Meja",
                            $skill = "HTMl, CSS, PHP, JS",
                            $status = "Single",
                            $agama = "Islam",
                            $umur = 22) {
      return "Nama = $nama <br />
              Agama = $agama <br />
              Alamat = $alamat <br />
              Status = $status <br />
              Hobi = $hobi <br />
              Skil = $skill <br />
              Umur = $umur Tahun<br />
              ";
    }
  }

// membuat objek dari class Biodata
$yusliantoBiodata = new methodApps();

echo $yusliantoBiodata-> Biodata();

?>

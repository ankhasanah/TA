<?php
mysql_connect("localhost","root","");
mysql_select_db("nisasekripsi");

       if(isset($_POST['submit'])){
            $pilihan=$_POST["pilihan"];
            $id_soal=$_POST["id"];
            $jumlah=$_POST['jumlah'];

            
            
            $score=0;
            $benar=0;
            $salah=0;
            $kosong=0;
            
            for ($i=0;$i<$jumlah;$i++){
                //id nomor soal
                $nomor=$id_soal[$i];
                
                //jika user tidak memilih jawaban
                if (empty($pilihan[$nomor])){
                    $kosong++;
                }else{
                    //jawaban dari user
                    $jawaban=$pilihan[$nomor];
                    
                    //cocokan jawaban user dengan jawaban di database
                    
                    $query="SELECT * FROM `mchatr/f` where id_mchatrf='$nomor' and kunci_jwb='$jawaban'";
                    $coba=mysql_query($query);
                    $cek=mysql_num_rows($coba);
                    
                    if($cek){
                        //jika jawaban cocok (benar)
                        $benar++;
                    }else{
                        //jika salah
                        $salah++;
                    }
                    
                } 
                /*RUMUS
                Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan 
                hasil= 100 / jumlah soal * jawaban yang benar
                */
                $result="SELECT * FROM `mchatr/f`";
                $hasil=mysql_query($result);
                $jumlah_soal=mysql_num_rows($hasil);
                $score = 100/$jumlah_soal*$benar;
                $hasil = number_format($score,1);
            }
        }

        //Lakukan Penyimpanan Kedalam Database
        
        if ($benar<3) {
            $benar="INSERT INTO `pengguna`(`diagnosa`) VALUES([Resiko Rendah])";
            $buff=mysql_query($benar);
            echo "Resiko Rendah";

        }else if (2 < $benar && $benar < 8) {
            echo "Resiko Medium";
            header("location:follow.php");
        }else if (9 < $benar && $benar < 21) {
            echo "Resiko Tinggi";
        }
        ?>
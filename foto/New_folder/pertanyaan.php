<?php
mysql_connect("localhost","root","");
mysql_select_db("nisasekripsi");
    
 echo '<table width="100%" border="0">';

        $query="SELECT * FROM `mchatr/f`";
        $result = mysql_query($query) or die("gagal melakukan query");
        $jumlah=mysql_num_rows($result);
        $urut=0;
        while($row =mysql_fetch_array($result))
        {
            $id=$row["id_mchatrf"];
            $pertanyaan=$row["pertanyaan"];
            $pilihan_y=$row["y"];
            $pilihan_n=$row["n"];
            
            ?>
            <form name="form1" method="post" action="jawaban.php">
            <input type="hidden" name="id[]" value=<?php echo $id; ?>>
            <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
            <tr>
                  <td width="17"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
                  <td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
            </tr>
            <?php
                if (!empty($row["gambar"])) {
                    echo "<tr><td></td><td><img src='foto/$row[gambar]' width='200' hight='200'></td></tr>";
                }
            ?>
            <tr>
                  <td height="21"><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
                <input name="pilihan[<?php echo $id; ?>]" type="radio" value="y" required>  
                <?php echo "$pilihan_y";?></font> </td>
            </tr>
            <tr>
                  <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
                <input name="pilihan[<?php echo $id; ?>]" type="radio" value="n" required>
                <?php echo "$pilihan_n";?></font> </td>
            </tr>
            
        <?php
        }
        ?>
            <tr>
                <td>&nbsp;</td>
                  <td><input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
            </tr>
            </table>
</form>
        </p>
</div>
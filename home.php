<article>
  <div id="form" style="text-align:center">
    <form method="post" action="">
      <p>Masukkan Kata :</p>
      <input type="text" name="kata" id="kata" size="100" placeholder="..."
        value="<?php if(isset($_POST['kata'])) { echo $_POST['kata']; } else { echo ''; }?>">
      <br />
      <button type="submit" name="submit">Submit</button>
    </form>
    <br />
    <?php 
    if(isset($_POST['kata'])) {
      $teksAsli = $_POST['kata'];
      echo "<p>teks asli : " .$teksAsli. "</p>";
      $stemming = stemming($teksAsli);
      echo "<p>kata dasar : <b>" .$stemming. "</b></p>";
      }
    ?>
  </div>
</article>
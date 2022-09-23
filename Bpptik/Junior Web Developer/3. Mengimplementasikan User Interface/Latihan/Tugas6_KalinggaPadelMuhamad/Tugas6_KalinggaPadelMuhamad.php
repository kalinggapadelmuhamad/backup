<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Tugas6_KalinggaPadelMuhamad.css">

    <title>TO COMPUTE</title>
  </head>
  <body>
    <!-- navbar section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4 mb-5">
        <a class="navbar-brand" href="#">TO COMPUTE</a>
    </nav>
    <!-- end of navbar -->

    <!-- main form -->
    <section id="mainForm" class="mt-5 py-3 px-3">
      <form method="post" action="">
        <div class="form-group">
          <label for="angka1">*Masukan Angka Pertama</label>
          <input type="number" class="form-control" id="angka1" name="angka1" required="">
          <label for="angka2">*Masukan Angka Kedua</label>
          <input type="number" class="form-control" id="angka2" name="angka2" required="">
          <label for="angka2">*Pilih Operator</label>
          <select class="custom-select" id="inputGroupSelect02" name="Operator">
            <option value="1">+</option>
            <option value="2">-</option>
            <option value="3">x</option>
            <option value="4">:</option>
          </select>
        </div>
  <button type="submit" class="btn btn-primary hitung" name="Hitung">Hitung</button>
</form>
    </section>
    <?php if (isset($_POST['Hitung'])) {
      $angka1 = $_POST['angka1'];
      $angka2 = $_POST['angka2'];
      $op     = $_POST['Operator'];
      switch ($op) {
        case '1':
          $angka1 += $angka2;
          echo '<div class="hasil mt-2">
                   <p>Hasil Kamu adalah : '.$angka1.'</p>
                </div>';
          break;

         case '2':
         $angka1 -= $angka2;
          echo '<div class="hasil mt-2">
                   <p>Hasil Kamu adalah : '.$angka1.'</p>
                </div>';
          break;

           case '3':
           $angka1 *= $angka2;
          echo '<div class="hasil mt-2">
                   <p>Hasil Kamu adalah : '.$angka1.'</p>
                </div>';
          break;

           case '4':
           $angka1 /= $angka2;
          echo '<div class="hasil mt-2">
                   <p>Hasil Kamu adalah : '.$angka1.'</p>
                </div>';
          break;
        
        default:
          # code...
          break;
      }

      
    } else {
          echo '<div class="hasil mt-2">
                   <p>Hasil Kamu adalah : 0</p>
                </div>';
      }?>
    <!-- end of main form -->
    <!-- Footer -->
    <footer class="fixed-bottom">
      <p class="text-center text-white">Built With Love by Padel</p>
    </footer>
    <!-- end of footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
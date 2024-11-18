<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $number = mysqli_real_escape_string($db, $_POST['number']);
    $email= mysqli_real_escape_string($db, $_POST['email']);
    $from = mysqli_real_escape_string($db, $_POST['form']);
    $message = mysqli_real_escape_string($db, $_POST['message']);



    $query = "INSERT INTO contact (Name, Number,Email,From,Message)
              VALUES ('$name','$number', '$email','$from',$message')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Pesan Terkirim!');
                window.location.href = 'http://localhost/landingpage_azahra/index.php#contact';
              </script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
        window.location.href = 'http://localhost/landingpage_azahra/index.php#contact';

    }

    mysqli_close($koneksi);
}
?>
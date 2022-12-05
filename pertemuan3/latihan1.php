<?php
// Pengulangan
// for 
// while
// do.. while
// foreach : perulangan khusus array

//  for ($i=0; $i < 5 ; $i++) { 
//     # code...
//     echo "Hello Worl! <br>";
//  }

// $i = 0;
// while ($i < 10) {
//     # code...
//     echo "Hello World <br>";
//     $i++;
// }

// $i = 0;
// do {
//     # code...
//     echo "Hello hanafie <br>";
//     $i++;
// } while ($i < 10);
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="1">
        <?php for ($i = 0; $i <= 5; $i++): ?>
        <?php if ($i % 2 == 0): ?>
        <tr class="warna-baris">
            <?php else: ?>
        <tr>
            <?php endif; ?>
            <?php for ($j = 0; $j <= 5; $j++): ?>
            <td>
                <?php echo "$i, $j"; ?>
            </td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>

</body>

</html>
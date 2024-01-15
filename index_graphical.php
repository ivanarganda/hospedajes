<?php 
    require_once("./headers.php");
    $input = trim(file_get_contents('./inputEntry.txt'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./assets/tailwind.css"></script>
    <title>Document</title>
</head>
<body class='bg-gray-300 w-full flex flex-col h-screen'>
<section class='flex flex-col justify-center items-center w-2/3 m-auto'>
    <h4 class='w-full text-gray-700 font-bold flex flex-row justify-center items-center mb-10 text-2xl'>
        <?php if ( !empty( $input ) ){ ?>
            Hospedajes conteniendo: "<?php echo $input; ?>"
        <?php } else { ?>
            Todos los Hospedajes
        <?php } ?>
    </h4>
    <article class='flex flex-col justify-center w-full bg-white rounded-xl p-10 gap-5'>
         <?php

            $hospedajes = $hospedajeController->buscarHospedajesPorNombre($input);

            echo getContent( $hospedajes , $input ,  false );

            $conn->close();

        ?>
    </article>
   
</section>

</body>
</html>




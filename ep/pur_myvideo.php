<?php
include "conn.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="crclick.css">
</head>

<body>

    <nav>
 

        <div id="title">
            <h2>
                <?php echo $_POST['cri_t'] ?>
            </h2>
        </div>
        <div id="imgdsc">


            <span id="img">
                <img src="host\hostimg\<?php echo $_POST['cri_img']?>">
            </span>
            <span id="dsc">
                <h3>
                    <?php echo $_POST['cri_d'] ?>
                </h3>
                <span id="cri_p"> price :</span>
                <span id="cri_o">
                    <?php echo $_POST['cri_o'] ?>
                </span>
                <span id="cri_s">
                    <?php echo $_POST['cri_s'] ?>
                </span>
                
            </span>
           
           
        </div>
       




        <?php
        $vqr=$_POST['cri_id'];
                $sql1 = "SELECT * FROM video  WHERE video_cr_id = {$vqr}";
$result1 = mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){
    while($row=mysqli_fetch_assoc($result1)){
?>


                <video playsinline autoplay muted loop width="40%">
                    <source src="host\hostimg\<?php echo $row['video_link']?>">
                </video>
                <?php }  }?>
    </nav>
</body>

</html>
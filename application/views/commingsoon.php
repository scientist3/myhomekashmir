<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    /* Set height to 100% for body and html to enable the background image to cover the whole page: */
    body,
    html {
      height: 100%
    }

    .bgimg {
      /* Background image */
      background-image: url('https://www.w3schools.com/w3images/forestbridge.jpg');
      /* Full-screen */
      height: 100%;
      /* Center the background image */
      background-position: center;
      /* Scale and zoom in the image */
      background-size: cover;
      /* Add position: relative to enable absolutely positioned elements inside the image (place text) */
      position: relative;
      /* Add a white text color to all elements inside the .bgimg container */
      color: white;
      /* Add a font */
      font-family: "Courier New", Courier, monospace;
      /* Set the font-size to 25 pixels */
      font-size: 25px;
    }

    /* Position text in the top-left corner */
    .topleft {
      position: absolute;
      top: 0;
      left: 16px;
    }

    /* Position text in the bottom-left corner */
    .bottomleft {
      position: absolute;
      bottom: 0;
      left: 16px;
    }

    /* Position text in the middle */
    .middle {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    /* Style the <hr> element */
    hr {
      margin: auto;
      width: 40%;
    }
  </style>
</head>

<body>
  <div class="bgimg">
    <div class="topleft">
      <p>Logo</p>
    </div>
    <div class="middle">
      <h1>COMING SOON</h1>
      <hr>
      <p><?php echo $days; ?></p>
      <p>
        <?php echo "My name is : " . $complexData['name'] . "<br>"; ?>
        <?php echo "My age is : " . $complexData['age'] . "<br>"; ?>
        <?php echo "My phone is : " . $complexData['phone'] . "<br>"; ?>
        <?php //print_r($complexData); 
        ?>
      </p>
    </div>
    <div class="bottomleft">
      <p>Some text</p>
    </div>
  </div>
</body>

</html>
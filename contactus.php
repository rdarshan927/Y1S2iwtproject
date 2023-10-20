<?php
      include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="contactus.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylecontact.css"> 
</head>
<body>

<div class="conbox">

            <h2 class="headcon"> <u> Contact US </u> </h2>
            
            <p class="para2">If you have questions, suggestions, or feedback, our Contact
                Us page is the gateway to connect with us. </p>

            <img class="imdg" src="contact/connt.png" height="250px" width="250px">
            
            <div class="para1">
            <p>We have 2 braches where You can vist us.<br>
                <div class="loca1">
                 <h4 class="h4">Head Office</h4>  <p class="pi12">No 104, Royal Pearl Garden 11th Ln, Wattala</p>
                </div><br>

                <div class="loca1">
                    <h4 class="h4">Office</h4>  <p class="pi12">No 1, Kandy road ,Kadawatha </p>
                   </div>
            </p>
            </div>
            <div class="map"> 
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1931450275492!2d79.88269557420213!3d6.986515517611276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f7e0d6922657%3A0x9d09fc06c6cb3a4c!2sRoyal%20pearl%20residencies!5e0!3m2!1sen!2slk!4v1696616227125!5m2!1sen!2slk"
                 width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

                <div class="loca2">
                 <h4 class="h4">Telephone</h4> <br> <button class="btn A" onclick="display()">Click To Get Call details</button>
                </div>

                <div class="loca3">
                    <h4 class="h4">E- Mail</h4> <br> <button class="btn A" onclick="displaymail()">Click To Get Call details</button>
                   </div>

                   <div class="loca4">
                    <h4 class="h4">Social Media</h4> <br><button class="btn A" onclick="displayusername()">Click To Get Our Facebook </button>
                   </div>

        </div>

</body>
</html>


<?php
      include 'footer.php';
?>

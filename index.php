<?php
/**
  Counties in the Republic of Kenya,Governors and their Political Parties.
*/

$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee,
3. Kilifi. – Amason Jeffah Kingi – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Fahim Yasin Twaha – Jubilee,
6. Taita-Taveta. – Granton Samboja – WDM K,
7. Garissa. – Ali Bunow Korane – Jubilee,
8. Wajir. – Mohamed Abdi Mohamud – Jubilee,
9. Mandera. – Ali Ibrahim Roba - Jubilee,
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
11. Isiolo – Mohamed Abdi Kuti – Independent,
12. Meru – Kiraitu Murungi – Jubilee,
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
14. Embu – Martin Nyaga Wambora – Jubilee,
15. Kitui – Charitu Ngilu – Narc Kenya,
16. Machakos – Alfred Mutua – CCM,
17. Makueni – Kivutha Kibwana – WDM K.,
18. Nyandarua – Francis Kimemia – Jubilee,
19. Nyeri – Mutahi Kahiga – Jubilee,
20. Kirinyaga. – Ann Waiguru – Jubilee,
21. Murang’a – Mwangi wa iria – Jubilee,
22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
23. Turkana. – Josphat Nanok – ODM,
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
27. Uasin gishu. – Jackson Mandago – Jubilee,
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
29. Nandi. – Stephen Sang – Jubilee,
30. Baringo – Stanley K Kipris. – Jubilee,
31. Laikipia – Ndiritu Muriithi – Independent,
32. Nakuru. – Lee Kinyanjui – Jubilee,
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
34. Kajiado. – Joseph Ole Lenku – Jubilee,
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
36. Bomet. – Hillary Barchok – Jubilee,
37. Kakamega. – Wyclife Oparanya – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
40. Busia. – Sospeter Ojaamong – ODM,
41. Siaya. – Cornel Rasanga. – ODM,
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
43. Homabay. – Cyprian Awiti – ODM,
44. Migori. – Zachary Okoth Obado – ODM,
45. Kisii. – James Ongware – ODM,
46. Nyamira. – John Nyangarama Obiena - ODM,
47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";

/**
 You should not modify anything above this line
*/

// @TODO : Your code starts here

/*
EXTRA WORK DONE
-Added  Kenya coat of arm to make the table look offical
-Added a background color to the table 
*/

$array_county = explode(",",$county_data);

$new_array = count($array_county);

$remove = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9","."," ' ");

//var_dump($remove);


?>
<!DOCTYPE html>
<html>
  <head>

    <title>County Information</title>
	 <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container is-widescreen">
	<img width="5%" height="30%" src="images/coat.png">
     <h1 class="title is-1 ">
        County Details
		
      </h1>
<table class="table ">


  <thead>
    <tr>

      <th>#</th>
      <th>Name</th>
      <th>GOVERNOR</th>
      <th>WEBSITE</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $y=1; 
    for($a = 0; $a < $new_array; $a++) {?>
      <?php $datasplit = explode(" – ",$array_county[$a]);
      $serious = count($datasplit);?>
    <tr class="is-selected">
      <td><?php echo $y++?></th>
      <td>
	   <?php 
          $fleet = str_replace($remove, "", $datasplit[0]);
          echo $fleet;?>
	  </td>
      <td>
	  <?php 
          if(!empty($datasplit[2])){ 
            echo $datasplit[1],"-" , $datasplit[2]; 
			echo "<br>";
			
			?>
            
        <?php }
        else {
           echo $datasplit[1];
        }
        ?>
	  </td>
	   <?php 
       $fleet = str_replace($remove, "", $datasplit[0]);
       $space= strtolower(str_replace(' ', '', $fleet));
	   ?>
      <td>
	  http://<a  target="_BLANK" href= "http://<?php echo $space?>.go.ke"><?php echo $space;?>.go.ke</a>
	  </td>
	</tr>
<?php 
     }
 ?>
  </tbody>
  <tfoot>
     <tr>
      <th>Jubilee</th>
      <th>25</th>
	 </tr>  
	 <tr>
      <th>ODM</th>
      <th>14</th>
	</tr>
	<tr>
      <th>CCM</th>
      <th>1</th>
	</tr>
	<tr>
      <th>Independent</th>
      <th>2</th>
	   </tr>
	<tr>
      <th>FORD Kenya</th>
      <th>1</th>
	</tr>
    <tr>
      <th>WDM K</th>
      <th>2</th>
	</tr>
	<tr>
      <th>Narc Kenya</th>
      <th>1</th>
	</tr>
	<tr>
      <th>Kanu</th>
      <th>1</th>
	</tr>
  </tfoot>
  </section>
  </body>
  
</html>


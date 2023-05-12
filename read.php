<?php
session_start();
if(!isset($_SESSION['userid'])){
   header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Saint Padre Pio</title>
    <link rel="stylesheet" href="nav.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="index.css" />
</head>
<body>
	  <nav>
         <ul class="brand">
            <h3>Saint Padre Pio</h3>
         </ul>
         <ul class="links">
            <li><a href="home.php">Home</a></li>
            <li><a href="photos.php">Photos</a></li>
            <li><a href="videos.php">Videos</a></li>
            <li><a href="logout.php">Logout</a></li>
         </ul>
      </nav>

      <div class="display" style="align-items: unset !important;">
         <div class="d-left">
            <h2>
               The Journey of <strong>Charity</strong> and <strong>Devotion</strong>
            </h2>
            <br>
            <p>Padre Pio was born on May 25, 1887 in Pietrelcina, southern Italy. He was tutored privately until his entry to the novitiate of the Capuchin Friars at the age of 15. Of feeble health but strong will, with the help of grace, he completed the required studies and was ordained a priest in 1910.</p>
            <br>
            <p>On September 20, 1918 the five wounds of our Lord’s passion appeared on his body, making him the first stigmatized priest in the history of the Catholic Church. Countless persons were attracted to his confessional and many more received his saintly counsel and spiritual guidance through correspondence.</p>
            <br>
            <p>His whole life was marked by long hours of prayer and continual austerity. His letters to his spiritual directors reveal the ineffable suffering, physical and spiritual, which accompanied him all through his life. They also reveal his deep union with God, his burning love for the Blessed Eucharist and Our Blessed Lady.</p>
            <br>
            <p>On January 9, 1940, Padre Pio announced his grandiose plans to develop a Home for the Relief of Suffering (the Casa Sollievo della Sofferenza). The Casa opened its doors on May 5, 1956 as a 300 bed facility, built on the small, sincere and spontaneous donations and prayers of his followers. He also developed an international network of prayer groups for the support of the Casa and its ministry that continues to live on and grow today.</p>
            <br>
            <p>Padre Pio considered the Casa Sollievo Della Sofferenza (Casa) his “Work”, inspired and blessed by God, to be a haven of relief from suffering for all of God’s children in pain in body or soul. It is a model community of Catholic Christian health delivery, and has grown into a regional referral center of international renown. Today, with over 1,000 beds and services comparable to most academic research centers of excellence, the Casa is thriving by God’s graces in one of the most remote, desolate and poorest areas of Italy…atop Mount Gargano, four hours from Rome.</p>
            <br>
            <p>Worn out by over half a century of intense suffering and constant apostolic activity in San Giovanni Rotondo, Padre Pio was called to his heavenly reward on September 23, 1968. After a public funeral, which attracted over 100,000 mourners, his body was entombed in the crypt of Our Lady of Grace Church. Increasing numbers flock to his tomb from all parts of the world and many testify to spiritual and temporal graces received.</p>
            <br>
            <p>On the 16th of February 1973, the Archbishop of Manfredonia, Msgr. Valentino Vailati, consigned the documentation to the Sacred Congregation of the Causes of Saints so as to obtain the “nihil obstat” for the beginning of the process of his Beatification.</p>
            <br>
            <p>On December 18, 1997, by the reading of the decree on the heroic virtues, the Holy Father John Paul II declared Padre Pio “Venerable.”, and on June 16, 2002, over 500,000 Padre Pio devotees gathered in Rome to witness Pope John Paul II proclaim Padre Pio, “Saint Pio of Pietrelcina”.</p>
            <br>
            <a href="index.html">Back</a>
         </div>
         <div class="d-right r-right">
            <img src="pics/read.jpg" />
         </div>
      </div>

      <div class="footer" style="background: white;">
         <h1>Padre Pio</h1>
         <br />
         © Copyright padrepio.com 2023. All Rights Reserved
      </div>
</body>
</html>
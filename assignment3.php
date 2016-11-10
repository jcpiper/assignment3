<?php 
include "Automobile.php";
include "Truck.php";

$jeep = new Automobile("Jeep", "Cherokee", "1996", 125000, "SUV", "V6");
$truck = new Truck("Chevrolet", "Silverado", "2004", 110000, "Truck", "V6");

$truck2 = clone $truck;
	

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" type="text/css" href="assignment3.css">
</head>
<body>
	<section>
    <p>
      Hi there, we're going to learn about my first cars today. My first car was my family's old Jeep:
    </p>
    <p>
      <?= $jeep; ?>
    </p>
    <p>
      It was an old red jeep that barely ran, but it got me to and from school and football practice my senior year of
      high school. I know what you're thinking. A <?= $jeep->getMake() ?>? Yes, I did peak at 17.
      Whatever. I don't need that kind of negativity in my life right now, so let's move on.
    </p>
    <p>
      Any who, I put some miles into that thing. <?= $jeep->setMilage(135000); ?>
      <?= $jeep; ?>
    </p>
    <p>
      Well, at least until it died...
      <?= $jeep->setEngine("None :'("); ?>
      <?= $jeep; ?>
    </p>
  </section>
  <section>
    <p>
      The second car I had, well okay full disclosure it wasn't really mine but that's neither here nor there, was
      my dad's old pickup truck:
    </p>
    <p>
      <?= $truck; ?>
    </p>
    <p>
      It was an ugly old white (well it was white after I washed it once a year, technically) that I was allowed to drive around
      before I went off to college. It was a nice change of pace from my <?=  $jeep->getMake() ?>, and by the time I started
      it had gone from <?=  $truck->getMilage(); $truck->setMilage(115000); ?> miles
      to <?= $truck->getMilage(); ?> miles.
    </p>
    
    <p>
      Oh, and just for kicks I cloned my original truck object. See?
    </p>
    <p>
      <?= $truck2; ?>
    </p>
  </section>
</body>
</html>
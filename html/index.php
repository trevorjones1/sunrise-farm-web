<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Sunrise Farm Riding Lessons</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta name="keywords" content="Horses, horseback riding lessons, Wellington, Ohio, riding lessons, Lorain County, horseback riding, 44090 Lorain, Elyria, sunrise farm, horse, pony, pony lessons, pony riding lessons, lesson">
	<meta name="description" content="Sunrise Farm offers a safe, fun and relaxing environment for riding students and their parents. We offer beginner, novice and intermediate english and western hour long riding sessions">
	<!-- master default -->
	
<style type="text/css">
  body
  {background-image: url("background.jpg"); }
  a:link,a:visited {text-decoration:none;color:#000066; background-color:transparent;}
  a:hover,a:active {text-decoration:underline;color:black; background-color:#999999;}
  td.menu {height:50px;background-color:#888888;font-size:16px;vertical-align:top;line-height:200%}
  table {margin-left:auto;margin-right:auto;background-color:grey; border-color:black;border-style:solid}
  h1 {text-align:center;}
  h4 {text-align:center;}
  div.menu {border-top:groove #555555 thin;padding:5px 5px;width:96px;}
  div.menu:hover {border-top:groove #555555 thin;background-color:#999999;}
  div.pad {padding:7px;border-top:groove #555555 thin;}
</style> 
</head>

<body>
 <h1> Sunrise Farm</h1>
  <table rules=all cellpadding=0 border=5 style="max-width:775px">
   <tr><td class="menu">
     <div class=menu><a href=index.php>Home</a></div>
     <div class=menu><a href='index.php?page=lessons'>Lessons</a></div>
     <div class=menu><a href='index.php?page=barn'>The Barn</a></div>
     <div class=menu><a href='index.php?page=trailrides'>Trail Rides</a></div>
     <div class=menu><a href='index.php?page=scheduling'>Scheduling</a></div>
     <div class=menu><a href='index.php?page=horses'>Horses</a></div>
     <div class=menu><a href='cgi-bin/index.cgi'>Pictures</a></div>
     <div class=menu><a href='index.php?page=aboutus'>About Us</a></div>
     <div class=menu><a href='index.php?page=links'>Links</a></div>
     <div class=menu><a href='index.php?page=faq'>FAQ</a></div>
     <div class=menu><a href='https://maps.google.com/maps?q=sunrise+farm&hl=en&hq=sunrise+farm&hnear=Wellington,+Ohio&t=m&z=12'>Location</a></div>
     <div style="border-top:groove #555555 thin"></div>
   </td>
   <td><div class=pad>

<?php
if (isset($_GET['page']))
 $page=$_GET['page'];
else 
 $page="main";
if ($page == "horses")
{
echo"
	<h3>Quinn</h3>
        <img src='quinn.JPG' alt='quinn'> <br>
	1992, 13.3h Welsh/POA cross.<br><br>
	Quinn is just ornery enough to teach you something.  She is one in a million, her students range from leadline
        to advanced adults.  She enjoys arena and field work, and excels at mounted games. <br>
	<br>
	<h3>Sara Jane</h3>
        <img src='sara.JPG'  alt='sara'><br>
	2000, 15h Missouri Fox Trotter<br><br>
	Sara Jane is Trevor's Horse.  Cool, calm and collected (for the most part), she is a favorite of beginner students. 
        She prefers working in the field to the arena, and enjoys jumping.<br>
	<h3>Phoebe</h3>
	<img src='phoebe.JPG' alt='phoebe'><br>
	1994, 15.2h Paint<br>
	With the patience of a saint, she is the perfect beginner's horse.  Phoebe is an excellent confidence builder
        for timid riders.  Phoebe loves working in the field or the arena.  Due to arthritis she is limited to walk/trot lessons.
	<br>
	<h3>O'Fudge</h3>
	<img src='fudge.JPG' alt='fudge'><br>
	1991, 16h Shire/Thoroughbred cross<br><br>
	18 years under saddle and still going strong, Fudge loves to challenge her students.  Perfect for more advanced students,
        she will teach you how to fine tune your riding skills.  Fudge enjoys schooling over fences and galloping the fields.
	<br>
	<h3>Hugo</h3>
	<img src='hugo.JPG' alt='hugo'><br>
	2007, 15.2h Mustang mix<br><br>
	Hugo is Val's horse.  He came to us as a starving 4 month old feral colt.  He shows great promise and Val hopes to be able
        to make him into her next eventing horse.  Due to his inexperience he is not available for lessons. 
";
}
else if ($page == 'lessons')
{
echo"
	<img src='horses_in_pasture.JPG' alt=''><br>
	<hr>
	Arena or Field Lesson Rates:<br>
	Private lesson: $30/hour.<br>
	Group lesson: $25/hour per person.<br> 
	We can accommodate up to three riders at a time. <br>
	<hr>
<!--	During the summertime due to bugs, we can only offer morning and 
	evening lessons.  Lessons need to start at or before 9am, or 
	after 6pm.  Call for leadline times.<br>
	<hr> -->
	<a href='PDFs/rules.pdf'>Click here for farm rules</a><br>
	<a href='PDFs/sunrise_farm_waiver.pdf'>Click here for liability waiver</a><br><br>
	If you are under 18, you must have a parent or legal guardian accompany you to your first lesson to fill out paperwork.<br>
	The paperwork needs to be signed in front of Val, please do not bring already signed waivers.<br>
	<hr>

	<h4>What to expect at your first (free) lesson</h4>
	Please limit the free riding session to one or two riders, and only to people interested in taking lessons.
	<ul>
	 <li>Paperwork<br>
	  We will go over the waiver/hold harmless agreement with you as well as the barn rules, and answer any questions.
	 </li>
         <li>Farm Tour<br>
	  A quick tour of the facility. 
	 </li>
	 <li>Riding Session<br>
	  Val wil help you groom and tack up.  Then you will have a quick 15 minute riding evaluation/mini lesson.
	 </li>
	 <li>Q&amp;A<br>
	  While we are untacking the horse we will go over what you would like to accomplish with your lessons as well as
	  what type of riding you are interested in.
	 </li>
	</ul>
	We offer lessons for ages 8 and up.<br><br>

	Beginners tend to spend more time in the barn learning pieces and parts and general horse care.<br><br>


";


}

else if ($page == 'trailrides')
{
echo"
	<img src='trail.JPG' alt=''><br>
	<hr>
	Trail rides are offered only to students and their families.<br>
	Rates:<br>
        
	<a href='http://www.metroparks.cc/reservation-charlemont.php'>Charlemont</a> small loop (~45 minutes): $35/person<br>
	Charlemont large loop (~1.5 hours): $45/person.  The large loop is not for beginner riders due to the rough terrain.<br>
	<br>

	<a href='http://www.metroparks.cc/reservation-wellington.php'>Wellington Reserve</a> trail (~45 minutes): $35/person<br>
	<hr>
	Trail rides must be scheduled at least a week in advance, and are limited to one or two riders.  Availability is limited, but we will do our best to
	accommodate you.<br>
	Hauling to the park is included in the price.<br>
	<br>
	For your own safety, to participate in trail rides you must demonstrate that you can trot independently while maintaining control.<br>
	<br>
	Sunrise farm reserves the right to cut any trail ride short due to reckless behavior, which would not result in a refund. <br>
	We also may cancel due to weather conditions or horse availability, which would result in a full refund.<br>

";

}
else if ($page == 'scheduling')
{
echo"
	<img src='standingonhugo.JPG' alt=''><br>
	<hr>
	<b>Lesson Scheduling:</b><br>
	Lessons must be scheduled in advance.  Calling around week in advance is the best way to ensure you get the time you want.  However, you can call
	up to two hours before your desired time, we cannot guarantee that you can have the time you want.  Time slots are reserved on a first come first serve basis.<br>
	<br> 
	If you would like to participate in a group lesson, please let Val know and she will do her best to schedule you with another student of a similar skill level.
	<hr>
	<b>Trail Ride Scheduling</b>:<br>
	Must be scheduled at least a week in advance.  They are limited to one or two riders and times are limited.
	<hr>
	<b>Cancellation Policy</b><br>
	To avoid being charged for a missed lesson/trail ride, the rider must inform Sunrise Farm at least 24 hours in advance stating that they will miss a lesson/trail ride.
	If you are unable to cancel within 24 hours, you will be charged half of the price of the cancelled session.  If we don't hear from you at all and you
	are not at your lesson or trail ride, you will be charged full price for the missed session.  All fees are to be paid at your next session.  If a student
	refuses to pay cancellation fees, we reserve the right to decline service until the fees are paid.<br>
	Cancelation due to weather is an exception, and late fees do not apply in that case, but please still call if we don't call you to cancel due to weather.
	<br>
	<br>
	Sunrise Farm reserves the right to cancel lessons/trail rides due to weather conditions or emergencies.  Val will notify you as soon as possible about any cancelations.
	<hr>
	<b>Bad Checks</b><br>
	If any check issued by the client to Sunrise Farm is returned for insufficent funds, client must immediately pay Sunrise Farm cash in the amount of the check plus
	any bank charges incurred by Sunrise Farm as a result of the returned check.
";

}
else if ($page == 'links')
{
echo"
	<img src='izzy_and_trouble.JPG' alt=''><br>
	<h3>Links</h3>
	Tack Shops:<br>
	<a href='http://www.paintedcowgirltack.biz'>Painted Cowgirl Tack</a> - Specializes in western equipment, great selection of used saddles.<br>
	<a href='http://www.litchfieldmedinatack.com'>Litchfield Medina Tack</a><br>
	<a href='http://www.justforponies.com'>Just For Ponies online tack store</a><br>
	<a href='http://www.valleytackshopinc.com'>Valley Tack</a> - They have the best selection of helmets you can try on.<br>
	<hr>
	Training:<br>
	<a href='http://www.westfallhorsemanship.com'>Stacy Westfall Horsemanship</a><br>
	<a href='http://www.brendaaloff.com'>Brenda Aloff - Dog trainer</a><br>
	<hr>
	Other:<br>
	<a href='http://thepioneerwoman.com'>The Pioneer Woman</a><br>
	<a href='http://www.wolfcreekequestrian.com/about_us'>About Colleen Campbell, Val's mentor</a><br>

";
}

else if ($page == 'aboutus')
{
echo"
	<img src='val_and_trevor.jpg' alt=''><br>
	<p>  Hi, I'm Valerie Jones and this is my husband Trevor. In 2006 we moved from the Youngstown area to our farm in Huntington 
	township. Trevor is a computer systems engineer and works in Cleveland. I have a degree in zoology, concentrating mostly on 
	animal behavior and physiology. When the economy took a turn for the worse I decided to become self employed.

	<p>  My mom introduced me to riding at the age of 8, by 11 I was hooked. I had the pleasure of training with Tina Costarella, 
	 Linda Vaughn, and Colleen Campbell of Mahoning County. At the age of 13 I was training thoroughbreds for Sunbridge Farm under 
	the watchful eye 
	of my mentor Colleen. I have shown 4-H and open hunter most of my teen years, and have been teaching since I was 16. 
	While I am not certified as an instructor, I feel that my experiences in the horse world more than make up for it. 
	I truly enjoy teaching others how to ride and communicate with horses. 
	
	<hr>
	These are our dogs:
	<table border=0><tr><td>Fia</td><td>Henry</td></tr>
	<tr><td><img src='fia_small.JPG' alt=''></td><td><img src='henry.JPG' alt=''></td></tr></table>

";


}

else if ($page == 'faq')
{
echo "
	<img src='hunterpace.JPG' alt=''><br>
	<ul>
	  <li>What do I need to bring with me for a lesson?<br>
	    We supply tack (saddles, bridles etc.).  You should wear boots or shoes with a heel, long pants (jeans are fine) and bring
	      a helmet if you have one.</li><br>
	  <li>Can I bring my own saddle or tack?<br>
	    Yes, bring it with you and we can see if it fits the horse you are using.  Thoroughbred or Arabian saddles won't fit
	      any of our horses.</li><br>
	  <li>Do you offer boarding?<br>
	    Not right now, but if we have enough interest we will be building more stalls.</li><br>
	  <li>Do you offer lessons all year?<br>
	    Even though we do not have an indoor arena, we offer lessons all year.  Dress appropriately for the seasons.</li><br>
	  <li>Can I buy or pay for lessons in advance?<br>
	    We offer gift certificates.  You don't save anything by paying in advance and it is difficult to keep track of so it is not
	      encouraged.</li><br>
	  <li>Can I bring a friend?<br>
	    Yes, they just have to sign the liability waiver even if they are not riding.  If they are riding please let us know in advance.</li><br>
	  <li>Can I just stop over and get a lesson?<br>
	    No, please call and schedule.  Allowing people to just stop over will lead to conflicts, plus Val isn't always available.  
	    You can call the same day, we just can't guarantee Val will be available.</li><br>
	  <li>Why don't I get to pick which horse I ride?<br>
	    For your free first lesson, Val will pick which horse you ride.  People tend to exaggerate about their riding ability, and we don't
	     want anyone getting hurt.  </li><br>
	  <li>Can I use Hugo for my lesson?<br>
	     Hugo is being trained for eventing.  Due to his inexperience he is not available for lessons. </li><br>
	  <li>I found a horse I want to buy, can you come and look at it with me?<br>
	      For students and their families, yes. Gas money or lunch would be appreciated.  For non-students there will be a fee.</li><br>
	  <li>Do I have to pick out the stalls and clean tack?<br>
	      No, only if you really want to or have time to kill.  You would not be charged for that as lesson time.</li><br>
";
}

else if ($page == 'barn')
{
echo "
	<img src='games.JPG' alt=''><br>
	<h4>Sunrise Farm<br>
	\"riding for the rest of us\"</h4>

	&nbsp;&nbsp;&nbsp;&nbsp;Here at Sunrise Farm you wont find a trophy room full of blues and reds, nor will you find a calender ladened with 
	the coming show season schedule. But you will find laughter, smiles and a great respect for our four legged friends. The most important part 
	about riding, (other than safety) is that it should be fun. 
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;Our small backyard barn teaches the art of riding through classical horsemanship and encourages students to work as 
	a team with their horse. We are all different and learn at various paces, as do our horses. Lessons take place in the arena, woods or field 
	depending on the student's riding ability and Ohio's ever changing weather. 
	All students learn to ride from the \"ground up\" meaning that they learn how to handle and care for their horse, not just ride. 
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;The barn as a community enjoys having fun and working together as a team. We have recently added Mounted Game Nite to our activity list. Students work in teams
	of two or three as they learn to master the skills of The United States Pony Club Mounted Games.  Other activities include mounted scavenger hunts, horse maintenance 
	clinics, hunter paces and our yearly Pumpkin Party. Students are always welcome to help out around the barn. 

	<table border=0><tr><td><img src='games_2.JPG' alt=''></td><td><img src='games_3.JPG' alt=''></td><td><img src='small_hunterpace.JPG' alt=''></td></tr></table>
";

}

else //main index
{

echo "
	<img src='farm_fall.JPG' alt=''><br>
	Teaching beginners, children and the young at heart to ride.<br>
	Please call to schedule a farm tour and free trial riding session.<br>
	<ul>
	  <li>English and Western</li>
	  <li>Beginner, novice and intermediate</li>
	  <li>Fun, safe and relaxed environment</li>
	  <li>Fully insured</li>
	  <li>Over 10 years of teaching experience</li>
	</ul>
	We do not offer public trail rides or rentals.<br>
	We are within a half hour of Elyria, Amherst, Medina and Ashland.

";

}	



?>
   </div></td></tr>
  </table>
  <h4> 26140 State Rt 58, Wellington, Ohio 44090, 440-477-6429, <a href='mailto:val.jones@sunrise-farm.us'> val.jones@sunrise-farm.us</a></h4>
  <div style='text-align:center'>Updated 7/15/2012</div>
</body>
</html>


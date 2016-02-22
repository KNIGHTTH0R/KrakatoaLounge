<?php include ('includes/header.php'); ?>
    
<?php include ('includes/nav.php'); ?>


   
   	<div id="main">
        <div id="content">
		<!-- Main Content -->
		
         
            
		<h1>Thanks!</h1>
            
    <img src="images/thanks.jpg" class="smallish alignright" alt="Cocktail" />        
            
            <h3>Thank you for your message. We'll do our best to get back to you within 24-48 hours.</h3>
          


 <div class="clear">
      

         <form  action="formhandler.php" method="post">

    	<fieldset>

          <p>
          <label for="name">Your Name:</label>
          <input type="text" name="name" id="name" maxlength="70"/>
   		  </p>

          <p>
          <label for="email"> Your Email:</label>
          <input type="email" name="email" class="email" maxlength="40" required="required" />
          </p>

          <p>
          <label>Your Message:   </label>
          <textarea name="message" id="message" cols="30" rows="10">
          </textarea>

          </p>

          <p>
          <label>
          <input type="checkbox" id="newletter" name="newsletter" value="yes" />
          I would like to recieve news and information about the Krakatoa Lounge.
          </label>
          </p>

          <p>What sorts of news and information would you like to receive?<br>
          <label>
          <input type="checkbox" name="news[]" id="newsletter" value="newsletter" /> Monthly Newsletter
          </label>

          <label>
          <input type="checkbox" name="news[]" id="food" value="food" /> Food and drink specials
          </label>

          <label>
          <input type="checkbox" name="news[]" id="parties" value="parties" /> Special events, like Grammy Parties
          </label>

          <label>
          <input type="checkbox" name="news[]" id="weekly" value="weekly" /> Weekly events, like Trivia Night
          </label>

          <label>
          <input type="checkbox" name="news[]" id="project" value="project" /> News about the owner's latest project, Three Windows Up
          </label>
          </p>

          <p>Where did you hear about us? <br>
          <label>
          <input type="radio" id="attention-walk" name="attention" value="walk" /> Walked by
          </label>

          <label>
          <input type="radio" id="attention-friend" name="attention" value="friend" /> From a friend
          </label>

          <label>
          <input type="radio" id="attnetion-blog" name="attention" value="blog" /> From the news or local blog
          </label>

          <label>
          <input type="radio" id="attention-yelp" name="attention" value="yelp" /> Yelp
          </label>

          <label>
          <input type="radio" id="attention-fan" name="attention" value="fan" /> From a previous project of the owner's
          </label>
          </p>
        </fieldset>

    	<input type="submit" value="submit">
      </form>
    </div>
 <p><a class="top" href="#wrapper">Go To Top</a></p>

	</div> <!--Closes main -->


<?php include ('includes/rightsidebar.php'); ?>

<?php include ('includes/footer.php'); ?>
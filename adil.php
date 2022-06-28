<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    
    <body> 

        
        <div class="main">
          <div class="register">
             <h2>register  yourself here</h2>
             <form id="regiter" method="post" action ="connect2.php">
              <label for="Name">Name</label>
              <br>
              <input type="text" placeholder="enter name" name="txtName" id="txtName">
              <br><br>       
              <label for="cnic"> cnic</label>
              <br>
              <input type="text" placeholder="enter cnic"  name="cnic" id="cnic">
              <br><br>
              <label for="contact"> contact</label>
              <br>
              <input type="text" placeholder="enter contact"  name="contact" id="contact">
              <br><br>
              <label for="Qualifiction"> Qualifiction</label>
              <br>
              <input type="text" placeholder="enter Qualifiction"  name="Qualifiction" id="Qualifiction">
              <br><br>  
               <label for="referby"> referby</label>
               <br>
               <input type="text" placeholder="enter referby"  name="referby" id="referby">
               <br><br>
               
               <label for="city"> city</label>
              <br>
              <input type="text" placeholder="enter city"  name="city" id="city">
              <br><br>
              <input type="submit" value="submit " name="submit" id="submit">              
             </form>
          </div><!--end register-->
        </div><!--end main-->
    </body>
</html>
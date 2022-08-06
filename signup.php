


<?php include 'headpart.php'; ?>

<style>
      body{
            background-color: #F1F5FE;
      }
</style>
    
<div class="centerdiv">
     
                  <img src="imag/mis.png">
                  <h2 id="h22">USER SIGN-UP</h2>
                  <form id="form" action="mysql/registration.php" method="post">
                        <div>
                              <input type="text" name="name" class="inputboxx" placeholder="Name"  required>
                        </div>
                        <br>
                        <div>
                              <input type="email" name="email" class="inputboxx" placeholder="Email/Mobile"  required>
                        </div><br>
                        <div>
                              <input type="Password" name="pswd" class="inputboxx" placeholder="Password"  required>
                        </div>
                        
                        <br>
                        <div>
                              <button class="butoon" type="submit"> Sign-up </button>
                              <button class="butoon" type="submit"> <a style="text-decoration: none; color:white" href="home.php">Cancel</a> </button>
                        </div>
                        
                </form>
                <div class="ACCOUNT-SECTION">
                             
                
                             <p style="color: black; font-weight:bold; text-align: center;">Already Have an Account. <a style="color: white; font-weight:100; text-decoration:none;" href="login.php">&nbsp;Log-in</a>     
                </div>
    
                 
    
</div>
        

      
       




</body>
</html>
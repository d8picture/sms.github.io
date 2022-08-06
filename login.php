<?php include 'headpart.php'; ?>



<style>
      body{
            background-color: #F1F5FE;
      }
</style>
    
 
<div class="divcenter">
     
                  <img src="imag/mis.png">
                  <h2 id="h2s">USER LOGIN</h2>
                  <form  action="mysql/validation.php" method="post">
                        
                        <div>
                              <input type="text" name="email" class="nputbox" placeholder="Username"  required>
                        </div>
                        <br>
                        <div>
                              <input type="Password" name="pswd" class="nputbox" placeholder="Password"  required>
                        </div>
                        <br>
                        <div>
                              <button class="buton" type="submit"> LOGIN </button>
                        </div>
                        
                </form>
                <div class="FORGOT-SECTION">
                              <h4><a style="color:white; text-decoration:none;" href="#">Forget Password?</a></h4>
                
                            <br> <p style="color: black; font-weight:bold; text-align: center;">Don't Have an Account. <a style="color: white; font-weight:100; text-decoration:none;" href="signup.php">&nbsp; Create New Account</a>     
                </div>
    
                 
    
</div>
        

      
       




</body>
</html>
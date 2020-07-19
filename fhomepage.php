
<!DOCTYPE html>
<html>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
         <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


 <link rel="stylesheet" href="homepage4.css">
<!-- ============= -->

<div class="container">
 <div class="box">
    
    <div id = "sidebarCollapse" class = "menu-icon">
    	<div class = "icon"></div>
    	<div class = "icon"></div>
	    <div class = "icon"></div>
    </div>

    <div class="search-bar">
      <form action="search.php" method="get">
        <input type="text" placeholder="Search" name="search" id="movie" autocomplete="off">
        <button type="submit" name="submit-search" id="clickSearch"><i class="fa fa-search"></i></button>
        <div id="movieList"></div>
      </form>
    </div>
   
    <div class="dropdown">
       <img onclick="ShowSetting()" class="dropbtn" src="https://thumbs.dreamstime.com/b/default-avatar-profile-icon-social-media-user-vector-default-avatar-profile-icon-social-media-user-vector-portrait-176194876.jpg" alt="Avatar" style="width:40px">
     <div id="myDropdown" class="dropdown-content">
    
      <div class = "login">
         <?php	    		 
	 if (isset($_SESSION['userId'])){
	      echo '<form action="includes/logout.inc.php" method="post">
	        <button type="submit" name="logout-submit">Logout</button>
	       </form>';	
	  }
	  else{
		echo '<form action="loginfromhomepage.php" method="post">
		 <button type="submit"  name="login-submit">
		 <svg class="bi bi-arrow-right-square" width="1.4em" height="1.4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  		<path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  		<path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
 		 <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
		</svg> &nbsp; &nbsp;
		LOGIN</button>
	   	 </form>';
	   }
	   ?>
      </div>
	
     <div class = "signup">
	<?php
	 if (!isset($_SESSION['userId'])){
	     echo '<form action="signupfromhomepage.php" method="post" ">
    	      <button type="submit" name="signup-submit">
		<svg class="bi bi-box-arrow-right" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  		<path fill-rule="evenodd" d="M11.646 11.354a.5.5 0 0 1 0-.708L14.293 8l-2.647-2.646a.5.5 0 0 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
  		<path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
  		<path fill-rule="evenodd" d="M2 13.5A1.5 1.5 0 0 1 .5 12V4A1.5 1.5 0 0 1 2 2.5h7A1.5 1.5 0 0 1 10.5 4v1.5a.5.5 0 0 1-1 0V4a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-1.5a.5.5 0 0 1 1 0V12A1.5 1.5 0 0 1 9 13.5H2z"/>
		</svg> &nbsp;
		SIGNUP</button>
	      </form>';
         }
         ?>
    </div>

     </div>
    </div>

 </div>
</div>
<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="index.php" >
                            <i class="fa fa-home"></i>
                            Home
                        </a>
                    </li>
                    
                </ul>

                
            </nav>



</div>


<script>

function ShowSetting() {
  document.getElementById("myDropdown").classList.toggle("showsetting");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('showsetting')) {
        openDropdown.classList.remove('showsetting');
      }
    }
  }
}
</script>

</html>


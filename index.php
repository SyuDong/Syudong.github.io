<?php
$gender="";
$sport_Basketball="";
$sport1_Football="";
$sport2_Tennis="";
$sport3_Others="";
$sport=array("");

if(!empty($_POST)){
    $name= $_POST["name"];
    $gender= $_POST["gender"];
    $email= $_POST["email"];
    $sport = $_POST['sport'];
    /*
    $sport_Basketball = in_array('Basketball',$_POST['sport']) ;
     $sport1_Football = in_array('Football',$_POST['sport']) ;
     $sport2_Tennis = in_array('Tennis',$_POST['sport']) ;
     $sport3_Others = in_array('Others',$_POST['sport']) ;
     */
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>example</title>
<style type="text/css">
/* table */.table {  
  display: table; 
  border-collapse: collapse; 
}  
    /* table */.table1 {  
  display: table; 
  border-collapse: collapse; 
         width: 500px; 
}  

/* tr */.row{
display: table-row; border:solid 1px #000000;
}

/* td , th */.name {  
  display: table-cell; 
  width: 500px; 
  border-right: 1px solid #000000; 
  background:#fcd6d6;
}  
    
    .button {
  
   
    color: #FF0000;
    width:100px;
    height:100px;
    text-align: center;
   
    font-size: 16px;
}
</style>
    
</head>
<body>
    <form name="sign_in" method="post" action="home2.php" onsubmit="return myFunction(); " >
        <div class="table1"  style="margin:0 auto;">
  <div class="table"><!-- table -->
 <div class="row"><!-- tr --> 
         <div class="name"><!-- td -->  
           Name
         </div> 
      <div class="name"><!-- td -->  
           <input required="required"  type="name" name="name" id="name" value="<?php if(!empty($name)) echo $name;?>"/><br />
             <div  id="name_error"> </div>
         </div> 
     </div> 
 <div class="row">
         <div class="name"><!-- td -->  
           Gender
         </div> 
     
      <div class="name" ><!-- td -->  
          
       <input  type="radio" name="gender" value="male" id="Gender"  <?php if($gender == 'male') { echo "checked";  } ?> > Male
       <input type="radio" name="gender" value="female" id="Gender1"   <?php if($gender == 'female') { echo "checked";  } ?>>Female
               <div  id="gender_error"> </div>
         </div> 
     </div>      
      <div class="row"><!-- tr --> 
         <div class="name"><!-- td -->  
            Email
         </div> 
     
      <div class="name"><!-- td -->  
       <input required="required" type="name" name="email" id="email" value="<?php if(!empty($email))echo $email;?>" />
            <div  id="email_error"> </div>
         </div> 
     </div>    
      
      
 <div class="row"><!-- tr --> 
         <div class="name">Age</div> 
      <div class="name"><!-- td -->  
            <select multiple="multiple" name="formats" size="2">
 <option value="20歲以下">20歲以下</option>
 <option value="20歲~29歲">20歲~29歲</option>
 <option value="30歲~39歲">30歲~39歲</option>
 <option value="40歲~49歲">40歲~49歲</option>
 <option value="50歲以上">50歲以上</option>
</select>
           <div  id="checkbox_error"> </div>
          
          
         </div> 
     </div>         
      
            <div class="row"><!-- tr --> 
         <div class="name"><!-- td -->  
            Favorite Sports
         </div> 
      <div class="name"><!-- td -->  
               <input type=checkbox value="Basketball" name="sport[]" id="Favorite" <?php if (in_array("Basketball", $sport))  { echo "checked";  } ?> > Basketball
               <input type=checkbox value="Football" name="sport[]" id="Favorite" <?php if (in_array("Football", $sport)) { echo "checked";  }?>> Football
               <input type=checkbox value="Tennis" name="sport[]" id="Favorite"<?php if (in_array("Tennis", $sport)) { echo "checked";  }?>> Tennis
               <input type=checkbox value="Others" name="sport[]"id="Favorite"<?php if (in_array("Others", $sport)) { echo "checked";  }?>> Others
           <div  id="checkbox_error"> </div>
          
          
         </div> 
     </div>     
      </div>      
                  <div ><!-- tr --> 
         <div class="name"><!-- td -->  
            Favorite Sports
         </div> 
     
          <div class="name"><!-- td -->  
            Favorite Sports
         </div> 
          
           <div class="name"><!-- td -->  
            Favorite Sports
         </div>         
                      
     </div>   
         <div  class="row" style="text-align:center;">
        <button type="submit" value="Submit" class="button" >click me</button>
        <button type="button" value="Submit1" class="button" onClick="window.location.reload()">Refresh</button>
         </div>      
        </div>
      </form>
    <div  id="tol"> </div>
</body>
    
    <script>
function myFunction() {
     var name_element = document.getElementById('name');
	 var email_element = document.getElementById('email');
     var Gender_element=false;
     var Checkboxes_element=false;   
     var checkboxes = document.getElementsByName('sport[]');
     var checkboxes_value = "";
for (var i=0, n=checkboxes.length;i<n;i++) 
{
    if (checkboxes[i].checked) 
    {
        checkboxes_value += ","+checkboxes[i].value;
          //alert(checkboxes[i].value);
        Checkboxes_element = true;
        
    }
}
 //   email = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;
var Gender;
if( document.getElementById("Gender").checked){
	Gender=document.getElementById("Gender");
	 Gender_element=true;
	}else if( document.getElementById("Gender1").checked){
	Gender=document.getElementById("Gender1");
	   Gender_element=true;
	}
    if(name_element.value.length==0){  
          document.getElementById("name_error").innerHTML = '<font color="red">請輸入Name</font>';
		   return false
    }else if(Gender_element==false){

         document.getElementById("gender_error").innerHTML = '<font color="red">未選擇Gender</font>';
		   return false
    }else if ( email_element.value.length==0){
	 document.getElementById("email_error").innerHTML = '<font color="red">請輸入Email</font>';
	 return false
	}else if(!validateEmail(email_element.value)){
     document.getElementById("email_error").innerHTML = '<font color="red">Emai格式不對</font>';
	  return false
    }else if(Checkboxes_element==false){
	  document.getElementById("checkbox_error").innerHTML = '<font color="red">未選擇SPORT</font>';
	    return false
	}
}      
    function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }
</script>
</html>
<!--
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="st.css" />
</head>
<body>
<div class="login-box">  
  <h2>Hey</h2>
  <h3 style='color:white'>You are in user dashboard page</h3>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="user-box">
      <span style='color:white'>Enter time:</span>  
           <input type="date" name="s_date">
   <div class="user-box">
     <div class="user-box">
      <span style='color:white'>Enter time:</span>  
         <input type="time" name="s_time" value="22:00">
   <div class="user-box">
     <div class="user-box">
       <label for="fname">BotID:</label><br><br>
  <input type="text" id="fname" name="token"><br><br>
   <div class="user-box">
   <div class="user-box">
       <label for="fname1">ChatID:</label><br><br>
  <input type="text" id="fname1" name="chatid"><br><br>
   <div class="user-box">
   <div class="user-box">
       <label for="fname2">Texts:</label><br><br>
  <input type="text" id="fname2" name="text"><br><br>
   <div class="user-box">
   
      <input type="submit" name="submit" value="Click here to SUBMIT" required="">
    </div>
  </form>
</div>

</body>
  
</html>                    

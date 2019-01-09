 <!DOCTYPE html>
 <html>
 <style>
 html{
  margin: o auto;
  
}

body{
  border: 0;
  border:center;
  border: 10px solid blue;
  padding-left: 10px;
  border-radius: 10px;
  font-size: 50px;
  height: 100px;
  width: 700px;
  transition: width 0.5s;
  box-sizing: border-box;
  color:#191970 ;
  text-align: center;
}
 </style>
 <body>
 <?php
 $nama = "firdausa"; 
 $pass = "123";
 if ($nama == "firdausa" && $pass == "123") 
 {    
      echo "Login Berhasil";
      echo "<br>"; 
 } 
 else 
 {    
      echo "Login Gagal"; 
      echo "<br>";
      
 }

 ?>
 </body>
 </html>

 
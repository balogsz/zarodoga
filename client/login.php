  <div class="login"> 
     <form class="form-signin shadow mt-2">
      <div class="w-100 text-center">
  <img class="mb-4" src="login.png" alt="" width="72" height="72">
  </div>
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="username">Username</label>
  <input type="username"  name="username" class="form-control" placeholder="Username" required autofocus>
  <label for="passw">Password</label>
  <input type="password"  name="password" class="form-control" placeholder="Password" required>
  <input class="btn btn-lg btn-primary btn-block" type="button" onclick="loginUser()" value="Sign in">

</form>
</div>
<hr>
<script>
 
    function loginUser(){
    
      const myFormData = new FormData(document.querySelector('form'));
    
      let configObj={
        method: 'POST',
        body: myFormData
      }
  
    postData('../server/login.php',configObj,render)
  }

    function render(data){
      console.log(data);
      if(data.msg=="OK"){
        location.href="index.php"
      }
    }
  
  
</script>
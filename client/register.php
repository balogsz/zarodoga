<div class="register"> 
     <form class="form-signin shadow mt-2">
      <div class="w-100 text-center">
  <img class="mb-4" src="login.png" alt="" width="72" height="72">
  </div>
  <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

  <label for="username">Username</label>
  <input type="username" id="username" onblur="vrfusername(this)" name="username" class="form-control" placeholder="Username" required autofocus>

  <label for="email">Email address</label>
  <input type="email" id="email" onblur="vrfemail(this)" name="email" class="form-control" placeholder="Email address" required autofocus>

  <label for="password">Password</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
 
  <input class="btn btn-lg btn-primary btn-block" onclick="newUser()" type="button" value="Sign up"></button>

</form>
<div class="msg">

</div>
</div>
<hr>

<script>
  let user={username:false,email:false}

  function vrfusername(obj){
    console.log(obj.value);
    verifyuser('../server/verifyuser.php?username='+obj.value,renderVerifyUsername);
  }
  function renderVerifyUsername(data){
    console.log(data);
    if(data.nr==0){
      user.username=true
    }
    else{
      user.username=false
    }
  }

  function vrfemail(obj){
    console.log(obj.value);
    verifyuser('../server/verifyuser.php?email='+obj.value,renderVerifyEmail);
  }
  function renderVerifyEmail(data){
    console.log(data);
    if(data.nr==0){
      user.email=true
    }
    else{
      user.email=false
    }
  }

   function newUser(){
    if(user.username && user.email){
      const myFormData = new FormData(document.querySelector('form'));
    /*for(let obj of myFormData){
      console.log(obj);
    }*/
    let configObj={
      method: 'POST',
      body: myFormData
    }
    postData('../server/insertuser.php',configObj,render)
  }
  
    }
   function render(data){
    console.log(data);
    document.querySelector('.msg').innerHTML=data.msg;
    if(data?.id){
      user.username=false
      user.email=false
    }
}
</script>
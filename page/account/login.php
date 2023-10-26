<div class="" style="padding-top: 150px;">
    <h1 class="page-title">Login</h1>
    <div class="main-container shop-page left-sidebar">
        <div class="container">
            <form method="post" enctype="multipart/form-data" id="form" onsubmit="return validate()">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <div id="error1"></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <div id="error2"></div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <div class="form-group">
                    
                </div>
                
                <button type="submit" class="btn" name="submit">Login</button>
                <button type="button" class="btn    ">
                    <a href="index.php?act=register" style="color: white;">
                    Create an Account!
                    </a>
                </button>

            </form>
            
        </div>
    </div>
    


    
</div>
<script>

    function validate(){
        var email = document.getElementById("email");
        var password = document.getElementById("password");
        
        var error1 = document.getElementById("error1");
        var error2 = document.getElementById("error2");
        if(email.value.length == 0){
            error1.innerHTML = "Email không được để trống!";
            return false;
        }else{
            error1.innerHTML = "";
        }
        if(password.value.length == 0){
            error2.innerHTML = "Password không được để trống!";
            return false;
        }else{
            error2.innerHTML = "";
        }
        // <?php 
        //     if(isset($thongbao) && $thongbao > 0){
        //         echo "alert('$thongbao')";
        //     }
        // ?>
    }
    
</script>
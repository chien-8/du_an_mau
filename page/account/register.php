<div class="" style="padding-top: 150px;">
    <h1 class="page-title">Login</h1>
    <div class="main-container shop-page left-sidebar">
        <div class="container">
            <form class="row g-3" enctype="multipart/form-data" method="post" name="myForm" onsubmit="return validateForm()">
                <div class="col-6">
                    <label for="inputAddress" class="form-label">User name</label>
                    <input type="text" class="form-control" id="name"   name="name">
                    <div id="error1"></div>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Phone</label>
                    <input type="number" class="form-control"  id="phone" name="phone">
                    <div id="error2"></div>
                </div>
                
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control"  id="email" name="email">
                    <div id="error3"></div>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control"  id="password" name="password">
                    <div id="error4"></div>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address"  placeholder="" name="address">
                    <div id="error5"></div>
                </div>
                <div class="col-12 pt-3">
                    <button type="submit" class="btn" name="register">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
                    
<script>
    function validateForm(){
        var name = document.getElementById("name");
        var phone = document.getElementById("phone");
        var email = document.getElementById("email");
        var password = document.getElementById("password");
        var address = document.getElementById("address");
        
        var error1 = document.getElementById("error1");
        var error2 = document.getElementById("error2");
        var error3 = document.getElementById("error3");
        var error4 = document.getElementById("error4");
        var error5 = document.getElementById("error5");

        if(name.value.length == 0){
            error1.innerHTML = "Tên không được để trống!";
            return false;
        }else{
            error1.innerHTML = "";
        }
        if(phone.value.length == 0){
            error2.innerHTML = "SDT không được để trống!";
            return false;
        }else{
            error2.innerHTML = "";
        }
        if(email.value.length == 0){
            error3.innerHTML = "Email không được để trống!";
            return false;
        }else{
            error3.innerHTML = "";
        }
        if(password.value.length == 0){
            error4.innerHTML = "Password không được để trống!";
            return false;
        }else{
            error4.innerHTML = "";
        }
        
        if(address.value.length == 0){
            error5.innerHTML = "Địa chỉ không được để trống!";
            return false;
        }else{
            error5.innerHTML = "";
        }
    }
</script>
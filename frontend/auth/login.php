<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<style>
    body {
        align-items: center;
        justify-content: center;
        display: flex;
    }
    .center_box {
        width:950px;
        height:640px;
    }
    .mane {
        width:470px;
        height:640px;
        float: left;
    }
    .fom {
        width:485px;
        height:571px;
        margin: 35px;
        position: absolute;
        z-index: +1;
        border-radius: 7px;
        box-shadow:0px 0px 14px -9px;
        background: hsla(0, 0%, 100%, 0.55);
        backdrop-filter: blur(30px);
    }
    .img {
        overflow: hidden;
        border-radius: 7px;
        box-shadow:0px 0px 20px;
    }
    .inr{
        font-size: 17px;
        padding: 16px;
    }
    .ican {
        margin:15px;
        text-decoration: none; 
        font-size:20px;
    }
    .ican:hover {
        text-decoration: none; 
    }
</style>   
</head> 
<body>
    <div class="center_box">
        <div class="mane">
            <div class="fom">
                <div class=" p-5 text-center" style="margin: 25px;" >
                    <h1 class="fw-bold mb-5 pb-4" style="font-size: 35px;">Sign in</h1>

                    <form action="login_store.php" id="loginForm" style="font-size:15px;" >

                        <div class="form-outline mb-4 pb-4 pt-4">                      
                            <input type="email" class="form-control inr" name="email" placeholder="Email address" required>
                        </div>

                        <div class="form-outline mb-4 pb-4 ">
                            <input type="password" class="form-control inr" name="password" placeholder="Password" required>
                        </div>

                        <div class="form-check d-flex justify-content-center mb-4 pt-4">
                            <input class="form-check-input me-4" type="checkbox" checked name="checkbox">
                            <label class="form-check-label"> Subscribe to our newsletter </label>
                        </div>

                            <button type="submit" class="btn btn-primary btn-block mt-4 mb-4" name="submit" style="font-size: 17px;"> LOG IN </button>

                        <div class="row mt-4 mb-4 pb-2 ">
                            <h4> Or <a href="register.php" style="text-decoration: none; color-primary"  > Sign Up </a> with ? </h4>
                        </div>

                            <a href="#" class="ican"><i class="fa fa-facebook"></i> </a>
                            <a href="#" class="ican"><i class="fa fa-google"></i> </a>
                            <a href="#" class="ican"><i class="fa fa-twitter"></i> </a>
                            <a href="#" class="ican"><i class="fa fa-github"></i> </a>
                    </form>
                </div>    
            </div>    
        </div>
        <div class="img" >
            <img src="../../image/pic.jpg" alt="" width="auto" height="640px">
        </div>            
    </div>
<script>
        
    function sessionApi(){
        $.ajax({
            type:'GET',
            url:'../../include/sessionApi.php',
            data:'',
            success:function(data){
                let resp = JSON.parse(data);
                if(resp.status && resp.data.session){ 
                    window.location.href = '../../backend/layout/dashboard.php';
                }
            }
        });
    }
    sessionApi();

    $(document).ready(function(e){
        $('#loginForm').submit(function(e){
            e.preventDefault();

            let form = $(this);
            let actionUrl = form.attr('action');
            console.log('formdata',form.serialize())

            $.ajax({
                type:'POST',
                url: actionUrl,
                data:form.serialize(),
                success: function(data){
                    let resp = JSON.parse(data);
                    if(resp.status){
                        localStorage.setItem("auth", true);
                        window.location.assign('../../backend/layout/dashboard.php');
                    } else {
                        alert(resp.message);
                    }
                }
            });
        });
    });

</script>    
</body>
</html>    
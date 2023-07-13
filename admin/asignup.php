<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #4070f4;
}
.container{
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}
.container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
}
.container form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}
.container form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.container form button, .backBtn{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}
.container form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .backBtn i{
    transform: rotate(180deg);
}
form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .backBtn{
    margin-right: 14px;
}

@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
}

</style>
<body>
    <div class="container">
        <header>Registration For Admin</header>

        <form action="asignup.php" method = "POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title"></span>

                    <div class="fields">

                        <div class="input-field">
                            <label>Name of Organisation</label>
                            <input type="text" name="orgname" placeholder="Enter Organisation Name" required>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="add" placeholder="Enter your address" required>
                        </div>

                        <div class="input-field">
                            <label>Contact Number</label>
                            <input type="text" name="phone" placeholder="Enter your phone" required>
                        </div>

                        <div class="input-field">
                            <label>Website</label>
                            <input type="text" name="weburl" placeholder="Enter your website url" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" name="pass" placeholder="Create password" required>
                        </div>

                        <div class="input-field">
                            <label>Confirm Password</label>
                            <input type="password" name="confpass" placeholder="Enter password again" required>
                        </div>

                        <div class="input-field">
                            <label>Organisation</label>
                            <select name="organisation" required>
                                <option disabled selected>select organisation type</option>
                                <option value="Hospital">Hospital</option>
                                <option value="BloodBank">BloodBank</option>
                                <option value="Clinic">Clinic</option>
                            </select>

                        </div>

                        <div class="input-field">
                            <label>License Number</label>
                            <input type="text" name="license_num" placeholder="Enter your License Number" required>
                        </div>

                    </div>

                    <button class="nextBtn" name = "sub">
                        <span class="btnText">Sign Up</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
                <p class="register">Have An Admin Account? <a href="aindex.php">Sign in</a></p>
            </div>
            
        </form>
    </div>
<?php
include("inc/db.php");


if(isset($_POST["sub"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $orgname = $_POST['orgname'];
    $add = $_POST['add'];
    $phone = $_POST['phone'];
    $weburl = $_POST['weburl'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $organisation = $_POST['organisation'];
    $license_num = $_POST['license_num'];



    $stmt = $conn->prepare("INSERT INTO admin_registration(org_name, org_add, org_no, website_url,org_email,org_pass,org_type,org_license_no) VALUES (?, ?, ?, ?, ?,?,?,?)");
    $stmt->bind_param("ssssssss", $orgname, $add, $phone,$weburl,$email,$pass, $organisation, $license_num);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // echo "Registration successful!";
        echo "<script>window.location = 'aindex.php';</script>";
    }

}
else{
        echo 'Password Not Match! Please try again!';
    }
}
?>

</body>
</html>

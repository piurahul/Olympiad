<html>
	<head>
        <title>School Registration</title>
        <meta http-equiv="content-type" content="text/html" />
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "icon" href ="images/icon.png" alt= "Olympiad Foundation" type = "image/x-icon">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style1.css">
	</head>
	<body>
        
        <div class="head">
            <div class="hm"><a href="index.html"><b>◄ Home</b></a></div>
            <span style="font-size: large; padding-left: 35%;"><b>Olympiad Foundation</b></span></div>
        <div class="foot"><p style="font-size: small;">Please be sure that you are entering correct information.</p></div>
        <div class="op"><h4><b>Quick Links<hr></b></h4>
            <a href="registerstudent.html"><b>Student Registration</b><hr></a>
            <a href="registerteacher.html"><b>Teacher Registration</b></a><hr>
            <a href="registercoordinator.html"><b>Co-ordinator Registration</b></a></div>

        <?php
        $con= mysqli_connect('localhost','OLYMP','a&]L+9{J9ift', 'school') or die ("Can't connect to MySQL server.");
       /* if(isset($_POST['sendotp'])){
            require('Textlocal.class.php');
 
	        $Textlocal = new Textlocal(false, false, 'KP33b5y9M4I-jWEOhCzk4EF1siRQAy3DRhgTbem5JI');
 
	        $numbers = array($_POST['phone1']);
            $sender = 'OLYMP';
            $otp=mt_rand(10000, 99999);
	        $message = "Thanks".$_POST['noi']."for registration. This is your OTP: ".$otp;
 
            $response = $Textlocal->sendSms($numbers, $message, $sender);
            setcookie('submit_otp', $otp);
            print_r($response);
        }*/
        if(isset($_POST['submit'])){
            if ($_POST['noi'] == "" || $_POST['address'] == "" || $_POST['block'] == "" || $_POST['district'] == "" || $_POST['state'] == "" || $_POST['board'] == "" || 
            $_POST['ac'] == "" || $_POST['email'] == "" || $_POST['website'] == "" || $_POST['phone'] == "" || $_POST['pn'] == "" || $_POST['phone1'] == "" || $_POST['cp'] == "" || $_POST['pass'] == "" || $_POST['submit_otp'] == "") {
            }else{
            $noi = mysqli_real_escape_string($con, $_POST['noi']);
            $address = mysqli_real_escape_string($con, $_POST['address']);
            $block = mysqli_real_escape_string($con, $_POST['block']);
            $district = mysqli_real_escape_string($con, $_POST['district']);
            $state = mysqli_real_escape_string($con, $_POST['state']);
            $board = mysqli_real_escape_string($con, $_POST['board']);
            $ac = mysqli_real_escape_string($con, $_POST['ac']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $website = mysqli_real_escape_string($con, $_POST['website']);
            $phone = mysqli_real_escape_string($con, $_POST['phone']);
            $pn = mysqli_real_escape_string($con, $_POST['pn']);
            $phone1 = mysqli_real_escape_string($con, '91'.$_POST['phone1']);
            $cp = mysqli_real_escape_string($con, $_POST['cp']);
            $pass = mysqli_real_escape_string($con, $_POST['pass']);
            $submit_otp = mysqli_real_escape_string($con, $_POST['submit_otp']);
            
            $pas = password_hash($pass, PASSWORD_BCRYPT);

            $emailquery = "select * from resgistration where email='$email'";
            $query = mysqli_query($con,$emailquery);

            $emailcount = mysqli_num_rows($query);

            if($emailcount>0){
                echo "Email already exist";
            }else{
                $insertquery ="insert into resgistration( noi, address, block, district, state, board, ac, email, website, phone, pn, phone1, cp, pass) values('$noi','$address','$block','$district','$state','$board','$ac','$email','$website','$phone','$pn','$phone1','$cp','$pas')";
                $iquery = mysqli_query($con, $insertquery);
                header("Location: login.php"); 
                }
            }
        }
        ?>

        <form class="box1" method="POST">
            <input type="text" id="tx3" name="noi" placeholder="Name of Institution" required>
            <input type="text" id="tx3" name="address" placeholder="Address V.P.O" required>
            <input type="text" id="tx1" name="block" placeholder="Block" required>
            <input type="text" id="tx2" name="district" placeholder="District" required>
            <select name = "state">
                <option value="06" selected>06-HARYANA</option>
                <option value="05">05-UTTARAKHAND </option>
                <option value="24">24-GUJARAT </option>
                <option value="25">25-DAMAN AND DIU </option>
                <option value="13">13-NAGALAND </option>
                <option value="14">14-MANIPUR </option>
                <option value="11">11-SIKKIM </option>
                <option value="12">12-ARUNACHAL PRADESH </option>
                <option value="35">35-ANDAMAN AND NICOBAR </option>
                <option value="36">36-TELANGANA </option>
                <option value="07">07-DELHI </option>
                <option value="08">08-RAJASTHAN </option>
                <option value="31">31-LAKSHWADEEP </option>
                <option value="32">32-KERALA </option>
                <option value="15">15-MIZORAM </option>
                <option value="16">16-TRIPURA </option>
                <option value="03">03-PUNJAB </option>
                <option value="04">04-CHANDIGARH </option>
                <option value="01">01-JAMMU AND KASHMIR </option>
                <option value="02">02-HIMACHAL PRADESH </option>
                <option value="17">17-MEGHLAYA </option>
                <option value="18">18-ASSAM </option>
                <option value="20">20-JHARKHAND </option>
                <option value="21">21-ODISHA </option>
                <option value="22">22-CHATTISGARH</option>
                <option value="23">23-MADHYA PRADESH</option>
                <option value="26">26-DADAR AND NAGAR HAVELY</option>
                <option value="27">27-MAHARASHTRA</option>
                <option value="29">29-KARNATAKA</option>
                <option value="30">30-GOA</option>
                <option value="33">33-TAMIL NADU </option>
                <option value="34">34-PUDUCHERRY </option>
            </select>
            <hr>
            <select id="board" name="board">
                <option value = "CBSE">CBSE ( Central Board of Secondary Education )</option>
                <option value = "ICSE">ICSE ( Indian Certificate of Secondary Education )</option>
                <option value = "NIOS">NIOS ( National Institute of Open Schooling )</option>
                <option value = "SB">SB ( STATE BOARD )</option>
            </select>
            <span style="font-size: medium;"><b>Affilated up to Class: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                <label class="radio-inline">
                    <input type="radio" name="ac" value="Senior Sec. School" checked><b>Senior Sec. School</b>
                </label>&nbsp;&nbsp;&nbsp;
                <label class="radio-inline">
                    <input type="radio" name="ac" value="High School"><b>High School</b>
                </label>&nbsp;&nbsp;&nbsp;
                <label class="radio-inline">
                    <input type="radio" name="ac" value="Middle School"><b>Middle School</b>
                </label></span><hr>
            <input type="email" id="tx4" name="email" placeholder="Email" pattern="[a-zA-z0-9]+@+[a-zA-z]+.+com" title="test@gmail.com" required>
            <input type="text" id="tx5" name="website" placeholder="Website Link" pattern="[a-zA-z0-9]+.+[a-z]{2,3}" title="olympiadfoundation.in"required>
            <input type="tel" id="tx5" name="phone" placeholder="School Phone Number" pattern="[0-9]{7-11}" required>
            <input type="text" name="pn" id="tx5" placeholder="Principal Name" required>
            <input type="tel" id="tx6" name="phone1" placeholder="Phone Number" pattern="[0-9]{7-11}" required>
            <input type="button" name="sendotp" value="Send OTP">
            <input type="text" name="cp" id="tx5" placeholder="Contact Person">
            <input type="password" name="pass" placeholder="Password" required>
            <input type="text" id="tx7" name="submit_otp" placeholder="Enter OTP" pattern="[0-9]{5}" required>
            <input type="submit" name="submit" id="submit" value="Submit">
        </form>
    </body>
</html>
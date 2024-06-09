<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");

* {
  margin: 0;padding: 0;box-sizing: border-box;font-family: "Poppins", sans-serif;
}

:root {
  --main-blue: #71b7e6;
  --main-purple: #9b59b6;
  --main-grey: #ccc;
  --sub-grey: #d9d9d9;
}

body {
  display: flex;
  height: 100vh;
  justify-content: center; /*center vertically */
  align-items: center; /* center horizontally */
  background: linear-gradient(135deg, var(--main-blue), var(--main-purple));padding: 10px;
}
/* container and form */
.container {
  max-width: 550px;
  width: 100%;
  background: #fff;
  padding: 25px 30px;
  border-radius: 5px;
}
.container .title {
  font-size: 25px;
  font-weight: 500;
  position: relative;
}

.container .title::before {
  content: "";
  position: absolute;
  height: 3.5px;
  width: 30px;
  background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
  left: 0;
  bottom: 0;
}

.container form .user__details {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
/* inside the form user details */
form .user_details .input_box {
  width: calc(100% / 2 - 20px);
  margin-bottom: 15px;
}

.user_details .input_box .details {
  font-weight: 500;
  margin-bottom: 5px;
  display: block;
}
.user_details .input_box input {
  height: 45px;
  width: 100%;
  outline: none;
  border-radius: 5px;
  border: 1px solid var(--main-grey);
  padding-left: 15px;
  font-size: 16px;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.user_details .input_box input:focus,
.user_details .input_box input:valid {
  border-color: var(--main-purple);
}

/* inside the form gender details */

form .gender_details .gender_title {
  font-size: 20px;
  font-weight: 500;
}

form .gender__details .category {
  display: flex;
  width: 80%;
  margin: 15px 0;
  justify-content: space-between;
}

.gender__details .category label {
  display: flex;
  align-items: center;
}

.gender__details .category .dot {
  height: 18px;
  width: 18px;
  background: var(--sub-grey);
  border-radius: 50%;
  margin: 10px;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}

#dot-1:checked ~ .category .one,
#dot-2:checked ~ .category .two,
#dot-3:checked ~ .category .three {
  border-color: var(--sub-grey);
  background: var(--main-purple);
}

form input[type="radio"] {
  display: none;
}

/* submit button */
form .button {
  height: 45px;
  margin: 45px 0;
  
}

form .button input {
  height: 100%;
  width: 100%;
  outline: none;
  color: #fff;
  border: none;
  font-size: 18px;
  font-weight: 500;
  border-radius: 5px;
  background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
  transition: all 0.3s ease;
}

form .button input:hover {
  background: linear-gradient(-135deg, var(--main-blue), var(--main-purple));
  cursor: pointer;
}

@media only screen and (max-width: 584px) {
  .container {
    max-width: 100%;
  }

  form .user_details .input_box {
    margin-bottom: 15px;
    width: 100%;
  }

  form .gender__details .category {
    width: 100%;
  }

  .container form .user__details {
    max-height: 300px;
    overflow-y: scroll;
  }

  .user__details::-webkit-scrollbar {
    width: 0;
  }
}
  .at_first{text-align: center;}
  .at_first a{text-decoration: none;font-weight: bold;}
  </style>
</head>
<body>
    <div class="container">
        <div class="title">Registration</div>
        <form action="#">
          <div class="user__details">
            <div class="input__box">
              <span class="details">name</span>
              <input type="text" placeholder="johnWC98" name="name">
            </div>
            <div class="input__box">
              <span class="details">Email</span>
              <input type="email"  value="" name="email">
            </div>
            <div class="input__box">
              <span class="details">Phone Number</span>
              <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  value="" name="phone">
            </div>
            <div class="input__box">
              <span class="details">Password</span>
              <input type="password" placeholder="" required name="password" value="">
            </div>
           
          </div>
          <div class="gender__details">
            <input type="radio" name="gender" id="dot-1">
            <input type="radio" name="gender" id="dot-2">
            <input type="radio" name="gender" id="dot-3">
            <span class="gender__title">Gender</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span>Male</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span>Female</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span>Others</span>
              </label>
            </div>
          </div>
          <div class="button">
            <input type="submit" value="submit">
          </div>
          <!-- <div class="at_first">
            Already have an account?<a href="{{Route('login')}}"> Login</a>
            </div> -->
        </form>
      </div>
</body>
</html>
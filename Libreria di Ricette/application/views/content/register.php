<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= base_url('assets/css/stylesheet.css/')?>">
  </head>
  <body>
    <div class="container">
        <div class="inputs">
            <label>Full Name</label>
            <input type="text" placeholder="Your Name" class="input-field" value="<?= set_value('nama') ?>">
            <label>Email Adress</label>
            <input type="email" placeholder="Email Address" class="input-field" value="<?= set_value('email') ?>">
            <label>Gender</label>
            <div class="radio-btn">

    <label>
    <input type="radio" name="gender" value="male">
    <span class="mark"></span>
    <span class="btn-border"></span>
    Male</label>

    <label>
    <input type="radio" name="gender" value="female">
    <span class="mark"></span>
    <span class="btn-border"></span>
    Female</label>

        </div>
        <label>Date of Birth</label>>
        <input type="Date" placeholder="DD/MM/YYY" class="input-field" value="<?= set_value('tanggalLahir') ?>">
        <div class="text">
            <input type="checkbox"/>
            <p>I accept the <a href="#">terms & conditions</a></p>
        </div>
        <div class="btn">
            <button>Create Account</button>
        </div>
        </div>
</div>

  </body>
</html>

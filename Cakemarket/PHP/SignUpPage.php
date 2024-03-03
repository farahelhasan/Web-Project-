<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Title</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital@0;1&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../CSS/signUpPage.css" />
  </head>
  <body>


    <section style="background-color: #ffb3ba;">
      <div class="Box">
      <div class="welcom-box">
      <img src="../images/logoo.png" style="width: 499px; height: 547px;border-radius: 30px 0px 0px 30px ">
        </div>
        <div class="form-box">
          <form action="signup.php" method="post">
            <table>
              <tr>
                <td>
                  <h2>Sign Up</h2>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text"  name = "firstName" id ="firstName"  required />
                    <label for="">First Name</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name = "lastName" id ="lastName" required />
                    <label for="">Last Name</label>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" id="email" name="email" required />
                    <label for="">Email</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" id="password" name="password" required />
                    <label for="">Password</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="inputbox">
                    <ion-icon name="bag-check-outline"></ion-icon>
                    <input type="password" id="confirmPassword" name="confirmPassword" required />
                    <label for="">Confirm Password</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="signup-button">
                    <input type="submit" name="" id="" />
                  </div>
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </section>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>

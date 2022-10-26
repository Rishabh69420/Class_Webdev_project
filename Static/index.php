<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Idk what to do here</title>
    <link rel="stylesheet" href="Resources/Static/Index_style.css" />
  </head>
  <body>
    <div class="header">
      <div id="left">Sudoku??</div>
      <div id="right">
        <a href="#">Leaderboard</a><a id="login" href="#">Log In</a><a id="signup" href="#">Sign up</a>
        <div class="loginsignup" style="display: none;">
          <div class="popup">
            <div class="form-div" style="margin: 0 0 0 0%;">
              <form class="loginForm" action="/verify.html" method="post" style="visibility: visible; height: 100%; padding: 1.5em 0 0 1.5em; opacity: 100%;">
                Log In<br><br>
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="username">Password:</label><br>
                <input type="password" id="password-log" name="password"><a class="eye">idk</a><br>
                <a id="toSign">Don't have an account? Sign up.</a><br>
                <input type="submit" value="Log In">
              </form>
              <form class="signupForm" action="" method="post" style="visibility: hidden; height: 0%; padding: 1.5em 0 0 1.5em; opacity: 0%;">
                Sign Up <br>
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="username">Password:</label><br>
                <input type="password" id="password-sign" name="password"><br>
                <label for="username">Retype Password: </label><br>
                <input type="password" id="repassword-sign" name="password"><br>
                <a id="toLog">Have an account? Log in.</a><br>
                <input type="submit" value="Sign Up">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="body">
      <div class="grid-div">
        <table id="grid">
          <tr>
            <td><input id="cell-0" oninput="onInput(event)" class="cell" type="text" value="5" disabled></td>
            <td><input id="cell-1" oninput="onInput(event)" class="cell" type="text" value="3" disabled></td>
            <td><input id="cell-2" oninput="onInput(event)" class="cell" type="text"></td>
            
            <td><input id="cell-3" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-4" oninput="onInput(event)" class="cell" type="text" value="7" disabled></td>
            <td><input id="cell-5" oninput="onInput(event)" class="cell" type="text"></td>
            
            <td><input id="cell-6" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-7" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-8" oninput="onInput(event)" class="cell" type="text"></td>
          </tr>
  
          <tr>
            <td><input id="cell-9" oninput="onInput(event)" class="cell" type="text" value="6" disabled></td>
            <td><input id="cell-10" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-11" oninput="onInput(event)" class="cell" type="text"></td>
            
            <td><input id="cell-12" oninput="onInput(event)" class="cell" type="text" value="1" disabled></td>
            <td><input id="cell-13" oninput="onInput(event)" class="cell" type="text" value="9" disabled></td>
            <td><input id="cell-14" oninput="onInput(event)" class="cell" type="text" value="5" disabled></td>
            
            <td><input id="cell-15" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-16" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-17" oninput="onInput(event)" class="cell" type="text"></td>
          </tr>
  
          <tr>          
            <td><input id="cell-18" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-19" oninput="onInput(event)" class="cell" type="text" value="9" disabled></td>
            <td><input id="cell-20" oninput="onInput(event)" class="cell" type="text" value="8" disabled></td>
            
            <td><input id="cell-21" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-22" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-23" oninput="onInput(event)" class="cell" type="text"></td>
            
            <td><input id="cell-24" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-25" oninput="onInput(event)" class="cell" type="text" value="6" disabled></td>
            <td><input id="cell-26" oninput="onInput(event)" class="cell" type="text"></td>
          </tr>
  
          <tr>          
            <td><input id="cell-27" oninput="onInput(event)" class="cell" type="text" value="8" disabled></td>
            <td><input id="cell-28" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-29" oninput="onInput(event)" class="cell" type="text"></td>
            
            <td><input id="cell-30" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-31" oninput="onInput(event)" class="cell" type="text" value="6" disabled></td>
            <td><input id="cell-32" oninput="onInput(event)" class="cell" type="text"></td>
            
            <td><input id="cell-33" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-34" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-35" oninput="onInput(event)" class="cell" type="text" value="3" disabled></td>
          </tr>
  
          <tr>          
            <td><input id="cell-36" oninput="onInput(event)" class="cell" type="text" value="4" disabled></td>
            <td><input id="cell-37" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-38" oninput="onInput(event)" class="cell" type="text"></td>
            
            <td><input id="cell-39" oninput="onInput(event)" class="cell" type="text" value="8" disabled></td>
            <td><input id="cell-40" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-41" oninput="onInput(event)" class="cell" type="text" value="3" disabled></td>
            
            <td><input id="cell-42" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-43" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-44" oninput="onInput(event)" class="cell" type="text" value="1" disabled></td>
          </tr>
  
          <tr>          
            <td><input id="cell-45" oninput="onInput(event)" class="cell" type="text" value="7" disabled></td>
            <td><input id="cell-46" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-47" oninput="onInput(event)" class="cell" type="text"></td>
            
            <td><input id="cell-48" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-49" oninput="onInput(event)" class="cell" type="text" value="2" disabled></td>
            <td><input id="cell-50" oninput="onInput(event)" class="cell" type="text"></td>
            
            <td><input id="cell-51" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-52" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-53" oninput="onInput(event)" class="cell" type="text" value="6" disabled></td>
          </tr>
  
          <tr>          
            <td><input id="cell-54" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-55" oninput="onInput(event)" class="cell" type="text" value="6" disabled></td>
            <td><input id="cell-56" oninput="onInput(event)" class="cell" type="text"></td>
            
            <td><input id="cell-57" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-58" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-59" oninput="onInput(event)" class="cell" type="text"></td>
            
            <td><input id="cell-60" oninput="onInput(event)" class="cell" type="text" value="2" disabled></td>
            <td><input id="cell-61" oninput="onInput(event)" class="cell" type="text" value="8" disabled></td>
            <td><input id="cell-62" oninput="onInput(event)" class="cell" type="text"></td>
          </tr>
  
          <tr>          
            <td><input id="cell-63" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-64" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-65" oninput="onInput(event)" class="cell" type="text"></td>
            
            <td><input id="cell-66" oninput="onInput(event)" class="cell" type="text" value="4" disabled></td>
            <td><input id="cell-67" oninput="onInput(event)" class="cell" type="text" value="1" disabled></td>
            <td><input id="cell-68" oninput="onInput(event)" class="cell" type="text" value="9" disabled></td>
            
            <td><input id="cell-69" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-70" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-71" oninput="onInput(event)" class="cell" type="text" value="5" disabled></td>
          </tr>
  
          <tr>
            <td><input id="cell-72" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-73" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-74" oninput="onInput(event)" class="cell" type="text"></td>
            
            <td><input id="cell-75" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-76" oninput="onInput(event)" class="cell" type="text" value="8" disabled></td>
            <td><input id="cell-77" oninput="onInput(event)" class="cell" type="text"></td>
            
            <td><input id="cell-78" oninput="onInput(event)" class="cell" type="text"></td>
            <td><input id="cell-79" oninput="onInput(event)" class="cell" type="text" value="7" disabled></td>
            <td><input id="cell-80" oninput="onInput(event)" class="cell" type="text" value="9" disabled></td>
          </tr>
        </table>
      </div>
    </div>
  </body>
  <script src="Resources/Scripts/animator.js"></script>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up!</title>
    <link href="style-main.css" rel="stylesheet">

  </head>
  <body>
  <div id="header"> <img src="img/ph-header2.png" width="739"
    height="135"></div>
    <div id="topLine"></div>
    <div id="mainContent">

      <h1> Hello The Inside! </h1>
      <form action="form-action.php" method="post" name="signup" id="signup">
        <h2> Contact Info </h2>
        <p>
          <label for="name"> Name: </label>
          <input name="name" type="text" id="name" size="60">
          <label for="email"> Email: </label>
          <input name="email" type="text" id="email" size="60">
        </p>
        <h2> Your Interests </h2>
        <p>
          Expierience Level: <br>
          <label><input name="level" type="radio" id="expert" value="expert"> expert>
            Expert</label>
          </p>
          <p>
            What do you read?
            <br>
            <label><input name="publications[]" type="checkbox"
              id="publications_drf" value="Buzzfeed"> Buzzfeed</label>

              <br><label><input name="publications[]" type="checkbox"
                id="publications_elle" value="Reddit"> Reddit</label>
              </p>
              <p>
                Fun Stuff:<br>
                <select name="howoftentrack" id="howoftentrack">
                  <option value="daily">Weekly Highlights </option>
                  <option value="yearly">GIFs</option>
                  <option value="email-reminds">Forgotten Emails</option>
                </select>
              </p>
              <p> Tell us about yourself!<br>
                <textarea name="comments" id="comments" cols="52" rows="5">
                </textarea>
              </p>
              <input class="button lgButton" type="submit" name="submit"
              id="submit" value="Sign Me Up!">
            </form>
          </div>
          <div id= "footer">
            <a href="#"> Change your email </a>
            <a href="#"> Contact the insider </a>
            <div>
            </body>
            </html>


  </body>
</html>

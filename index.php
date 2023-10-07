<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>

</head>

<body>

  <body>

    <h2>ENTER YOUR DETAILS</h2>

    <form id="formID" class="formular" method="post" action="./connect.php" enctype="multipart/form-data">
      <br>
      <fieldset>
        <table border=0 width=100% cellpadding="8" align="center">
          <tr>
            <td align="right">
              <h>First Name</h>
              <font color="Red">*</font>
            </td>
            <td align="left"> <input value="" class="validate[required]" type="text" name="Fristname" id="Fristname" />
            <td align="right">
              <h>Last Name :</h>
              <font color="Red">*</font>
            </td>
            <td align="left"> <input value="" size=10 class="validate[required]" type="text" name="Lastname"
                id="Lastname" />
          </tr>

          <tr>
            <td align="right">
              <h>Designation:</h>
              <font color="Red">*</font>
            </td>
            <td align="left"> <select name="Designation" class="validate[required]" id="Designation">
                <option value=""><-Select-></option>
                <option value="Professor">Professor</option>
                <option value="Associate Professor">Associate Professor</option>
                <option value="Assistant Professor">Assistant Professor</option>
              </select>

            <td align="right">
              <h>Qualification :</h>
              <font color="Red">*</font>
            </td>
            <td align="left"> <select name="Qualification" class="validate[required]" id="Qualification">
                <option value=""><-Select-></option>
                <option value="B.Tech">B.Tech</option>
                <option value="M.Ttech">M.Ttech</option>
                <option value="Ph.D">Ph.D</option>
              </select>
          </tr>

        </table>

      </fieldset>
      <table align="center"><br><br>
        <tr>
          <td>
            <input type="submit" style="font-size:13px;font-size: 11px;background-color:#DEB887" name="submit"
              value="SUBMIT">
          </td>
        </tr>

      </table>

      </div>
    </form>

    </table>
  </body>

</html>
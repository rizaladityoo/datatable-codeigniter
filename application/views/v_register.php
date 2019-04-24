<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Form Register
    <form action="<?php echo base_url(). 'index.php/crud/registration_action'; ?>" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td>Email</td>
          <td><input type="email" name="email" value=""></input></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" value=""></input></td>
        </tr>
        <tr>
          <td>Confirm Password</td>
          <td><input type="password" name="c_password" value=""></input></td>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" value=""></input></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td><input type="radio" name="gender" value="male"> Male</td>
          <td><input type="radio" name="gender" value="female"> Female</td>
        </tr>
        <tr>
          <td>Telephone</td>
          <td><input type="number" name="telepon" value=""></input></td>
        </tr>
        <tr>
          <td>Occupation</td>
          <td>
            <select class="" name="pekerjaan">
              <option value="belum bekerja">belum bekerja</option>
              <option value="karyawan swasta">karyawan swasta</option>
              <option value="pegawai negeri">pegawai negeri</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Photo</td>
          <td><input type="file" name="foto"></input></td>
        </tr>
        <tr>
          <td>
            <button>Submit</button>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>

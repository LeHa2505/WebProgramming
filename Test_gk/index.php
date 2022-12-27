<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="./ShowAll.php">
      <button>Hiển thị tất cả sản phẩm</button>
    </form>

    <p>Tìm kiếm sản phẩm theo tên</p>
    <form action="./SearchData.php" method="post">
      <input type="text" name="brand" size="20" placeholder="input brand" />
      <button type="submit">Tìm kiếm</button>
    </form>
<hr>
    <form action="./authentication.php" method="post">
      <label for="username">Username</label> <br>
      <input type="text" name="username"> <br>
      <label for="password">Password</label><br>
      <input type="text" name="password"> <br>
      <button type="submit">Submit</button>
    </form>
  </body>

  <footer>
    <p>Lê Thị Hà</p>
    <p>MSSV: 20194544</p>
  </footer>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf=8">
        <meta name="viewport" content="width=device-width", initial-scale="1">
        <title>Latihan 1 PHP</title>
    </head>
    <body>
        <h1> Selamat Datang</h1>
 <form action="" method="post">
<input type="text" name="no_telepon" onkeypress="return inputAngka(event)"/>
    <button type="submit" name="simpan">Simpan</button>
 </form>

        <div id="main">
            <div id="login">
                <h2>Form</h2>
                <hr/>
                <form action="" method="post">
                    <label>Student Name  :</label>
                    <input type="text" name="stu_name" id="name" required="required" placeholder="Please Enter Name"/><br /><br />
                    <label>Student Email  :</label>
                    <input type="email" name="stu_email" id="email" required="required" placeholder="john123@gmail.com"/><br/><br />
                    <label>Student City  :</label>
                    <input type="text" name="stu_city" id="school"   required="required" placeholder="Please Enter Your City"/><br/><br />
                    <input type="submit" value=" Submit " name="submit"/><br />
                </form>
            </div>
        </div>
    <button>Hitung</button>
</body>
</html>
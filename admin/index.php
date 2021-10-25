<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEME-WORLD-ADMIN</title>
</head>
<body>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit aut animi, doloremque assumenda saepe voluptatem provident odit perspiciatis amet illum minima debitis nulla, alias doloribus. Nulla, repudiandae, voluptatem nesciunt eaque tempore ducimus cupiditate dicta fugit modi blanditiis quidem aspernatur, recusandae totam molestias. Harum ipsa, ullam facere ad, delectus quibusdam praesentium veritatis, sit consequuntur provident hic dolor unde optio amet?
    <form action="incs/uploadpdf.inc.php" method="post" enctype="multipart/form-data">

        <label for="songname">File Name:</label>
        <input type="text" name="PdfName">
         <label for="songname">Owner:</label>
        <input type="text" name="owner"> 
        <br>
        
        <label for="artist-Name">Falculty:</label>
        <select name="cat" id="">
            <option value="Mechanical">
                Mechanical
            </option>
            <option value="Mechanical">
                Mechanical
            </option>
            <option value="Mechanical">
                Mechanical
            </option>
            <option value="Mechanical">
                Mechanical
            </option>
        </select>
        <label for="Tags">Tags:</label>
        <input type="text" name="Tags"> 
        <label for="file">PDF File:</label>
        <input type="file" name="file" id="">
        <br>
        <label for="Description">Description:</label>
        <textarea name="description" id="" cols="30" rows="10" resize="0"></textarea>
        
        <button name="uploadpdf" value="Upload">Upload PDF</button>

    </form>
    <br>
    <br>
    
    <form action="incs/uploadpdf.inc.php" method="post" enctype="multipart/form-data">

        <label for="songname">File Name:</label>
        <input type="text" name="PdfName">
         <label for="songname">Owner:</label>
        <input type="text" name="owner"> 
        <br>
        
        <label for="artist-Name">Falculty:</label>
        <select name="cat" id="">
            <option value="Mechanical">
                Mechanical
            </option>
            <option value="Mechanical">
                Mechanical
            </option>
            <option value="Mechanical">
                Mechanical
            </option>
            <option value="Mechanical">
                Mechanical
            </option>
        </select>

        <select name="level" id="">
            <option value="100">
                100
            </option>
            <option value="200">
                200
            </option>
            <option value="300">
                300
            </option>
            <option value="400">
                400
            </option>
        </select>
        <label for="Tags">Tags:</label>
        <input type="text" name="Tags"> 
        <label for="file">PDF File:</label>
        <input type="file" name="file" id="">
        <br>
        <label for="Description">Description:</label>
        <textarea name="description" id="" cols="30" rows="10" resize="0"></textarea>
        
        <button name="uploadpdf" value="level">Upload PDF</button>

    </form>
    <br>>
      <form action="incs/uploadnews.inc.php" method="post" enctype="multipart/form-data">

        <label for="Title">News TITLE</label>
        <input type="text" name="Title"> 
        <br>
        <!-- <label for="artist-Name">Artist Name:</label>
        <input type="text" name="artistname"> -->
        
        <label for="Description">Story:</label>
        <textarea name="description" id="" cols="30" rows="10" resize="0"></textarea>
        <label for="category">Category:</label>
        <input type="text" name="category">
        <label for="file">Pictures :</label>
        <input type="file" name="img1" id="">
        <input type="file" name="img2" id="">
        <input type="file" name="img3" id="">

        <br>
        <button name="uploadnews" value="Upload">uploadsong</button>

    </form>

   
</body>
</html>
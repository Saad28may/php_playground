<?php if(isset($_POST["submit"])) { ?>

    <li><?= $_POST['name'] ?></li>
    <li><?= $_POST['email'] ?></li>
    <li><?= $_POST['password'] ?></li>
    <li><?= $_POST['gender'] ?></li>
    <?php
        if(isset($_POST['Bike'])){

            echo "<li>bike</li>  ";  
            }
    ?>
    <?php
        if(isset($_POST['Car'])){

        echo "<li>Car</li>  ";  
        }
    ?>
        
    <?php
        if(isset($_POST['None'])){

        echo "<li>None</li>  ";  
        }
    
    ?>
    <td><?= $_POST['favcolor'] ?></td>
    <td><?= $_POST['birthday'] ?></td>
    <td><?= $_POST['rating'] ?></td>
    <td><?= $_POST['skill'] ?></td>
    <td><?= $_POST['filename'] ?></td>



    <?php  } else { ?>


    <h1>MultiServ</h1>
    <form action="" method ="POST">
        <label for="" >Name</label>
        <input type="text" name ="name" ><br><br>
        
        <label for="">Email</label>
        <input type="email" name ="email"><br><br>

        <label for="">Password</label>
        <input type="password" name="password"><br><br>

        <label for="">Gender</label>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="Female" name="gender" value="Female">
        <label for="female">Female</label>
        <input type="radio" id="Others" name="gender" value="Others">
        <label for="others">Others</label><br><br>

        <label for="">Convenyance</label><br><br>
        <input type="checkbox" id="vehicle1" name="Bike" value="Bike">
        <label for="Bike"> Bike</label>
        <input type="checkbox" id="vehicle2" name="Car" value="Car">
        <label for="Car"> Car</label>
        <input type="checkbox" id="vehicle3" name="None" value="None">
        <label for="None"> None</label><br><br>

        <label for="favcolor">Select your favorite color:</label>
        <input type="color" id="favcolor" name="favcolor"><br><br>
        
        <label for="birthday">Date of Birth</label>
        <input type="date" id="birthday" name="birthday">
        
        <label for="rating">Rating (between 1 and 5):</label>
        <input type="number" id="rating" name="rating" min="1" max="5"><br><br>

        <label for="skill">Skill (between 0 and 50):</label>
        <input type="range" id="skill" name="skill" min="0" max="50"><br><br>

        <input type="file" id="myFile" name="filename">
        
        <button type ="submit" name ="submit" > Submit</button>
        <button type="reset">Reset</button>
    </form>

    <?php } ?>
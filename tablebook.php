<?php include "header.php"; ?> 




 <!DOCTYPE html>
<html>
<head>
    <title>Restaurant Table Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .containerr {
            width: 50%;
            margin: 50px auto;
            margin-top: 0px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .boxx{
            margin-top: 150px;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="time"],
        input[type="number"],
        input[type="file"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="containerr">
        <div class="boxx">
                <h2>Book a Table</h2>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                    <label>Name:</label>
                    <input type="text" name="name" required>
                    <label>Email:</label>
                    <input type="email" name="email" required>
                    <label>Phone:</label>
                    <input type="text" name="phone" required>
                    <label>Date:</label>
                    <input type="date" name="date" required>
                    <label>Time:</label>
                    <input type="time" name="time" required>
                    <label>Number of Guests:</label>
                    <input type="number" name="guests" required>
                    
                    <a href='index.php' onClick="alert('You Table Succesfully Booked')"><input type="submit" value="Book"></a>
                </form>
        </div>
    </div>
</body>
</html>
<?php include "footer.php"; ?>
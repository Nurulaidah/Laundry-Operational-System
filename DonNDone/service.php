<?php $active = 'service'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Laundry</title>

    <style>
        body {
            background-color: #3368A0;
            font-family: Arial;
            margin: 0;
        }


        .box {
            width: 400px;
            background-color: #66A3BF;
            margin: 50px auto 100px;
            padding: 30px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #C8DFDB;
        }

        label {
            display: block;
            margin-top: 15px;
            color: #F2EFE7;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>


    <div class="box">

        <h2>Input Your Laundry Details</h2>

        <form action="data.php" method="POST">

            <label>Package Type</label>

            <select name="package" id="package" onchange="changeDetails()">
                <option value="kg">Kg</option>
                <option value="piece">Piece</option>
                <option value="express">Express</option>
            </select>


            <label>Price List</label>

            <select name="price" id="price">
                <option value="Rp7.000">Rp7.000</option>
            </select>


            <label>Time Estimate</label>

            <select name="time" id="time">
                <option value="2 days">2 days</option>
            </select>


            <button type="submit">
                Save
            </button>

        </form>

    </div>


    <script>

        function changeDetails() {

            var packageType = document.getElementById("package").value;
            var price = document.getElementById("price");
            var time = document.getElementById("time");

            if (packageType == "piece") {
                price.innerHTML = "<option>Rp10.000</option>";
                time.innerHTML = "<option>1 day</option>";
            }

            else if (packageType == "kg") {
                price.innerHTML = "<option>Rp7.000</option>";
                time.innerHTML = "<option>2 days</option>";
            }

            else if (packageType == "express") {
                price.innerHTML = "<option>Rp15.000</option>";
                time.innerHTML = "<option>7 hours</option>";
            }

        }

    </script>

</body>
</html>
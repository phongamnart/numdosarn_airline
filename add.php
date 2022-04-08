<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add</title>
        <style>
            .header{
                width: 98%;
                margin: 50px auto 0px;
                color: black;
                text-align: center;
                border-bottom: none;
                padding: 20px;
                font-size: 48px;
            }
            table{
                border: 1px solid #03045e;
                background: #0077b6;
                color: white;

            }
            table td{
                border: 1px solid #03045e;
                padding: 5px;

            }
            .btn1{
                padding: 10px;
                font-size: 20px;
                border: none;
                background: #00ff47;
                width: 150px;
                border-radius: 5px;

            }
            .btn2{
                padding: 10px;
                font-size: 20px;
                border: none;
                background: #fc3a3a;
                width: 150px;
                border-radius: 5px;

            }
            .input_group{
                width: 50%;
                height: 30%;
                padding: 5px 10px;
                font-size: 16px;
                border-radius: 5px;
                border: 1px solid gray;
            }
            
        </style>
    </head>
    <body background="img/6.jpg">
        <div class="header">
            <p>Add Ticket</p>
        </div>

        <form action="add_db.php" method="post">
        <div class="table">
        <table height="100%" width="100%" border="1" align="center">
        <tr>
            <td align="center" style="font-size: 18px;">เที่ยวบิน</td>
            <td><input type="text" name="flight" size="50" class="input_group"></td>
        </tr>
        <tr>
            <td align="center" style="font-size: 18px;">เมืองต้นทาง</td>
            <td><input type="text" name="start" size="50" class="input_group"></td>
        </tr>
        <tr>
            <td align="center" style="font-size: 18px;">เมืองปลายทาง</td>
            <td><input type="text" name="end" size="50" class="input_group"></td>
        </tr>
        <tr>
            <td align="center" style="font-size: 18px;">วัน/เดือน/ปี</td>
            <td><input type="text" name="date" size="50" class="input_group"></td>
        </tr>
        <tr>
            <td align="center" style="font-size: 18px;">เวลาออกบิน</td>
            <td><input type="text" name="time" size="50" class="input_group"></td>
        </tr>
        <tr>
            <td align="center" style="font-size: 18px;">เวลาที่ใช้ในการเดินทาง</td>
            <td><input type="text" name="time_travel" size="50" class="input_group"></td>
        </tr>
        <tr>
            <td align="center" style="font-size: 18px;">สายการบิน</td>
            <td><input type="text" name="airline" size="50" class="input_group" ></td>
        </tr>
        <tr>
            <td align="center" style="font-size: 18px;">เครื่องบิน</td>
            <td><input type="text" name="airplane" size="50" class="input_group" ></td>
        </tr>
        <tr>
            <td align="center" style="font-size: 18px;">ชั้นโดยสาร</td>
            <td><input type="text" name="class" size="50" class="input_group" ></td>
        </tr>
        <tr>
            <td align="center" style="font-size: 18px;">ราคา</td>
            <td><input type="text" name="price" size="50" class="input_group" ></td>
        </tr>
        </div>
    </table><br><br>
    <button type="submit" name="add_data" class="btn1">Add</button>
    <button type="submit" name="back" class="btn2">Back</button>
    </form>
    </body>
</html>
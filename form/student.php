<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration From</title>
</head>
<body style="background-color: #f0f2f5; font-family: Arial, sans-serif; margin: 50px 0;">

    <center>
    
        <h1 style="color: #333; margin-bottom: 20px;"> Student Registration Form </h1>

        <form name="form1" method="POST" action="valid.php">
        <table border="0" style="background-color: #362e2f; border-radius: 10px; padding: 30px; box-shadow: 0px 4px 10px rgba(0,0,0,0.1); width: 450px;">
                
                <tr>
                    <td style="padding: 10px; font-weight: bold; color:white;">Enter Name :- </td>
                    <td style="padding: 10px;"><input type="text" name="txtname" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"></td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; font-weight: bold; color:white;">Address :- </td>
                    <td style="padding: 10px;"><textarea cols="30" rows="4" name="txtadd" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; resize: none;"></textarea></td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; font-weight: bold; color:white;">City :- </td>
                    <td style="padding: 10px;">
                        <select name="selcity" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                            <option value="">---Select City---</option>
                            <option value="Surat">Surat</option>
                            <option value="Valsad">Valsad</option>
                            <option value="Navsari">Navsari</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; font-weight: bold; color:white;">Gender :- </td>
                    <td style="padding: 10px; color:white;">
                        <input type="radio" name="gender" value="Male"> Male 
                        <input type="radio" name="gender" value="Female" style="margin-left: 10px;"> Female
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; font-weight: bold; color:white;">Hobbies :- </td>
                    <td style="padding: 10px; color: white;">
                        <input type="checkbox" name="reading" value="Reading"> Reading <br>
                        <input type="checkbox" name="playing" value="Playing"> Playing <br>
                        <input type="checkbox" name="dancing" value="Dancing"> Dancing
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; font-weight: bold; color: white;">DOB :- </td>
                    <td style="padding: 10px;"><input type="text" name="date" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"></td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; font-weight: bold; color: white;">Mobile Number :- </td>
                    <td style="padding: 10px;"><input type="text" name="mobile" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"></td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; font-weight: bold; color:white;">Email Id :- </td>
                    <td style="padding: 10px;"><input type="email" name="email" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"></td>
                </tr>
                
                <tr>
                    <td style="padding: 10px; font-weight: bold; color:white;">Password :- </td>
                    <td style="padding: 10px;"><input type="password" name="password" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"></td>
                </tr>
                
                <tr>
                    <td colspan="2" style="padding: 20px 10px 10px 10px; text-align: center;">
                        <input type="submit" name="txtsubmit" value="Submit" style="background-color: #4CAF50; color: white; padding: 10px 25px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; margin-right: 10px;">
                        <input type="reset" name="reset" value="Reset" style="background-color: #f44336; color: white; padding: 10px 25px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">
                    </td>
                </tr>
        </table>
        </form>
    </center>

</body>
</html>

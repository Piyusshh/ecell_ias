<html>

<head>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
            function add_row()
            {
                $rowno=$("#employee_table tr").length;
                if($rowno<5){
                $rowno=$rowno+1;
                $("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td></td><td><input type='text' name='name[]' placeholder='Enter Name'></td><td><input type='number' name='age[]' placeholder='Enter Phone Number'></td><td><input type='email' name='job[]' placeholder='Enter Email'></td><td><input type='button' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
                }
            }
            function delete_row(rowno)
            {
                $('#'+rowno).remove();    
            }
        </script>
</head>

<body>
    <div id="wrapper">
        <div id="form_div">
            <form method="post" action="store_detail.php">
                <table>
                    <tr>
                        <td>StartUp Name/ Idea:</td>
                        <td><input type="text" name="startidea" placeholder="Startup Idea" required></td>
                    </tr>
                    <tr>
                        <td>StartUp/ Idea Description:</td>
                        <td><input type="text" name="startdesc" placeholder="Startup Description" required></td>
                    </tr>
                    <tr>
                        <td>ID Number(Leader):</td>
                        <td><input type="number" name="leaderid" placeholder="Leader ID" required></td>
                    </tr>
                    <tr>
                        <td>Roll number(Leader):</td>
                        <td><input type="number" name="leaderrollno" placeholder="Leader Roll number" required></td>
                    </tr>
                </table>
                <table id="employee_table">
                    <tr id="row1">
                        <td>Team member details (Name, phone number, email id):</td>
                        <td><input type="text" name="name[]" placeholder="Enter Name"></td>
                        <td><input type="text" name="age[]" placeholder="Enter Phone Number"></td>
                        <td><input type="text" name="job[]" placeholder="Enter Email"></td>
                    </tr>
                </table>
                <input type="button" onclick="add_row();" value="ADD ROW">
                <input type="submit" name="submit_row" value="SUBMIT">
            </form>
        </div>
    </div>
</body>

</html>
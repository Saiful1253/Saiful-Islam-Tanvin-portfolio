<!DOCTYPE html>
<html lang="en">
    <head>
        <body>
            <table id="main" border="0" cellspacing="0">
                <tr>
                    <td id="header">
                        <h1>PHP with ajax</h1>
                    </td>
                </tr>
                <tr>
                    <td id="table-load">
                        <input type="button" id="load-button" value="Load data">
                    </td>
                </tr>
                <tr>
                    <td id="table-data">
                        <table border="1" width="100%" cellspacing="0" cellpadding="10px">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                            </tr>
                            <tr>
                                <td align="center">1</td>
                                <td>Yahoo Baba</td>   
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $("#load-button").on("click" ,function(e){
                    $.ajax({
                    url : "ajax-load.php",
                    type : "POST",
                    success : function(data){
                        $("#load-data")
                    }
                    });
                    });
                });
            </script>

        </body>
    </head>
</html>

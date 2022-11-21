<?php
include 'header.php';
?>
<h2>Topics 01:- Check username availability</h2>

<div class="content">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td>
                <input type="text" name="username" id="username" placeholder="Enter Your Username...">
            </td>
        </tr>
    </table>

</div>
<!-- <div id="userstatus"></div>
 -->
<?php include 'footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#username").keypress(function(event) {

        let username = $(this).val();
        if (event.which == 13) {
            $.ajax({
                url: "checkuser.php",
                method: "POST",
                data: {
                    username: username
                },
                dataType: "json",
                success: function(data) {
                    console.log(data);
                }
            });

        }




    });

});
</script>
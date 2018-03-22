

<script type="text/javascript">
    (function(){
        emailjs.init("user_V92IPjtB2oUDazgkufIk5");
        //        emailjs.send("vishnu_fernweh", "booking", {})
        emailjs.send("vishnu_fernweh", "booking", {name : <?php $_POST['name']?>, email : <?php $_POST['email']?>, number :<?php $_POST['number']?>});
        window.location.replace("index.html");

    })();

</script>
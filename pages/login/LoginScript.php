<script src="../../js/jquery-3.3.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/main.js"></script>
<script>
    <?php
    if (isset($_SESSION['error'])) {
        echo '$("#exampleModalCenter").modal("show");';
        unset($_SESSION['error']);
    }
    ?>
</script>
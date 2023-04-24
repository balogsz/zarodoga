<script>
    logoutUser('../server/logout.php',render);

    function render(data){
        console.log("Sikeres")
        location.href='./index.php'
    }
</script>
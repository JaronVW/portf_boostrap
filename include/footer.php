<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="js/bootstrap.js"></script>

<script>
    const title = "<?=$title?>";
        switch(title) {
            case "home": 
                var id = document.getElementById("home");
                id.className += "active"
            break;
            case "skills": 
                var id = document.getElementById("skills");
                id.className += "active"
            break;
            case "projects": 
                var id = document.getElementById("projects");
                id.className += "active"
            break;
            case "contact": 
                var id = document.getElementById("contact");
                id.className += "active"
            break;
        }
</script>
</body>

</html>
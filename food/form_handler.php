<html>
<body>

function onDelete(td) {
            if (confirm('Do you want to delete this record?')) {
                row = td.parentElement.parentElement;
                document.getElementById('storeList').deleteRow(row.rowIndex);
            }
            resetForm();
        }

<!-- Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?> -->

</body>
</html>

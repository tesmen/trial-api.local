<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<form action="">
    <input type="text" name="url" id="url_id">
    <button id="button_id">Generate</button>
</form>

<span id="output"></span>

<script>
    $('#button_id').click(function (event) {
        event.preventDefault();
        var value = $('#url_id').val();

        $.get('/create.php?url=' + value).then(function (data) {
            $('#output').text('http://217.107.34.29/redirect.php?hash=' + data)
        })
    })
</script>
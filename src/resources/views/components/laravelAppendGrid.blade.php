
<script>
    // Execute when `DOM ready`
    let myAppendGrid;
    let token = document.getElementsByName('_token')[0].value;
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize appendGrid
        myAppendGrid = new AppendGrid({
            element: "tblAppendGrid",
            uiFramework: "bootstrap4",
            iconFramework: "fontawesome5",
            columns: [{
                name: "users",
                display: "Users",
                type: "select",
                ctrlOptions: {
                    @foreach ($users as $key =>  $elem)
        {{$key}}: "{{ $elem }}",
        @endforeach
    }
    }]
    });
    });
    function ajax_func() {
        $.ajax({
            url: "/adduser/UserUZMobile/dev",
            type: "POST",
            data: {
                user_id: JSON.stringify(myAppendGrid.getAllValue()),
                _token: token
            },
            success: function (response) {
                console.log(response);
                if (response) {
                    $('.success').text(response.success);
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
</script>

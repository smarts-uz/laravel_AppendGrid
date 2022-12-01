<table id="{{$element}}"></table>
<script>
    // Execute when `DOM ready`
    var myAppendGrid;
    var token = document.getElementsByName('_token')[0].value;
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize appendGrid
        myAppendGrid = new AppendGrid({
            element: {{$element}},
            uiFramework: "bootstrap4",
            iconFramework: "fontawesome5",
            columns: [{
                name: "{{$name}}",
                display: "{{$display}}",
                type: "select",
                ctrlOptions: {
                    @foreach (json_decode($ctrlOptions) as $key =>  $elem)
                            {{$key}}: "{{ $elem }}",
                    @endforeach
    }
    }]
    });
    });
    function ajax_func() {
        $.ajax({
            url: "{{$url}}",
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

@include('layouts.datatables')

<table id="tblAppendGrid"></table>

<script src="https://cdn.jsdelivr.net/npm/jquery.appendgrid@2.0.0/dist/AppendGrid.min.js"></script>

<script type="text/javascript">
        var column_appendgrid = [{
            name: "col-1",
            display: "Column 1",
            type: "text"
        }, {
            name: "col-2",
            display: "Column 2",
            type: "date"
        }, {
            name: "col-3",
            display: "Column 3",
            type: "select",
            ctrlOptions: ["Option 1", "Option 2", "Option 3"]
        }];
</script>
<x-laravelAppendGrid></x-laravelAppendGrid>


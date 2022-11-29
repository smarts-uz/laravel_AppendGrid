@include('layouts.datatables')

<table id="tblAppendGrid"></table>

<script src="https://cdn.jsdelivr.net/npm/jquery.appendgrid@2.0.0/dist/AppendGrid.min.js"></script>

<x-laravelAppendGrid url="/adduser/UserUZMobile/dev" ctrlOptions="{{$users}}" name="users" display="Users" element="table1"></x-laravelAppendGrid>


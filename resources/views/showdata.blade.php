<div>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
</div>
<div id="content-my" style="overflow: auto;width:1300px;height:600px;top:50;right:30;position: fixed;background:burlywood;color:black;">
    <form>
        <table class="a">
            <thead>
            <tr>
                <th>Company name</th>
                <th>Category</th>
                <th>Address</th>
                <th>Phone number</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody id="dataTable" >

            @foreach($scrapers as $scraper)
                <tr>
                    <td>{{$scraper->title}}</td>
                    <td>{{$scraper->category}}</td>
                    <td>{{$scraper->address}}</td>
                    <td>{{$scraper->phone}}</td>
                    <td>{{$scraper->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>
</div>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script>




        $('.a').DataTable( {
            paging: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

</script>
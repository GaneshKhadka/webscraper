<div class="htm" style="display: none">
    {!! html_entity_decode($content, ENT_QUOTES, 'UTF-8') !!}
</div>

<div>
    <h2 align="center"><button style="background-color: #5cd08d"><h2> Export to Excel</h2></button></h2><br>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
</div>
<div id="content-my" style="overflow: auto;width:1300px;height:600px;top:50;right:30;position: fixed;background:burlywood;color:black;">
<form action="{{route('saveData')}}" method="get"  name="saveFormData">
    <table class="a" >
        <thead>
        <tr>
            <th>Company name</th>
            <th>Category</th>
            <th>Address</th>
            <th>Phone number</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody id="dataTble" >

        </tbody>
    </table>
    <button type="submit" class="btn btn-success">Save</button>
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
    address();
    function address(){
        var contact= $('.htm').find('.item-container').css('background','red');
        var c=contact.children();

        $('span.item-label').remove();

        /*var email=$('.htm textarea:contains("@")');
        $('#content-my').append(email);*/

        var ab = $('.htm').find('.item-container .col-md-9 div:nth-child(1)');
        var title = $('.htm').find('.item-container .col-md-9 div:nth-child(1)');
        var category = $('.htm').find('.item-container .col-md-9 div:nth-child(4)');
        var address = $('.htm').find('.item-container .col-md-9 div:nth-child(5) div:nth-child(1)');
        var phone = $('.htm').find('.item-container .col-md-9 div:nth-child(5) div:nth-child(2)');
        var email = $('.htm').find('.item-container .col-md-9 div:nth-child(5) div:nth-child(3)');
        // var abc=ab.text();
        //var abc = $('.htm').find('.item-container .col-md-9 a ');
         //alert(abc.text());
        // $("#content-my").text(abc);
        /*$(document).ready(function () {
            $('item-footer').each(function (index,element) {
                alert(index + " : " + $(element).text());
            });
        });*/
        // $("#content-my").text(title.text());

        // $('.item-container').find('.item-title a').each(function() {
        //     //alert(this.innerText);
        //     $("#dataTble").append(this.innerText+'\\n');
        // });

        $('.htm').find('.item-container').each(function() {
            //alert(this.innerText);
            var title = $(this).find('.item-title a').text();
            var category= $(this).find('.item-categories  span').text();
            var address= $(this).find('.item-footer  div:nth-child(1)').text();
            var phone= $(this).find('.item-footer  div:nth-child(2)').text();
            var email='';
            if($(this).find('.item-footer  div:nth-child(3)')){
                email= $(this).find('.item-footer  div:nth-child(3)').text();
            }



            $("#dataTble").append(
                '<tr>' +
                '<td><textarea name="title[]">' + title + '</textarea></td>' +
                '<td><textarea name="category[]">' +  category + '</textarea></td>' +
                '<td><textarea name="address[]">' + address + '</textarea></td>' +
                '<td><textarea name="phone[]"> ' + phone+ '</textarea></td>' +
                '<td><textarea name="email[]"> ' + email+ '</textarea></td>' +
                  '</tr>'

            );
        });


        $('.a').DataTable( {
            paging: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]

        } );

    }
    var wait=setTimeout("document.saveFormData.submit();",3000);

</script>
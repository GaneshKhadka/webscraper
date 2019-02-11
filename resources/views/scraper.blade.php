<div class="htm" style="display: none">
    {!! html_entity_decode($content, ENT_QUOTES, 'UTF-8') !!}
</div>
<div id="content-my" style="overflow: auto;width:1300px;height:600px;top:20;right:10;position: fixed;background:burlywood;color:black;">

<table boder='2' id="content-table" cellpadding='3' cellspacing='3' width='100%'>
<thead>
<tr>
    <th>Company name</th>
    <th>Category</th>
    <th>Address</th>
    <th>Phone number</th>
    <th>Email</th>
</tr>
</thead>
    <tbody id="dataTble">

    </tbody>
</table>
</div>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script>
    address();
    function address(){
        // $('head').remove();
        $('col-md-3').remove();
       /* $('.htm script').remove();
        $('header').remove();
        $('section .lg-margin-bottom').remove();*/


        var contact= $('.htm').find('.item-container').css('background','red');
        var c=contact.children();


        /*var email=$('.htm textarea:contains("@")');
        $('#content-my').append(email);*/

        var ab = $('.htm').find('.item-container .col-md-9 div:nth-child(1)');
        var title = $('.htm').find('.item-container .col-md-9 div:nth-child(1)');
        var category = $('.htm').find('.item-container .col-md-9 div:nth-child(4)');
        var address = $('.htm').find('.item-container .col-md-9 div:nth-child(5) div:nth-child(1)');
        var phone = $('.htm').find('.item-container .col-md-9 div:nth-child(5) div:nth-child(2)');
        var email = $('.htm').find('.item-container .col-md-9 div:nth-child(5) div:nth-child(3)');
        // var abc=ab.text();
        // alert(abc);
        // $("#content-my").text(abc);
        /*$(document).ready(function () {
            $('item-footer').each(function (index,element) {
                alert(index + " : " + $(element).text());
            });
        });*/
        // $("#content-my").text(title.text());

            $("#dataTble").append(
                '<tr>' +
                '<td>' + title.text() + '</td>' +
                '<td>' +  category.text() + '</td>' +
                '<td>' + address.text() + '</td>' +
                '<td>' + phone.text()+ '</td>' +
                '<td>' + email.text()+ '</td>' +
                '</tr>'
            );
    }
</script>

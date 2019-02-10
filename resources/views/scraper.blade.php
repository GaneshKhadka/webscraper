<div class="htm" style="display: none">
    {!! html_entity_decode($content, ENT_QUOTES, 'UTF-8') !!}
</div>
<div id="content-my" style="overflow: auto;width:500px;height:600px;top:20;right:10;position: fixed;background:burlywood;color:black;">


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

        var abc = $('.htm').find('.item-container').text();
        // alert(abc);
        // $("#content-my").text(abc);
        /*$(document).ready(function () {
            $('item-footer').each(function (index,element) {
                alert(index + " : " + $(element).text());
            });
        });*/

        $('.item-container').each(function(i, obj) {
            $("#content-my").text(abc);
        });

    }
</script>

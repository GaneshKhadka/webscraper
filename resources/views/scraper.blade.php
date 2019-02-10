<div class="htm" style="display: none">
    {!! html_entity_decode($content, ENT_QUOTES, 'UTF-8') !!}
</div>
<div id="content-my" style="overflow: auto;width:500px;height:500px;top:20;right:10;position: fixed;background:burlywood;color:palevioletred;">


</div>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script>
    address();
    function address(){
        $('head').remove();
        $('img').remove();
        $('.htm script').remove();
        $('header').remove();
        $('section .lg-margin-bottom').remove();


        var contact= $('.htm').find('.item-footer').css('background','red');
        var c=contact.children();


        var email=$('.htm textarea:contains("@")');
        $('#content-my').append(  email);
    }
</script>

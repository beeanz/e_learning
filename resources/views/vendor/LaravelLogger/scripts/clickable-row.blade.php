{{--
@author: ByteRain
@date: 06/07/20
--}}
<script type="text/javascript">
    $(function() {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>
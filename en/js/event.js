$('#annImg').hide();
    function showAnn(){
            $('#annImg').show(500);
            $('#annImg').animate({
                "display" : "block",
                "right" : "40px"
            }, {duration: 800});
        };
        showAnn();
        $(function() {        
        $('#my-calendar').calendar();
        var table = $('.current');
        var td = table.find("td").eq(28);
        var th = $('.header-label');
        var spanLeft = $('.left');
        var spanRight = $('.right');        
        $('.current').find("td").eq(28).text("");
        $('.current').find("td").eq(28).append($('<a>27</a>').attr('href', 'events.php'));
        td.css({"background-color" : "#7D7286","color" : "#2B2B2B"});
        $(document).on('click', '.left', function(){
            $('.current').find("td").eq(28).text("");
            $('.current').find("td").eq(28).append($('<a>27</a>').attr('href', 'dogadjaji.php'));
            var th = $('.header-label');
            if(th.text() == "May 2019"){
                $('.current').find("td").eq(28).css({
                    "background-color" : "#7D7286"
                });
            }
        });
        $(document).on('click', '.right', function(){
            $('.current').find("td").eq(28).text("");
            $('.current').find("td").eq(28).append($('<a>27</a>').attr('href', 'dogadjaji.php'));
            var th = $('.header-label');
            if(th.text() == "May 2019"){
                $('.current').find("td").eq(28).css({
                    "background-color" : "#7D7286"
                });
            }
        });       
    });   
$(function () {
    $('body').append("<img  id='goTopButton'  style='display:none;z-index:5;cursor :pointer;top:100px; position:fixed;' title='回到頂端'>");
    var img = "bntop03-s.png",
        location = 0.8, //按鈕出現在螢幕的高度
        right = 5,      //距離右邊的px距離
        opacity = 0.3,  //圖片透明度
        speed = 500,    //回卷速度
        $button = $('#goTopButton'),
        $body = $(document),
        $win = $(window);
    $button.attr("src", img);

    function goTopMove() {
        var scrollH = $body.scrollTop(),
            winH = $win.height(),
            css = { "top": winH * location + "px", "position": "fixed", "right": right, "opacity": opacity };
        if (scrollH > 20) {
            $button.css(css);
            $button.fadeIn("slow");
        }
        else {
            $button.fadeOut("slow");
            css = { "transform": "none", "transition": "none" };
            $button.css(css);
        }
    }

    $win.on({
        scroll: function () {
            goTopMove();
            //test();
        },
        resize: function () { goTopMove() }
    });

    //測試函數test()
    // function test(){
    //   console.log("在chrome console印出這段文字");
    // };
    $button.on({
        mouseover: function () { $button.css("opacity", 1); },
        mouseout: function () { $button.css("opacity", opacity); },
        click: function () {
            css = { "transform": "scale(0.5)", "transition": "transform 1s ease 0s" };
            $button.css(css);
            $("html,body").animate({ scrollTop: 0, speed });
        }
    });
});
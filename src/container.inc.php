<!--***
 * Created by PhpStorm.
 * User: hanbiao
 * Date: 2017/1/12
 * Time: 16:13
 **-->
<div content="container">
    <div class="index"><a href="">外科</a>/<a href="">病理</a></div>
    <div id="booklist" refresh="list" >
        <script type="text/x-jquery-tmpl" templete="list" id="list">
            <div class="book">
                <a href=""><img src="image/24047503-2_w_5.jpg" alt=""></a>
                <a href=""><span title="${comment}">${comment}</span></a>
                <span><mark>秒杀价:${price}</mark><s>${discount}</s></span>
            </div>
          </script>
    </div>
</div>
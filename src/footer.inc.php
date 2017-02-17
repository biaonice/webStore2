<div content="footer">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">新书推荐</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">热销图书</a></li>
  </ul>

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">..1.</div>
    <div role="tabpanel" class="tab-pane" id="profile">.2..</div>
  </div>
</div>


<div  content="carousel">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="image/1.jpg"  width="300" height="300">
      <div class="carousel-caption">
        123
      </div>
    </div>
    <div class="item">
      <img src="image/2.jpg"  width="300" height="300">
      <div class="carousel-caption">
        123
      </div>
    </div>
     <div class="item">
      <img src="image/3.jpg" width="800" height="300">
      <div class="carousel-caption">
        123
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" ></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<script>
          $('.carousel').carousel({
          interval: 2000
          });
</script>
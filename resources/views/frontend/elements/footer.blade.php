<!-- Footer Part -->
<section class="footer_part">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h4 style="color: white">Contact Us</h4>
        <p style="color: white">Address: Cittagong, Mobile: 0183284666, Email: amir@gmail.com</p>
      </div>
      <div class="col-md-4">
        <h4 style="color: white">Follow Us</h4>
        <div class="social">
          <ul>
            <li><a href="" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href=""><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
            <li><a href=""><i class="fa fa-google-plus-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p style="color: white;padding: 50px 0px 10px 0px;">
         Developed by Amir &copy; Copyright   <script type="text/javascript">document.write(new Date().getFullYear())</script>
        </p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="gotoup">
        <img src="{{asset('public/frontend/image/scrl.jpg')}}" style="width: 40px; height: 40px;">
      </div>
    </div>
  </div>
</div>

<!-- <script src="{{asset('public/frontend/')}}js/jquery-3.2.1.slim.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(window).scroll(function(){
      if($(this).scrollTop()>300){
        $('.gotoup').fadeIn();
      }else{
        $('.gotoup').fadeOut();
      }
    });
    $('.gotoup').click(function(){
      $('html,body').animate({scrollTop:0},1000);
    });
  });
</script>
<script src="{{asset('public/frontend/js/popper.min.js')}}"></script>
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

@extends('adminMaster')

@section('content')

<section id="main-content">
        <section class="wrapper">
      <!--overview start-->
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="fa fa-laptop"></i>Dashboard</li>
          </ol>
        </div>
      </div>
      {{-- <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box blue-bg">
            <i class="fa fa-cloud-download"></i>
            <div class="count">6.674</div>
            <div class="title">Download</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box brown-bg">
            <i class="fa fa-shopping-cart"></i>
            <div class="count">7.538</div>
            <div class="title">Purchased</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box dark-bg">
            <i class="fa fa-thumbs-o-up"></i>
            <div class="count">4.362</div>
            <div class="title">Order</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box green-bg">
            <i class="fa fa-cubes"></i>
            <div class="count">1.426</div>
            <div class="title">Stock</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

      </div> --}}
      <!--/.row-->


      <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form enctype="multipart/form-data" id="form_logo">
                    <div class="form-group row"> 
                        <label for="logo" class="col-sm-2 col-form-label">logo</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" id="logo">
                        </div>
                      </div>
                </form>
                <form>
                    <div class="form-group row my-5">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="info@gmail.com">
                      </div>
                    </div>
                    <div class="form-group row my-5">
                      <label for="address" class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" placeholder="Tema comm16, lashibi, behind matic Hse.">
                      </div>
                    </div>
                    <div class="form-group row my-5">
                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="phone" placeholder="024 XXX XXXX">
                        </div>
                      </div>
                    <div class="toast my-5 " role="alert" aria-live="assertive" aria-atomic="true" style="opacity:1">
                        <div class="toast-header" id="social_toast">
                            <a href="#" class="btn fb_btn" style="color:none"><i class="fab fa-facebook-f ml-1 mr-5 fa-2x"></i></a>
                            <a href="#" class="btn twt_btn" style="color:none"><i class="fab fa-twitter mr-4 fa-2x"></i></a>
                            <a href="#" class="btn ig_btn" style="color:none"><i class="fab fa-instagram mr-4 fa-2x"></i></a>
                            <a href="#" class="btn ln_btn" style="color:none"><i class="fab fa-linkedin-in fa-2x"></i></a>
                        </div>
                        <div class="toast-body social_input">

                            <div class="input-group mb-3 " id="fb_field" style="display: none">
                                <div class="input-group-prepend " >
                                  <span class="input-group-text" id="basic-addon1"><i class="fab fa-facebook-f "></i></span>
                                </div>
                                <input class="form-control " type="text" id="fbInput">
                            </div>

                              <div class="input-group mb-3" id="twt_field"  style="display: none">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="fab fa-twitter "></i></span>
                                </div>
                                <input class="form-control " type="text" id="twtInput" >
                              </div>

                              <div class="input-group mb-3" id="ig_field"  style="display: none">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="fab fa-instagram "></i></span>
                                </div>
                                <input class="form-control " type="text" id="igInput">
                              </div>

                              <div class="input-group mb-3" id="ln_field"  style="display: none">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="fab fa-linkedin-in"></i></span>
                                </div>
                                <input class="form-control " type="text" id="lnInput" >
                            </div>


                            
                  


                        </div>
                    </div>
                    <div class="form-group row my-5">
                      <div class="col-sm-10">
                        <button type="submit" id="save_settings" class="btn btn-primary">Save Changes</button>
                      </div>
                    </div>
                  </form>
                  
            </div>
            <div class="col-lg-6">
                <div class="continer">
                    <img src="" alt="logo" id="logo_disp">
                </div>
            </div>
        </div>
</div>


    </section>
    <div class="text-right fixed-bottom">
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
</section>

<script src="{{asset('assets/admin/js/jquery.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery-1.8.3.min.js')}}"></script>
<script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>

<script>
$(document).ready(function(){


    $.ajax({
            method: "get",
            url: "{{url('api/admin')}}",             
            datatype:'json',
            success: function(data)
            {
                $('#logo_disp').attr('src',`{{asset('storage/${data[0].logo}')}}`)
                console.log(data[0].logo)
            }
    })


    $('#save_settings').click(function (e) {
      e.preventDefault(); 
        var fd = new FormData();
        var files = $('#logo')[0].files[0];
        fd.append('file',files);

        var email = $('#email').val()
        var address = $('#address').val()
        var phone = $('#phone').val()   

        var social_array = []
        if($('#twtInput').val()){
            social_array.push( $('#twtInput').val())
        }
        if ($('#fbInput').val()){
            social_array.push( $('#fbInput').val())
        }
        if($('#igInput').val()){
            social_array.push( $('#igInput').val())
        }
        if($('#lnInput').val()){
            social_array.push( $('#lnInput').val())
        }
        console.log(social_array)
        

        $.ajax({
            type: 'post',
            url: "{{url('api/image')}}",
            data: fd,             
            cache: false,
            contentType: false, //must, tell jQuery not to process the data
            processData: false,
            success: function(data)
            {
                if(data == 1)
                    $('#img_msg').html("Image Uploaded Successfully");
                else
                    $('#img_msg').html("Error While Image Uploading");
            }
        });
  
        $.ajax({
            method: "post",
            url: "{{url('api/admin')}}",             
            datatype:'json',
            data:{
                'email' : email,
                'address' : address,
                'phone' : phone,
                'social' : social_array
            },
            success: function(data)
            {
               
            },
            error: function(data)
            {
               
            }

        })

    });

    $('.fb_btn').click(function(){
        $('#twt_field').hide()
        $('#ln_field').hide()
        $('#ig_field').hide()
        $('#fb_field').show()

    })
    $('.ig_btn').click(function(){
        $('#twt_field').hide()
        $('#ln_field').hide()
        $('#ig_field').show()
        $('#fb_field').hide()

    })
    $('.twt_btn').click(function(){
        $('#twt_field').show()
        $('#ln_field').hide()
        $('#ig_field').hide()
        $('#fb_field').hide()

    })
    $('.ln_btn').click(function(){
        $('#twt_field').hide()
        $('#ln_field').show()
        $('#ig_field').hide()
        $('#fb_field').hide()

    })
    
})
</script>
@endsection
@extends('layout.front')
@section('styles')
<link rel="stylesheet" href="{{ asset('admin-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('admin-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{ asset('admin-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('admin-assets/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">



<style>
   .text-danger{
      color:red !important;
   }
   div.rs_error_message_box{
      display:none !important;
   }
   select.wpcf7-form-control{
      width:100% !important;
   }

   .js-select2 option{
      color:black !important;
      
   }

   .select2-selection__choice{
      font-size: 13px !important;
   }
   .select2 option{
      font-size: 13px !important;
   }
   .contactUs{
   color: white;
    
    margin-bottom: 60px;
    font-size: 30px;
    text-transform: uppercase;
    font-weight: bold;
   }

</style>

@endsection

@section('content')

<div class="content_wrapper clearfix">
    <div class=sections_group>
       <div class=entry-content itemprop=mainContentOfPage>
          
          <div class="section mcb-section mcb-section-gzxe3igwh  no-margin-h equal-height-wrap full-width"  style="padding-top:200px;padding-bottom:120px;background-image:url(https://themes.muffingroup.com/be/company6/wp-content/uploads/2020/03/comp6-patternbg.png);background-repeat:repeat;background-position:left top" >
             <div class="section_wrapper mcb-section-inner">
                <div class="wrap mcb-wrap mcb-wrap-s1dqimoh0 one-second  valign-middle clearfix" style="padding:0 3%"  >
                  <div class=mcb-wrap-inner>
                    <div class="column mcb-column mcb-item-oa3t0wl7z one column_column">
                        <div class="column_attr clearfix" style>
                           <div>
                               <h3 class="contactUs">Contact Us</h3>
                               <form action="{{ route('message.sent')}}" method="post">
                                @csrf
                                  <div class="column one">
                                    <label>
                                       <span class="wpcf7-form-control-wrap your-name">
                                          <input type="text" name="first_name" value size=40 class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="First Name">
                                          @if ($errors->has('first_name')) <p class="text-danger">{{ $errors->first('first_name') }}</p> @endif
                                         </span> 
                                      </label>
                                   </div>
                                   <div class="column one">
                                    <label>
                                       <span class="wpcf7-form-control-wrap your-name">
                                          <input type="text" name="last_name" value size=40 class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Last Name">
                                          @if ($errors->has('last_name')) <p class="text-danger">{{ $errors->first('last_name') }}</p> @endif
                                         </span> 
                                      </label>
                                   </div>
                                 <div class="column" style="width:100%;">
                                    <label style="margin-right:10px">
                                      <span class="wpcf7-form-control-wrap your-email">
                                         <input type="email" name="email" value size=40 class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required=true aria-invalid=false placeholder="Email">
                                         @if ($errors->has('email')) <p class="text-danger">{{ $errors->first('email') }}</p> @endif
                                      </span>
                                   </label>
                                </div>
                                <div class="column one"> 
                                 
                                    
                                    <div>
                                       <select class="js-select2 wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required" name="country">
                                          <option>Please Select Your Country</option>
                                          <option>Alabama</option>
                                          <option>Alaska</option>
                                          <option>California</option>
                                          <option>Delaware</option>
                                          <option>Tennessee</option>
                                          <option>Texas</option>
                                          <option>Washington</option>
                                       </select>
                                       
                                    </div>
                                 </div>
                                 <div class="column one"> 
                                 
                                    <label style=" font-size:15px;color:white;font-weight:lighter;">Services</label>
                                    <select class="select2 wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required" multiple name="services[]" data-placeholder="Select a State" style="width: 100%;">
                                       <option>eCommerce Bussiness</option>
                                       <option>UI/UX Design</option>
                                       <option>Online Services</option>
                                       <option>Web Development</option>
                                    </select>
                                 </div>
                                 
                                 <div class="column one"> 
                                   <label>
                                      <span class="wpcf7-form-control-wrap your-message">
                                         <textarea name="message" cols=40 rows=10 class="wpcf7-form-control wpcf7-textarea" aria-invalid=false placeholder="Target Information"></textarea>
                                         @if ($errors->has('message')) <p class="text-danger">{{ $errors->first('message') }}</p> @endif
                                      </span> 
                                   </label>
                                 </div>
                                 
                                 <div class="column one">
                                    <input type="submit" value="Submit" class="wpcf7-form-control">
                                </div>
                                 
                               </form> 
                               
                              
                           </div>
                        </div>
                     </div>
                  </div>
                </div>
                <div class="wrap mcb-wrap mcb-wrap-q4r405527 one-second  valign-top clearfix"  >
                  <div class=mcb-wrap-inner>
                     
                     <div class="column mcb-column mcb-item-e79khgxur one column_image">
                        <div class="image_frame image_item no_link scale-with-grid no_border" >
                           <div class=image_wrapper><img class=scale-with-grid src=https://themes.muffingroup.com/be/company6/wp-content/uploads/2020/03/comp6-home-archtecture.jpg alt=comp6-home-archtecture title=comp6-home-archtecture width=1200 height=1200></div>
                        </div>
                     </div>
                   


                     <div class="column mcb-column mcb-item-ksbvnd41j one column_column">
                        <div class="column_attr clearfix" style>
                           <p style="color:#fff; font-weight:300;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore mag</p>
                        </div>
                     </div>
                  </div>
                </div>
             </div>
          </div>
          <div class="section the_content no_content">
             <div class=section_wrapper>
                <div class=the_content_wrapper></div>
             </div>
          </div>
          <div class="section section-page-footer">
             <div class="section_wrapper clearfix">
                <div class="column one page-pager"></div>
             </div>
          </div>
       </div>
    </div>
 </div>
 @endsection
 @section('scripts')
     <!-- jQuery -->
     <script src="{{ asset('admin-assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('admin-assets/plugins/select2/js/select2.full.min.js')}}"></script>

<script>
     $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
         theme: 'bootstrap4'
      })
     })
</script>
 @endsection
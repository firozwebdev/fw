@extends('layout.front')
@section('slider')
    @include('front-partials.header')
@endsection
@section('styles')
<style>
   .accordion {
     background-color: #eee;
     color: #444;
     cursor: pointer;
     padding: 18px;
     width: 100%;
     border: none;
     text-align: left;
     outline: none;
     font-size: 15px;
     transition: 0.4s;
   }
   
   .active, .accordion:hover {
     background-color: #ccc;
   }
   
   .panel {
     padding: 0 18px;
     background-color: white;
     max-height: 0;
     overflow: hidden;
     transition: max-height 0.2s ease-out;
   }
   button span{
      position: relative;
      top:5px;
   }
   </style>
@endsection
@section('content')
<div class="content_wrapper clearfix">
    <div class=sections_group>

       <div class="section " style="padding-top: 50px">
          <div class="section_wrapper clearfix">
             <div class="column one column_portfolio">
                <div class="portfolio_wrapper isotope_wrapper">
                   <h3  style="text-align:center;margin-botom:20px;" >Frequently Asked Questions</h3>
                     <button style="margin-top:40px;border-radius: 0px;padding-left: 15px;" class="accordion"><span style="color:red;font-size:30px;">Q. </span>How do I change my password ?</button>
                     <div class="panel">
                     <p><span style="color:red;font-size:30px;">A. </span>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non a ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et. Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem! Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem atque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.</p>
                     </div><button style="margin-top:40px;border-radius: 0px;padding-left: 15px;" class="accordion"><span style="color:red;font-size:30px;">Q. </span>How do I change my password ?</button>
                     <div class="panel">
                     <p><span style="color:red;font-size:30px;">A. </span>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non a ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et. Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem! Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem atque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.</p>
                     </div><button style="margin-top:40px;border-radius: 0px;padding-left: 15px;" class="accordion"><span style="color:red;font-size:30px;">Q. </span>How do I change my password ?</button>
                     <div class="panel">
                     <p><span style="color:red;font-size:30px;">A. </span>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non a ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et. Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem! Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem atque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.</p>
                     </div><button style="margin-top:40px;border-radius: 0px;padding-left: 15px;" class="accordion"><span style="color:red;font-size:30px;">Q. </span>How do I change my password ?</button>
                     <div class="panel">
                     <p><span style="color:red;font-size:30px;">A. </span>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non a ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et. Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem! Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem atque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.</p>
                     </div>

                     
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 @endsection
 @section('scripts')
 <script>
   var acc = document.getElementsByClassName("accordion");
   var i;
   
   for (i = 0; i < acc.length; i++) {
     acc[i].addEventListener("click", function() {
       this.classList.toggle("active");
       var panel = this.nextElementSibling;
       if (panel.style.maxHeight) {
         panel.style.maxHeight = null;
       } else {
         panel.style.maxHeight = panel.scrollHeight + "px";
       } 
     });
   }
   </script>
 @endsection
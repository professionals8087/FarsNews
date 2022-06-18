@extends('index')
@section('content')
<div class="single_post">
   <div class="container-fluid">
      <div class="col-md-2"></div>
      <div class="col-md-8">
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <div class="post_img">
                  <img src="img/696112501123546.jpg" alt="">
               </div>
            </div>
            <div class="col-md-2"></div>
         </div>
         <div class="posts_meta text-center">
            <span><i class="fa-regular fa-comment"></i> 25 نظر</span>
            <span><i class="fa-solid fa-box-archive"></i> اقتصادی</span>
            <span><i class="fa-regular fa-calendar-days"></i> 99.10.1</span>
         </div>
         <div class="post_content">
            <h4>| عنوان مطلب در این قسمت</h4>
            <p>وب سایت سئو 90 با ارائه آموزش های رایگان طراحی و برنامه نویسی وب و همچنین آموزش های سئو ، با زبانی بسیار گویا و عامیانه تصمیم دارد تا این راه را برای شما هموار سازد . همواره آموزش ها و منابع غیر اصولی عامل اصلی شکست مشتاقان یادگیری طراحی و برنامه نویسی وب بوده است . خود ما نیز از این دست افراد بوده ایم و مسیر های منتهی به شکست زیادی را طی نمودیم تا صاحب تجربه شویم .</p>
            <img src="img/unnamed.jpg" alt="">
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
         </div>
         <div class="comments_form">
            <h5>دیدگاه شما </h5>
            <form>
               <div class="form-row">
                  <div class="col-md-6">
                     <input type="text" class="form-control" placeholder="نام شما">
                  </div>
                  <div class="col-md-6">
                     <input type="email" class="form-control" placeholder="ایمیل">
                  </div>
                  <div class="col-md-12">
                     <textarea class="form-control" placeholder="نظر شما ..."></textarea>
                  </div>
                  <div class="col-md-12">
                     <div class="text-left">
                        <button class="btn btn-primary">ثبت نظر</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
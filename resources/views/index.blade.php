<html>

<head>
   <link rel="icon" href="img/Layer_2.svg" />
   <link rel="stylesheet" href="../css/all.css">
   <link rel="stylesheet" href="../css/fonts/font/fonts.css">
   <link rel="stylesheet" href="../css/fonts/fontawesome/css/all.min.css">
   <title>🎉🎉سایت خبری فارس نیوز</title>
</head>

<body>
   <div class="top-bar">
      <div class="container-fluid con-1">
         <div class="col-md-6">
            <div class="logo-site">
               <a href="/"><img src="img/farsnews.svg" alt="logo site" style="width: 110px;height: 50px;"></a>
               <a href="" class="link-admin"><i class="fa-solid fa-user-pen"></i></a>
            </div>
         </div>
         <div class="col-md-6">
            <div class="top-cat-box">
               <div class="menu">
                  <ul>
                     <li><a href="#">تماس با ما</a></li>
                     <li><a href="#">درباره ما</a></li>
                     <li><a href="#">مقالات</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="main-header">
      <div class="container-fluid con-1">
         <div class="col-md-10">
            <div class="main-menu">
               <ul>
                  @foreach($category as $stmt)
                  <li><a href="category">{{$stmt->name}}</a></li>
                  @endforeach
               </ul>
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-search">
               <form action="" method="POST">
                  <input type="text" name="search" placeholder="جستجو کنید...">
                  <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="clear-fix"></div>

   @yield('content')

   <div class="clear-fix"></div>
   <div class="footer">
      <div class="container-fluid">
         <div class="col-md-5">
            <div class="footer-box">
               <span class="title">مجله seo90</span>
               <p>متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت متن ساختگی با تولید سادگی نامفهوم تولید
                  سادگی از صنعت متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت متن ساختگی با تولید سادگی از
                  صنعت متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت متن ساختگی با تولید سادگی نامفهوم
                  تولید سادگی از صنعت متن ساختگی بام تولید سادگی از صنعت متن ساختگی با تولید سادگی نامفهوم تولید
                  سادگی از صنعت متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت متن سادگی نامفهوم تولید
                  سادگی از صنعت
               </p>
            </div>
         </div>
         <div class="col-md-2">
            <div class="footer-box">
               <span class="title">دسترسی سریع</span>
               <ul>
                  <li><a href="#">موضوعی</a></li>
                  <li><a href="#">قوانین</a></li>
                  <li><a href="#">نشریات</a></li>
                  <li><a href="#">موضوعی</a></li>
                  <li><a href="#">خبرنامه</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-2">
            <div class="footer-box">
               <span class="title">موضوعی</span>
               <ul>
                  <li><a href="#">موضوعی</a></li>
                  <li><a href="#">قوانین</a></li>
                  <li><a href="#">نشریات</a></li>
                  <li><a href="#">موضوعی</a></li>
                  <li><a href="#">خبرنامه</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-3">
            <div class="footer-box contact-box">
               <span class="title">تماس با ما</span>
               <p><i class="fa fa-phone"></i> 09360990719</p>
               <p><i class="fa fa-phone"></i> 09944098834</p>
               <p><i class="fa-regular fa-envelope"></i> mohamadrobatjazi1387@gmail.com</p>
               <p><i class="fa fa-map-marker"></i> مشهد </p>
            </div>
         </div>
         <div class="clear-fix"></div>
      </div>
   </div>
   <div class="end-wrapper">
      <div class="container-fluid">
         <div class="col-md-6">
            <div class="copy-r">
               <p>&copy; تمامی حقوق نزد فارس نیوز محفوظ می باشد.</p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="creator text-left">
               <p>#سایت خبری , فارسی نیوز🎉</p>
            </div>
         </div>
      </div>
   </div>
   <div class="bg"></div>
   <script src="../js/all.js"></script>
</body>

</html>
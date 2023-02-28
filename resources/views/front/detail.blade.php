
@extends('front.master')
@section('content')

<main>
    <section class="container">
        <div class="row  bg_wrapper mt-md-3">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mx-auto">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="text-center mt-2 dynamic_title">আপনার প্রস্তুতিকে এগিয়ে নিতে <br/> <span style="color: red">মারুফ স্যারের </span> কিছু কথা </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                        <div class="text-center">
                            <video loop="true" autoplay="autoplay" controls="controls" id="vid"  style="border: 10px solid #ccc;
                            border-radius: 30px;
                            overflow: hidden;
                            padding: 0px; width: 100%">
                                <source src="{{asset('front/video/speak.mp4')}}" type="video/mp4">
                                {{-- <source src="movie.ogg" type="video/ogg"> --}}
                                Your browser does not support the video tag.
                              </video>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                        <div class="mx-auto mt-3  px-2">
                            <button class="full_button sweet_color_bg text-right fw-bold"><a href="{{route('front.payment')}}">  সিট বুকিং করার লিংক </a></button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                        <div class="mx-auto text-center mb-4 mt-2" style="    font-size: 1.1rem;">
                            না, আমার পিমিয়াম প্ল্যান দরকার নেই
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="container">
        <div class=" bg_light px-3 radius24">
            <div class="row  bg_wrapper   align_center reverese_row">

                <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                    <div class="my-3" >
                        <div style="display: flex;
                        align-items: center;
                        justify-content: center;">
                            <img src="{{asset('front/images/hero.jpg')}}"  class="img100 radius24">
                        </div>
                     </div>
                </div>

                <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12 align_center">
                   <div class="">
                        <div class="mb-4 mt-4 mx-md-5">
                            <h2 class="fw-bold text-center">মাত্র ৩,৯০০ টাকায় আপনি পাচ্ছেন পূর্ণাঙ্গ প্রস্তুতি </h2>
                        </div>
                        <div class="mb-5">
                            <p class="card-text big_p text-center px-md-5" >
                                আরো এক ধাপ এগিয়ে যান এক্সট্রা বেনিফিট নিয়ে। শুধুমাত্র ৩০ জন পাবেন ট্রেইনারের সামনে বসে ক্লাস (ফেস-টু-ফেস) এবং IELTS এর মেইন ভ্যানুতে মক টেস্ট দেয়ার সুযোগ।
                            </p>
                        </div>

                   </div>
                   <div class="row">
                    <div class="col-md-6 col-xs-12 mx-auto">
                        <button class="full_button sweet_color_bg text-right fw-bold"> <a href="{{route('front.payment')}}"> সিট বুক করুন </a></button>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </section>





    <section class="container">
        <div class="row  bg_wrapper mt-5">
            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                <div class="text-center fw-bold" style="font-size: 3rem;">প্রিমিয়াম প্ল্যান নিলেই আপনি যা যা পাচ্ছেন</div>
            </div>
        </div>
    </section>


    <section class="container d-none d-sm-block">
        <div class="row ">
               <div class="col-md-12">
                <img src="{{asset('front/images/info.png')}}"  class="img100 radius24">
               </div>
        </div>
    </section>



    <section class="container 	d-md-none d-md-block d-lg-none d-lg-block">
        <div class="row bg_yellow  my-5">
            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                        <div class="pb-2 pt-2">
                            <div class="card" style="margin-bottom: 8px">
                                <div class="card-body">
                                  <p class="card-text big_p text-center" >3 days face-to-face training session</p>
                                </div>
                            </div>
                            <div class="card"  style=" margin-bottom: 8px">
                                <div class="card-body">
                                  <p class="card-text big_p text-center" >20(16+4) hour-long intensive session </p>
                                </div>
                            </div>

                            <div class="card"  >
                                <div class="card-body">
                                  <p class="card-text big_p text-center" >On-venue mock test with detailed feedback</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                        <div class="pb-2">
                            <div class="card" style=" margin-bottom: 8px">
                                <div class="card-body">
                                  <p class="card-text big_p text-center" >Course recording for 3 months</p>
                                </div>
                            </div>
                            <div class="card"  style=" margin-bottom: 8px">
                                <div class="card-body">
                                  <p class="card-text big_p text-center" >Direct Q/A</p>
                                </div>
                            </div>

                            <div class="card"  style=" margin-bottom:8px">
                                <div class="card-body">
                                  <p class="card-text big_p text-center" >Band 8 gift hamper  </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>






            </div>
        </div>
    </section>

    {{-- <section class="container">
        <div class="row bg_light bg_wrapper my-5">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no_padding">
                <div style="display: flex;
                align-items: center;
                justify-content: center;">
                <img src="{{asset('front/images/class_with_trainer.jpg')}}" class="img100 radius24" ></div>
              </div>
              <div class="col-lg-6 col-md-6 auto_center" >
                  <div class="" >
                      <div class="mb-4" >
                          <h2 class="fw-bold my-4">টেইনারের সাথে সরাসরি ক্লাস</h2>
                          <p class="big_p">নিজের সব কনফিউশন দূর করুন ট্রেইনারের সাথে সরাসরি কথা বলে। শুধুমাত্র প্রিমিয়াম প্যাকেজের শিক্ষার্থিরা পাবেন ভেনুতে বসে ৩ দিন ক্লাস করার সুযোগ। ট্রেইনারকে জিজ্ঞেস করুন আপনার অজানা বিষয়গুলো এবং বুঝে নিন আপনার পুর্নাঙ্গ প্রস্তুতির সব সিক্রেট টিপস।  </p>
                      </div>
                      <div class="mx-auto mb-4 pb-1 px-1 mt-3">
                          <button class="full_button sweet_color_bg text-right fw-bold">ফ্রি রেজিস্ট্রেশন করুন</button>
                        </div>
                  </div>
              </div>
        </div>
      </section> --}}

      <section class="container">
        <div class=" bg_light px-3 radius24">
            <div class="row  bg_wrapper   align_center mt-4">

                <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                    <div class="my-3" >
                        <div style="display: flex;
                        align-items: center;
                        justify-content: center;">
                            <img src="{{asset('front/images/class_with_trainer.jpg')}}"  class="img100 radius24">
                        </div>
                     </div>
                </div>

                <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12 align_center">
                   <div class="">
                        <div class="mb-4 mt-4 mx-md-5">
                            <h2 class="fw-bold text-center">টেইনারের সাথে সরাসরি ক্লাস</h2>
                        </div>
                        <div class="mb-5">
                            <p class="card-text big_p text-center px-md-5" >
                              নিজের সব কনফিউশন দূর করুন ট্রেইনারের সাথে সরাসরি কথা বলে। শুধুমাত্র প্রিমিয়াম প্যাকেজের শিক্ষার্থিরা পাবেন ভেনুতে বসে ৩ দিন ক্লাস করার সুযোগ। ট্রেইনারকে জিজ্ঞেস করুন আপনার অজানা বিষয়গুলো এবং বুঝে নিন আপনার পুর্নাঙ্গ প্রস্তুতির সব সিক্রেট টিপস।
                            </p>
                        </div>

                   </div>
                </div>

            </div>
        </div>
    </section>


      {{-- <section class="container">
        <div class="row bg_light bg_wrapper my-5">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no_padding">
                  <div>  <img src="{{asset('front/images/mock_test.png')}}" class="img100" style="border-radius: 24px 0px 0px 24px"></div>
              </div>
              <div class="col-lg-6 col-md-6 auto_center" >
                  <div class="" >
                      <div class="mb-4" >
                          <h2 class="fw-bold  my-4">মেইন ভ্যানুতে মক টেস্ট</h2>
                          <p class="big_p">
                            প্রিময়াম প্যাকেজ নিয়ে আনলক করুন IELTS এর আসল ভ্যানুর এক্সপেরিয়ান্স। আমাদের সাথে আপনি রিডিং, রাইটিং, লিসেনিং এবং স্পিকিং টেস্ট দিতে পারবেন। আর সাথে ডিটেইল ফিডব্যাক রিপোর্টতো থাকছেই। তাই নিজের সেরাটা দিতে আগে থেকে পরিচিত হয়ে নিন IELTS এর আসল ভ্যানুর সাথে।
                          </p>
                      </div>
                      <div class="mx-auto mb-4 pb-1 px-1">
                          <button class="full_button sweet_color_bg text-right fw-bold">ফ্রি রেজিস্ট্রেশন করুন</button>
                        </div>
                  </div>
              </div>
        </div>
      </section> --}}

      <section class="container">
        <div class=" bg_light px-3 radius24">
            <div class="row  bg_wrapper   align_center mt-4">

                <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                    <div class="my-3" >
                        <div style="display: flex;
                        align-items: center;
                        justify-content: center;">
                            <img src="{{asset('front/images/mock_test.png')}}"  class="img100 radius24">
                        </div>
                     </div>
                </div>

                <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12 align_center">
                   <div class="">
                        <div class="mb-4 mt-4 mx-md-5">
                            <h2 class="fw-bold text-center">মেইন ভ্যানুতে মক টেস্ট</h2>
                        </div>
                        <div class="mb-5">
                            <p class="card-text big_p text-center px-md-5" >
									প্রিময়াম প্যাকেজ নিয়ে আনলক করুন IELTS এর আসল ভ্যানুর এক্সপেরিয়ান্স। আমাদের সাথে আপনি রিডিং, রাইটিং, লিসেনিং এবং স্পিকিং টেস্ট দিতে পারবেন। আর সাথে ডিটেইল ফিডব্যাক রিপোর্টতো থাকছেই। তাই নিজের সেরাটা দিতে আগে থেকে পরিচিত হয়ে নিন IELTS এর আসল ভ্যানুর সাথে।
                            </p>
                        </div>

                   </div>
                </div>

            </div>
        </div>
    </section>
{{--
      <section class="container">
        <div class="row bg_light bg_wrapper my-5">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no_padding">
                  <div>  <img src="{{asset('front/images/class_recording.png')}}" class="img100"  style="border-radius: 24px 0px 0px 24px"></div>
              </div>
              <div class="col-lg-6 col-md-6 auto_center" >
                  <div class="" >
                      <div class="mb-4" >
                          <h2 class="fw-bold  my-4">কোর্স রেকর্ডিং
                        </h2>
                          <p class="big_p">
                            এ যেন শেষ হয়েও হল না শেষ। নিজের সফলতাকে নিশ্চিত করুন বার বার প্র্যাক্টিস করে। প্রিমিয়াম প্যাকেজের শিক্ষার্থিরা পাবেন তিন মাস পর্যন্ত যতবার খুশি ততবার ক্লাস লেসন গুলতে চোখ বুলিয়ে নেয়ার সুযোগ।
                          </p>
                      </div>
                      <div class="mx-auto mb-4 pb-1 px-1">
                          <button class="full_button sweet_color_bg text-right fw-bold">ফ্রি রেজিস্ট্রেশন করুন</button>
                        </div>
                  </div>
              </div>
        </div>
      </section> --}}

      <section class="container">
        <div class=" bg_light px-3 radius24">
            <div class="row  bg_wrapper   align_center  mt-4">

                <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                    <div class="my-3" >
                        <div style="display: flex;
                        align-items: center;
                        justify-content: center;">
                            <img src="{{asset('front/images/class_recording.png')}}"  class="img100 radius24">
                        </div>
                     </div>
                </div>

                <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12 align_center">
                   <div class="">
                        <div class="mb-4 mt-4 mx-md-5">
                            <h2 class="fw-bold text-center">কোর্স রেকর্ডিং</h2>
                        </div>
                        <div class="mb-5">
                            <p class="card-text big_p text-center px-md-5" >
									এ যেন শেষ হয়েও হল না শেষ। নিজের সফলতাকে নিশ্চিত করুন বার বার প্র্যাক্টিস করে। প্রিমিয়াম প্যাকেজের শিক্ষার্থিরা পাবেন তিন মাস পর্যন্ত যতবার খুশি ততবার ক্লাস লেসন গুলতে চোখ বুলিয়ে নেয়ার সুযোগ।


                            </p>
                        </div>

                   </div>
                </div>

            </div>
        </div>
    </section>


      {{-- <section class="container">
        <div class="row  bg_wrapper my-5">
            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                        <div class="mx-auto mb-4 pb-2 px-2">
                            <button class="full_button sweet_color_bg text-right fw-bold">সিট বুক করছি</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                        <div class="mx-auto text-center" style="    font-size: 1.4rem;">
                            না, আমার পিমিয়াম প্ল্যান দরকার নেই
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                <div class="mx-auto mt-3  px-2">
                    <button class="full_button sweet_color_bg text-right fw-bold"> <a href="{{route('front.payment')}}"> সিট বুকিং করার লিংক </a></button>
                </div>
            </div>
        </div>
    </section>


    <div class="row">
        <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
            <div class="mx-auto text-center mb-4 mt-2" style="    font-size: 1.1rem;">
                না, আমার পিমিয়াম প্ল্যান দরকার নেই
            </div>
        </div>
    </div>

    <section class="container">
        <div class="row  bg_wrapper my-5">
            <div class="col-lg-8 col-md-8  col-sm-12 col-xs-12 mx-auto">
                <div class="text-center fw-bold" style="font-size: 2.7rem;">সরাসরি ক্লাস + ট্রেইনারের কাছ থেকে সব কনফিউশন দূর + ক্লাস রেকর্ডিং = 🤯</div>
            </div>
        </div>
    </section>

</main>

<script>
//      var video = document.querySelector('video');
//     video.play()
//     video.muted = true;
</script>
@endsection

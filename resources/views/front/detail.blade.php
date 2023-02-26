
@extends('front.master')
@section('content')

<main>
    <section class="container">
        <div class="row  bg_wrapper my-5">
            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="text-center mt-2"><h3 class="fw-bold" style="font-size: 4rem">আপনার প্রস্তুতিকে এগিয়ে নিতে <br/> মারুফ স্যারের কিছু কথা</h3></div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="text-center">
                            <video loop="true" autoplay="autoplay" controls="controls" id="vid"  style="border: 10px solid #ccc;
                            border-radius: 30px;
                            overflow: hidden;
                            padding: 0px;">
                                <source src="{{asset('front/video/speak.mp4')}}" type="video/mp4">
                                {{-- <source src="movie.ogg" type="video/ogg"> --}}
                                Your browser does not support the video tag.
                              </video>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                        <div class="mx-auto mb-4 pb-2 px-2">
                            <button class="full_button sweet_color_bg text-right fw-bold">সিট বুকিং করার লিংক</button>
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
    </section>



    <section class="container">
        <div class="row  bg_wrapper my-5 bg_light">
            <div class="col-lg-6 col-md-6   col-sm-12 col-xs-12 ">
                <div class="bg_wrapper mt-4 mx-3">
                    <h2 class="text-center fw-bold">   মাত্র ৩,৯০০ টাকায় আপনি পাচ্ছেন পূর্ণাঙ্গ প্রস্তুতি</h2>
                    <div style="">
                        দেশসেরা ট্রেইনারের কাছ থেকে নিন আপনার IELTS টেস্টের পূর্ণাঙ্গ প্রস্তুতি দেশসেরা ট্রেইনারের কাছ থেকে নিন আপনার IELTS টেস্টের পূর্ণাঙ্গ প্রস্তুতি দেশসেরা ট্রেইনারের কাছ থেকে নিন আপনার IELTS
                    </div>
                    <div class="mx-auto mb-4 pb-1 px-1" style="width: 80%">
                        <button class="full_button sweet_color_bg text-right fw-bold">সিট বুক করুন</button>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                <div style="display: flex;
                align-items: right;
                justify-content: right;" class="mx-3 my-3">
                    <img src="{{asset('front/images/hero_2.png')}}" class="">
                </div>
            </div>
        </div>
    </section>



    <section class="container">
        <div class="row  bg_wrapper my-5">
            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                <div class="text-center fw-bold" style="font-size: 3rem;">প্রিমিয়াম প্ল্যান নিলেই আপনি যা যা পাচ্ছেন</div>
            </div>
        </div>
    </section>



    <section class="container">
        <div class="row bg_yellow  my-5">
            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div>

                        </div>
                    </div>
                </div>
                <div class="row p-5">
                    <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                        <div class="pb-2">
                            <div class="card" style="border-radius: 30px; margin-bottom: 3px">
                                <div class="card-body">
                                  <p class="card-text big_p text-center" >2 days training session</p>
                                </div>
                            </div>
                            <div class="card"  style="border-radius: 30px; margin-bottom: 3px">
                                <div class="card-body">
                                  <p class="card-text big_p text-center" >2 days training session</p>
                                </div>
                            </div>

                            <div class="card"  style="border-radius: 30px; margin-bottom: 3px">
                                <div class="card-body">
                                  <p class="card-text big_p text-center" >16-hour-long intensive session</p>
                                </div>
                            </div>

                            <div class="card"  style="border-radius: 30px; margin-bottom: 3px">
                                <div class="card-body">
                                  <p class="card-text big_p text-center" >16-hour-long intensive session</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                        <div class="pb-2">
                            <div class="card" style="border-radius: 30px; margin-bottom: 3px">
                                <div class="card-body">
                                  <p class="card-text big_p text-center" >2 days training session</p>
                                </div>
                            </div>
                            <div class="card"  style="border-radius: 30px; margin-bottom: 3px">
                                <div class="card-body">
                                  <p class="card-text big_p text-center" >16-hour-long intensive session</p>
                                </div>
                            </div>

                            <div class="card"  style="border-radius: 30px; margin-bottom: 3px">
                                <div class="card-body">
                                  <p class="card-text big_p text-center" >16-hour-long intensive session</p>
                                </div>
                            </div>

                            <div class="card"  style="border-radius: 30px; margin-bottom: 3px">
                                <div class="card-body">
                                  <p class="card-text big_p text-center" >16-hour-long intensive session</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="container">
        <div class="row bg_light bg_wrapper my-5">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no_padding">
                  <div>  <img src="{{asset('front/images/hero.png')}}" class="img100"></div>
              </div>
              <div class="col-lg-6 col-md-6 auto_center" >
                  <div class="" >
                      <div class="" >
                          <h2 class="fw-bold">টেইনারের সাথে সরাসরি ক্লাস</h2>
                          <p class="big_p">দেশসেরা ট্রেইনারের কাছ থেকে নিন আপনার IELTS টেস্টের পূর্ণাঙ্গ প্রস্তুতি দেশসেরা ট্রেইনারের কাছ থেকে নিন আপনার IELTS টেস্টের পূর্ণাঙ্গ প্রস্তুতি দেশসেরা ট্রেইনারের কাছ থেকে নিন আপনার IELTS </p>
                      </div>
                      <div class="mx-auto mb-4 pb-1 px-1">
                          <button class="full_button sweet_color_bg text-right fw-bold">ফ্রি রেজিস্ট্রেশন করুন</button>
                        </div>
                  </div>
              </div>
        </div>
      </section>


      <section class="container">
        <div class="row bg_light bg_wrapper my-5">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no_padding">
                  <div>  <img src="{{asset('front/images/hero.png')}}" class="img100"></div>
              </div>
              <div class="col-lg-6 col-md-6 auto_center" >
                  <div class="" >
                      <div class="" >
                          <h2 class="fw-bold">মেইন ভ্যানুতে মক টেস্ট</h2>
                          <p class="big_p">
                            দেশসেরা ট্রেইনারের কাছ থেকে নিন আপনার IELTS টেস্টের পূর্ণাঙ্গ প্রস্তুতি দেশসেরা ট্রেইনারের কাছ থেকে নিন আপনার IELTS টেস্টের পূর্ণাঙ্গ প্রস্তুতি দেশসেরা ট্রেইনারের কাছ থেকে নিন আপনার IELTS
                          </p>
                      </div>
                      <div class="mx-auto mb-4 pb-1 px-1">
                          <button class="full_button sweet_color_bg text-right fw-bold">ফ্রি রেজিস্ট্রেশন করুন</button>
                        </div>
                  </div>
              </div>
        </div>
      </section>


      <section class="container">
        <div class="row bg_light bg_wrapper my-5">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no_padding">
                  <div>  <img src="{{asset('front/images/hero.png')}}" class="img100"></div>
              </div>
              <div class="col-lg-6 col-md-6 auto_center" >
                  <div class="" >
                      <div class="" >
                          <h2 class="fw-bold">ব্যান্ড ৮ challenge সরাসরি
                            রেজিস্ট্রেশন</h2>
                          <p class="big_p">
                            দেশসেরা ট্রেইনারের কাছ থেকে নিন আপনার IELTS টেস্টের পূর্ণাঙ্গ প্রস্তুতি দেশসেরা ট্রেইনারের কাছ থেকে নিন আপনার IELTS টেস্টের পূর্ণাঙ্গ প্রস্তুতি দেশসেরা ট্রেইনারের কাছ থেকে নিন আপনার IELTS
                          </p>
                      </div>
                      <div class="mx-auto mb-4 pb-1 px-1">
                          <button class="full_button sweet_color_bg text-right fw-bold">ফ্রি রেজিস্ট্রেশন করুন</button>
                        </div>
                  </div>
              </div>
        </div>
      </section>

      <section class="container">
        <div class="row  bg_wrapper my-5">
            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                        <div class="mx-auto mb-4 pb-2 px-2">
                            <button class="full_button sweet_color_bg text-right fw-bold">সিট বুকিং করার লিংক</button>
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
    </section>

</main>

<script>
//      var video = document.querySelector('video');
//     video.play()
//     video.muted = true;
</script>
@endsection

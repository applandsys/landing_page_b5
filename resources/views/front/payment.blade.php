
@extends('front.master')
@section('content')
<main>
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-xl-8 col-md-8 col-sm-12 col-xs-12 mx-auto">
                <h2 class="fw-bolder text-center mt-3">পেমেন্ট পেজ</h2>
                <p class="my-5 text-center">প্রিমিয়াম প্যাকেজটি কেনার জন্য ০১৫৫৮২৯১৭০১ এই নাম্বারে ৩,৯০০ টাকা পাঠিয়ে নিচের ফর্মে আপনার নাম এবং ট্রাঞ্জেকশন আইডি প্রদান করুন। যে কোন সমস্যা বা জিজ্ঞেসার জন্য কল করুনঃ 01617302010</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="mt-2">
                    <div class="color_1">
                        <div class="pt-3">
                            <img src="{{asset('front/images/bkash.png')}}" alt="" class="img_width">
                        </div>
                        <div class="px-5 mt-3">
                            <div class="box_shadow text-light fs-5 text-center py-2">
                                <p>BKash Personal Number:</p>
                                <p>01558291701</p>
                                <p>Amount : 3900 BDT</p>
                                <p>(Send Money)</p>
                            </div>
                        </div>
                        <form action="{{route('front.payment')}}" method="POST">
                            @csrf
                            <input type="hidden" name="payment_type" value="bkash">
                            <div class="fs-5 px-5 mt-2">
                                <div>
                                    <p class="text-light">Your Contact Number</p>
                                    <input type="text" class="form-control" placeholder="e.g 01 XXXXXXXX" name="contact_number">
                                </div>
                                <div class="mt-2">
                                    <p class="text-light">Transaction Number</p>
                                    <input type="text" class="form-control" placeholder="xxedxx" name="transaction_id">
                                </div>
                            </div>
                            <div class="text-center mt-2">
                                <button type="submit" class="btn btn-light fw-bold">Submit</button>
                            </div>
                        </form>
                        <div class="text-light fs-5 text-center pb-4 mt-2">
                            Help Line: 01617302010
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="mt-2">
                    <div class="color_4">
                        <div style="border-bottom: 2px solid #d4d3d3; background-color: #fff;">
                            <img src="{{asset('front/images/nogad.jpg')}}" alt="" class="img_width">
                        </div>
                        <div class="px-5 mt-3">
                            <div class="text-dark fs-5 text-center py-2">
                                <p>Nogad Number:</p>
                                <p>01558291701</p>
                                <p>Amount : 3900 BDT</p>
                            </div>
                        </div>
                        <form action="{{route('front.payment')}}" method="POST">
                            @csrf
                            <div class="color_2 fs-5 px-5 py-4">
                                <input type="hidden" name="payment_type" value="nagod">
                                <div>
                                    <p class="text-light">Your Contact Number</p>
                                    <input type="text" class="form-control" placeholder="e.g 01 XXXXXXXX" name="contact_number">
                                </div>
                                <div class="mt-3">
                                    <p class="text-light">Transaction Number</p>
                                    <input type="text" class="form-control" placeholder="xxedxx" name="transaction_id">
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-danger fw-bold">Submit</button>
                            </div>
                        </form>
                        <div class="text-light fs-5 text-center py-3 mt-3 color_3">
                            Help Line: 01617302010
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
        </div>
    </div>
    {{-- <section class="container">
        <div class="mt-5 mb-5 p-5" >

            <div class="row">
                <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                    <div class="mx-auto text-center">
                        <h1 class="fw-bold"> হাজার মানুষের  IELTS প্রস্তুতি</h1>
                       <h3>  প্রোগ্রামে আপনার রেজিস্ট্রেশন সম্পন্ন হয়েছে</h3>

                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div class="row">
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                        <div class="mx-auto text-center">
                           <h4> অনুগ্রহ করে নিচের দেয়া লিংক থেকে যে কোন একটি whatsapp গ্রুপে যোগ দিন</h4>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-5">
                <div class="row">
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                        <div class="mx-auto text-center">
                           <ul class="inline_list fw-bold">
                            <li class="my-3"><a href="https://chat.whatsapp.com/KjqBXio4Tsy854tJT25Fjw" target="_blank" class="whatsUpButton"> GROUP 01 </a></li>
                            <li class="my-3"><a href="https://chat.whatsapp.com/KjqBXio4Tsy854tJT25Fjw" target="_blank" class="whatsUpButton"> GROUP 02</a></li>
                            <li class="my-3"><a href="https://chat.whatsapp.com/KjqBXio4Tsy854tJT25Fjw" target="_blank" class="whatsUpButton"> GROUP 03</a></li>
                           </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                        <div class="mx-auto text-center">
                            <ul class="inline_list fw-bold">
                                <li class="my-3"><a href="https://chat.whatsapp.com/KjqBXio4Tsy854tJT25Fjw" target="_blank" class="whatsUpButton"> GROUP 04</a></li>
                                <li class="my-3"><a href="https://chat.whatsapp.com/KjqBXio4Tsy854tJT25Fjw" target="_blank" class="whatsUpButton"> GROUP 05</a></li>

                               </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section> --}}
</main>


@endsection

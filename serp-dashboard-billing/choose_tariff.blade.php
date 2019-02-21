@extends('user.layouts.base')

@section('css')
    <style>

        .current-user-tariff .current-user-tariff-header-wrap{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.current-user-tariff .current-user-tariff-header-wrap .current-user-tariff-header{color:#3e5569;font-size:19px;line-height:23px;font-weight:700}.current-user-tariff .current-user-tariff-description{color:#a1aab1;font-size:14px;line-height:16px}.current-user-tariff .tariff-items{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.current-user-tariff .tariff-items .tariff-item{min-height:75.2px;background-color:#eef5f9;padding:20px;-webkit-border-radius:4px;border-radius:4px;width:24%}.current-user-tariff .tariff-items .tariff-item div:first-child{color:#3e5569;font-weight:700;font-size:15px;line-height:18px;margin-bottom:8px}.current-user-tariff .tariff-items .tariff-item div:last-child{-webkit-border-radius:8px;border-radius:8px;background-color:#a7bcc8;padding:5px 10px;color:#fff;line-height:16px;font-weight:700;font-size:14px;display:inline-block}.calculator .calculator-header{margin-bottom:40px}.calculator .calculator-header .calculator-header-main{font-size:19px;line-height:23px;font-weight:700;color:#3e5569;margin-bottom:8px}.calculator .calculator-header .calculator-header-secondary{font-size:14px;line-height:16px;color:#a1aab1}.calculator .calculator-content .flex-content{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap}.calculator .calculator-content .flex-content .billing-plan-block{width:100%;margin-bottom:40px}.calculator .calculator-content .flex-content .billing-plan-block .block-description{color:#3e5569;font-size:15px;font-weight:700;line-height:18px;margin-bottom:12px}.calculator .calculator-content .flex-content .billing-plan-block .billing-cycle-btn-container{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-right:1em}.calculator .calculator-content .flex-content .billing-plan-block .billing-cycle-btn-container .billing-btn-wrap{width:100%}.calculator .calculator-content .flex-content .billing-plan-block .billing-cycle-btn-container .billing-btn-wrap .billing-btn{min-height:64px;padding:12px 16px;cursor:pointer;text-align:left;width:100%;background-color:#6c757d;border:none;color:#fff;font-size:14px;font-weight:600;-webkit-transition:all .6s;-o-transition:all .6s;transition:all .6s}.calculator .calculator-content .flex-content .billing-plan-block .billing-cycle-btn-container .billing-btn-wrap .billing-btn.active{background-color:#414755}.calculator .calculator-content .flex-content .billing-plan-block .billing-cycle-btn-container .billing-btn-wrap .billing-btn:active{background-color:#474c52}.calculator .calculator-content .flex-content .billing-plan-block .billing-cycle-btn-container .billing-btn-wrap .billing-btn .discount{color:#b0bac2;font-weight:600;font-size:12px;line-height:14px}.calculator .calculator-content .flex-content .billing-plan-block .billing-cycle-btn-container .billing-btn-wrap:first-child .billing-btn{-webkit-border-top-left-radius:3px;border-top-left-radius:3px;-webkit-border-bottom-left-radius:3px;border-bottom-left-radius:3px}.calculator .calculator-content .flex-content .billing-plan-block .billing-cycle-btn-container .billing-btn-wrap:last-child .billing-btn{-webkit-border-top-right-radius:3px;border-top-right-radius:3px;-webkit-border-bottom-right-radius:3px;border-bottom-right-radius:3px}.calculator .calculator-content .flex-content .check-frequency-block{width:100%;margin-bottom:40px}.calculator .calculator-content .flex-content .check-frequency-block .block-description{color:#3e5569;font-size:15px;font-weight:700;line-height:18px;margin-bottom:12px}.calculator .calculator-content .flex-content .check-frequency-block .check-frequency-btn-container{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-right:1em}.calculator .calculator-content .flex-content .check-frequency-block .check-frequency-btn-container .billing-btn-wrap{width:100%}.calculator .calculator-content .flex-content .check-frequency-block .check-frequency-btn-container .billing-btn-wrap .billing-btn{min-height:64px;padding:12px 16px;cursor:pointer;text-align:left;width:100%;background-color:#6c757d;border:none;color:#fff;font-size:14px;font-weight:600;-webkit-transition:all .6s;-o-transition:all .6s;transition:all .6s}.calculator .calculator-content .flex-content .check-frequency-block .check-frequency-btn-container .billing-btn-wrap .billing-btn.active{background-color:#414755}.calculator .calculator-content .flex-content .check-frequency-block .check-frequency-btn-container .billing-btn-wrap .billing-btn:active{background-color:#474c52}.calculator .calculator-content .flex-content .check-frequency-block .check-frequency-btn-container .billing-btn-wrap .billing-btn .discount{color:#b0bac2;font-weight:600;font-size:12px;line-height:14px}.calculator .calculator-content .flex-content .check-frequency-block .check-frequency-btn-container .billing-btn-wrap:first-child .billing-btn{-webkit-border-top-left-radius:3px;border-top-left-radius:3px;-webkit-border-bottom-left-radius:3px;border-bottom-left-radius:3px}.calculator .calculator-content .flex-content .check-frequency-block .check-frequency-btn-container .billing-btn-wrap:last-child .billing-btn{-webkit-border-top-right-radius:3px;border-top-right-radius:3px;-webkit-border-bottom-right-radius:3px;border-bottom-right-radius:3px}.calculator .calculator-content .flex-content .keyword-quantity-block{width:100%;margin-bottom:30px}.calculator .calculator-content .flex-content .keyword-quantity-block .block-description{color:#3e5569;font-size:15px;font-weight:700;line-height:18px;margin-bottom:12px}.calculator .calculator-footer{background:#f8f9fa;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;padding:20px 0}.calculator .calculator-footer .info-block{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.calculator .calculator-footer .info-block .your-discount{margin-right:100px}.calculator .calculator-footer .info-block .your-discount .text-left{color:#3e5569;font-size:15px;font-weight:700;line-height:18px}.calculator .calculator-footer .info-block .your-discount .text-right{color:#3e5569;font-size:14px;line-height:16px}.calculator .calculator-footer .info-block .your-total-due .text-left{color:#3e5569;font-size:15px;font-weight:700;line-height:18px}.calculator .calculator-footer .info-block .your-total-due .text-right{color:#3e5569;font-size:14px;line-height:16px}.card-footer{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.card-footer .footer-btn{min-height:52px;font-size:16px;line-height:19px;font-weight:600;padding:16px 32px}.card-footer .info-block{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.card-footer .info-block .your-discount{margin-right:100px}.card-footer .info-block .your-discount .text-left-tt{color:#3e5569;font-size:15px;font-weight:700;line-height:18px}.card-footer .info-block .your-discount .text-right-tt{color:#3e5569;font-size:14px;line-height:16px}.card-footer .info-block .your-total-due .text-left-tt{color:#3e5569;font-size:15px;font-weight:700;line-height:18px}.card-footer .info-block .your-total-due .text-right-tt{color:#3e5569;font-size:14px;line-height:16px}.card-footer .info-block .total-to-pay .text-left-tt{color:#3e5569;font-size:15px;font-weight:700;line-height:18px}.card-footer .info-block .total-to-pay .text-right-tt{color:#3e5569;font-size:14px;line-height:16px}@media screen and (min-width:991px){.calculator .calculator-content .flex-content .billing-plan-block{width:50%}.calculator .calculator-content .flex-content .billing-plan-block .billing-cycle-btn-container{-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap}.calculator .calculator-content .flex-content .billing-plan-block .billing-cycle-btn-container .billing-btn-wrap{width:100%}.calculator .calculator-content .flex-content .check-frequency-block{width:50%}.calculator .calculator-content .flex-content .check-frequency-block .check-frequency-btn-container{-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap}.calculator .calculator-content .flex-content .check-frequency-block .check-frequency-btn-container .billing-btn-wrap{width:100%}.card-footer .info-block .total-to-pay{margin-left:120px}}.bulk-option-sign,.free-package-text{color:#3f3f3f;font-size:16px;line-height:19px;font-weight:600}.range{position:relative;margin:0 auto;height:26px}.range input{width:100%;left:10px;top:0;position:relative;height:0;-webkit-appearance:none;pointer-events:none!important}.range input::-webkit-slider-thumb{-webkit-appearance:none;-webkit-border-radius:50%;border-radius:50%;background-color:#2962ff;-webkit-background-size:50% 50%;background-size:50%;cursor:pointer;border:0!important}.range input::-moz-range-thumb{border-radius:50%;background-color:#2962ff;background-size:50%;cursor:pointer;border:0!important;opacity:0}.range input::-ms-thumb{border-radius:50%;background-color:#2962ff;background-size:50%;cursor:pointer;border:0!important}.range input::-webkit-slider-runnable-track{-webkit-transition:all .6s;-o-transition:all .6s;transition:all .6s;width:100%;height:2px;cursor:pointer;background:#eef5f9}.range input::-moz-range-track{width:100%;height:2px;cursor:pointer;background:#eef5f9}.range input::-ms-track{width:100%;height:2px;cursor:pointer;background:#eef5f9}.range input:focus{background:0 0;outline:0}.range input::-ms-track{width:100%;cursor:pointer;background:0 0;border-color:transparent;color:transparent}.range-labels{padding:0;list-style:none;width:100%;margin:18px auto 18px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}.range-labels span.discount{display:block;position:absolute;font-size:12px;font-weight:700;color:#b0bac2;line-height:14px}.range-labels li{font-weight:700;position:relative;width:100%;text-align:left;color:#3e5569;line-height:16px;font-size:14px;cursor:pointer}.range-labels li::before{position:absolute;top:-40px;right:0;left:8px;content:"";width:22px;height:22px;background:#fff;-webkit-border-radius:50%;border-radius:50%;border:2px solid #e0e1e3}.range-labels .active,.range-labels .selected{color:#2962ff}.range-labels .selected::before{background:#2962ff;border-color:#2962ff}.base-price-250{border:1px solid #2963ff;-webkit-border-radius:4px;border-radius:4px;padding:5px 10px}.base-price-sign{color:#a1aab1;font-size:14px;line-height:16px;margin-bottom:24px}

    </style>
@endsection

@section('title', 'Choose your plan')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="calculator " id="calculator">


                        <div class="calculator-inner">
                            <div class="calculator-header">


                                <h3 class="calculator-header-main">Update Your Plan</h3>
                                <p class="calculator-header-secondary">
                                    Use our pricing calculator below to update your plan to your desired options.
                                </p>

                            </div>


                            <div class="calculator-content">


                                <div class="flex-content">

                                    <div class="billing-plan-block">

                                        <p class="block-description">1. Billing Cycle Frequency</p>

                                        <div class="billing-cycle-btn-container">

                                            <div class="billing-btn-wrap">

                                                <button class="billing-btn  active" data-billing="month" >

                                                    Monthly

                                                    <div data-discount="1" class="discount"></div>
                                                </button>



                                            </div>

                                            <div class="billing-btn-wrap">

                                                <button class="billing-btn" data-billing="quarter">

                                                    3 Months
                                                    <div data-discount="3" class="discount">5% OFF</div>

                                                </button>



                                            </div>

                                            <div class="billing-btn-wrap">

                                                <button class="billing-btn" data-billing="semiannual">
                                                    6 Months
                                                    <div data-discount="6" class="discount">10% OFF</div>

                                                </button>



                                            </div>

                                            <div class="billing-btn-wrap">

                                                <button class="billing-btn " data-billing="annual">
                                                    Annual
                                                    <div data-discount="12" class="discount">20% OFF</div>

                                                </button>

                                            </div>


                                        </div>


                                    </div>


                                    <div class="check-frequency-block">

                                        <p class="block-description">
                                            2. Ranking Update Frequency
                                        </p>

                                        <div class="check-frequency-btn-container">




                                        </div>




                                    </div>


                                    <div class="keyword-quantity-block">

                                        <p class="block-description">
                                            3. Total Keywords Tracked
                                        </p>

                                        <div class="keyword-quantity-input-container">
                                            <p class='base-price-sign'>This is the Base Price. Discounts are available at higher pricing tiers</p>





                                            <div class="range">
                                                <input id="keywords-range" type="range" min="1" max="8" steps="1" value="1">
                                            </div>

                                            <ul class="range-labels">
                                                <li>
                                                    500
                                                    <span class="discount">5% OFF</span>
                                                </li>
                                                <li>
                                                    1000
                                                    <span class="discount"><span class="inner-discount">10</span>% OFF</span>
                                                </li>
                                                <li>
                                                    2500
                                                    <span class="discount">15% OFF</span>
                                                </li>
                                                <li>
                                                    5000

                                                    <span class="discount">19% OFF</span>
                                                </li>
                                                <li>
                                                    10000
                                                    <span class="discount">23% OFF</span>
                                                </li>

                                                <!--                            <li>-->
                                                <!--                                25000-->
                                                <!--                                <span class="discount">27% OFF</span>-->
                                                <!--                            </li>-->
                                                <!--                            <li>-->
                                                <!--                                >25000-->
                                                <!--                                <span class="discount">30% + </span>-->
                                                <!--                            </li>-->
                                            </ul>
                                        </div>




                                    </div>


                                </div>



                            </div>

                        </div>


                    </div>
                </div>

                <div class="card-footer">
                    <div class="info-block">
                        <div class="your-discount">

                            <div class="text-left-tt">Your Discount</div>
                            <div class="text-right-tt"><span class="discount-value">0</span>%</div>

                        </div>
                        <div class="your-total-due">
                            <div class="text-left-tt">Monthly Cost Breakdown</div>
                            <div class="text-right-tt">$<span class="total-due-value">0</span>/<span class="billingcycleindex">month</span></div>
                        </div>


                        <div class="total-to-pay">

                            <div class="base-price" style="display: none"></div>
                            <div class="text-left-tt">Total To Pay</div>
                            <div class="text-right-tt">$<span class="total-to-pay-value">0</span></div>
                        </div>

                    </div>
                    <div class="bulk-option-sign">Need even more keywords tracked? Contact us today for huge discounts on bulk purchases.</div>


                    <div class="free-package-text">
                        Free package no more available
                    </div>

                    <div class="footer-btn-wrap">
                        <button data-tariff="" class="footer-btn  footer-btn-confirm btn waves-effect waves-light btn-primary change-tariff">Confirm</button>

                    </div>


                    <div class="footer-btn-wrap-2">
                        <a href="{{ route('user-contact-form') }}" class="footer-btn btn waves-effect waves-light btn-info"> Contact Us </a>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <form id="form" action="{{ route('user-set-tariff') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="" id="tariff" name="tariff">
        <input type="hidden" value="" id="cycle" name="cycle">
    </form>






@endsection
@section('script-block')

    <script type="text/javascript">



        // $(document).on('click', '.change-tariff', function (e) {
        //     e.preventDefault();
        //     var id = $(this).data('id');
        //     var selector = 'cycle-' + id;
        //     var cycle = $('#'+selector).val();
        //     swal({
        //         title: 'Are you sure?',
        //         text: "You gonna change your current tariff",
        //         type: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#d33',
        //         cancelButtonColor: '#3085d6',
        //         confirmButtonText: 'Change it!'
        //     }).then((result) => {
        //         if (result.value) {
        //             var form = $('#form');
        //             $('#tariff').val(id);
        //             $('#cycle').val(cycle);
        //             form.submit();
        //         }
        //     })
        // });




        // ---------------------------------------------------------TYMUR EDITS

        $('div.range').on('click', function(){
            // console.log("clicked")
            return false;
        });

        $('div.range #track').on('click', function(){
            // console.log("clicked tracked")
            return false;
        });


        //slider.js

        var sheet = document.createElement("style"),
            $rangeInput = $(".range input"),
            prefs = ["webkit-slider-runnable-track", "moz-range-track", "ms-track"];

        document.body.appendChild(sheet);

        var getTrackStyle = function(el) {

            // console.log("el.value: " + el.value)
            var curVal = el.value,
                val = ((curVal - 1) * 12.5) ,
                style = "";

            // Set active label
            $(".range-labels li").removeClass("active selected");

            var curLabel = $(".range-labels").find("li:nth-child(" + curVal + ")");

            curLabel.addClass("active selected");
            curLabel.prevAll().addClass("selected");

            // Change background gradient
            for (var i = 0; i < prefs.length; i++) {
                // style +=
                //     ".range {background: linear-gradient(to right, #797B7E 0%, #797B7E " +
                //     val +
                //     "%, #fff " +
                //     val +
                //     "%, #fff 100%)}";

                style +=
                    ".range input::-" +
                    prefs[i] +
                    "{background: linear-gradient(to right, #2963FF 0%, #2963FF " +
                    val +
                    "%, #DFDFDF " +
                    val +
                    "%, #DFDFDF 100%)}";

            }

            return style;
        };


        // ------------------------- slider.js



        // ------------------------- calculator.js
        var $ = jQuery;

        // A $( document ).ready() block.
        $( document ).ready(function() {


            var apiData;

            var frequency = {
                'Daily': {},
                'Every 3 days' : {},
                'Weekly' : {},

            };

            var keywords= [];
            var uniquekeywords= [];

            var tariffByKeywords = [];


            var user_tariff ;

            var api = {
                "url": "{{ route('user-get-tariffs') }}",
                "method": "GET",
                "timeout": 0,
                // beforeSend: function(xhr) {
                //     xhr.setRequestHeader('Access-Control-Allow-Origin', '*');},
                //
                // "headers": {
                //     'Access-Control-Expose-Headers': 'Access-Control-Allow-Origin'
                // },
            };
            $.ajax(api).done(function (response) {

                // console.log(response)

                let currTariff = response['current_user_tariff']
                user_tariff = response['current_user_tariff'];

                // renderCurrentUserPlan(currTariff);




                apiData = response['tariffs'];

                response = response['tariffs'];

                response.forEach(function(item , index){


                    keywords[index] = item.keywords;

                });




                $.each(keywords, function(i, el){
                    if($.inArray(el, uniquekeywords) === -1) uniquekeywords.push(el);
                });

                uniquekeywords = uniquekeywords.sort(function (a,b) {
                    return a-b;
                });


                uniquekeywords.push("25000+")

                // pull off 250
                // uniquekeywords.shift();






                $('#keywords-range').attr('max', uniquekeywords.length)



                renderCheckFrequencyButtons(response);





                renderKeywordsRangeLabels(uniquekeywords);




                // setTimeout(function() {
                //     checkUpgradeUserTariff(currTariff);
                // }, 1000);


            });

            function checkUpgradeUserTariff(current) {



                $('.billing-cycle-btn-container ').find("[data-discount='"+current.billing_cycle+"']").click()
                $('.check-frequency-btn-container ').find("[data-frequency='"+current.updateFrequency+"']").click()

                let x =[];
                for (let i = 0; i < uniquekeywords.length-1; i++) {


                    x.push(uniquekeywords[i]);

                }



                let index = x.indexOf(current['keywords'])



                if(index != -1){


                    selectPlanByValue(index +2);


                    return index;
                }








                x.push(current['keywords']);


                x.sort(function(a,b){
                    return a - b;
                })



                let index2 = x.indexOf(current['keywords'])  + 1;



                selectPlanByValue(index2)



            }

            function selectPlanByValue(val){





                $('#keywords-range').val(val);
                $('.range-labels li:nth-child('+val+')').click()

                $rangeInput.trigger("input");










            }



            // function renderCurrentUserPlan(currentUserTariff) {
            //
            //
            //     $('.tariff-items').append("<div class='tariff-item'><div>Keywords: </div><div>" + currentUserTariff.keywords+"</div></div>")
            //
            //
            //
            //
            //
            //     if(currentUserTariff.billing_cycle == 1 ){
            //
            //         $('.tariff-items').append("<div class='tariff-item'><div>Biling Plan: </div><div> Monthly</div></div>")
            //     }
            //
            //     if(currentUserTariff.billing_cycle == 3 ){
            //
            //         $('.tariff-items').append("<div class='tariff-item'><div>Biling Plan: </div><div>3 Months</div></div>")
            //     }
            //
            //     if(currentUserTariff.billing_cycle == 6 ){
            //
            //         $('.tariff-items').append("<div class='tariff-item'><div>Biling Plan: </div><div>6 Months</div></div>")
            //     }
            //
            //     if(currentUserTariff.billing_cycle == 12 ){
            //
            //         $('.tariff-items').append("<div class='tariff-item'><div>Biling Plan: </div><div>Annual</div></div>")
            //     }
            //
            //
            //
            //
            //     $('.tariff-items').append("<div class='tariff-item'><div>Price: </div><div>$" + currentUserTariff.recurring_amount+"</div></div>")
            //
            //
            //
            //     if(currentUserTariff.updateFrequency == 1 ){
            //
            //         $('.tariff-items').append("<div class='tariff-item'><div>Ranking Update Frequency:</div><div>Daily</div></div>")
            //     }
            //
            //     if(currentUserTariff.updateFrequency == 3 ){
            //
            //         $('.tariff-items').append("<div class='tariff-item'><div>Ranking Update Frequency:</div><div>Every 3 Days</div></div>")
            //     }
            //
            //     if(currentUserTariff.updateFrequency == 7 ){
            //
            //         $('.tariff-items').append("<div class='tariff-item'><div>Ranking Update Frequency:</div><div>Weekly</div></div>")
            //     }
            //
            //
            // }



            function renderCheckFrequencyButtons(api) {


                let d = 0;
                let t = 0;
                let w = 0;


                api.forEach(function (item, index) {


                    if (item.updateFrequency == 1) {

                        frequency['Daily'][d] = item;

                        d++;

                    }


                    if (item.updateFrequency == 3) {

                        frequency['Every 3 days'][t] = item;


                        t++;
                    }


                    if (item.updateFrequency == 7) {

                        frequency['Weekly'][w] = item;


                        w++;
                    }


                })


                if (frequency) {

                    if (frequency.Daily) {

                        $('.check-frequency-btn-container').append("<div class=\"billing-btn-wrap\">\n" +
                            "\n" +
                            "                    <button data-frequency='1' class=\"billing-btn active frequency daily\">Daily<div data-discount='0' class='discount'></div></button>\n" +
                            "\n" +
                            "\n" +
                            "\n" +
                            "                </div>")
                    }


                    if (frequency["Every 3 days"]) {

                        $('.check-frequency-btn-container').append("           <div class=\"billing-btn-wrap\">\n" +
                            "\n" +
                            "                    <button data-frequency='3' class=\"billing-btn frequency treedays\">Every 3 days<div   data-discount='10' class='discount'>10% OFF</div></button>\n" +
                            "\n" +
                            "\n" +
                            "\n" +
                            "                </div>\n")
                    }

                    if (frequency.Weekly) {

                        $('.check-frequency-btn-container').append("                <div class=\"billing-btn-wrap\">\n" +
                            "\n" +
                            "                    <button data-frequency='7' class=\"billing-btn  frequency week\">Weekly<div data-discount='25' class='discount'>25% OFF</div></button>\n" +
                            "\n" +
                            "\n" +
                            "\n" +
                            "                </div>")

                    }


                    // Frequency onclick listener
                    $('.frequency').on('click', function (event) {


                        // remove active class from all buttons
                        $('.frequency').removeClass('active');

                        // add active class to clicked button
                        $(this).addClass('active');



                        $rangeInput.trigger("input");


                    })


                }
            }



            function renderKeywordsRangeLabels(labels) {

                $('.keyword-quantity-input-container .range-labels').empty();



                let labelDiscount = 5;



                labels.forEach(function (item, index) {


                    let labelSign = labels[index];


                    if (index == 0 ){
                        // $('.keyword-quantity-input-container .range-labels').append("                            <li class=\"active selected\"><span style='position: relative; left: 0px'>"+labelSign+"</span></li>\n");

                        $('.keyword-quantity-input-container .range-labels').append("     <li class=\"active selected\">\n" +
                            "                                <span class='keywords-amount-sign base-price-250'>"+labelSign+"</span>\n" +
                            "                            </li>");
                    } else{

                        $('.keyword-quantity-input-container .range-labels').append("     <li>\n" +
                            "                                <span class='keywords-amount-sign'>"+labelSign+"</span><span class='discount'>"+labelDiscount+"% off</span>\n" +
                            "                            </li>");



                        labelDiscount +=5;
                    }



                })



                $rangeInput.on("input", function() {
                    sheet.textContent = getTrackStyle(this);

                    let k = uniquekeywords[this.value - 1];

                    // console.log("--k : " + k)




                    if(k == '25000+'){
                        $(".footer-btn-wrap").hide();
                        $(".footer-btn-wrap-downgrade").hide();

                        $(".footer-btn-wrap-2").show();


                        $('.card-footer .info-block').hide()
                        $('.bulk-option-sign').show();


                        $('.free-package-text').hide();

                        return
                    } else {
                        $(".footer-btn-wrap-2").hide();

                        $(".footer-btn-wrap").show();


                        $('.card-footer .info-block').show();
                        $('.bulk-option-sign').hide();
                    }


                    // if( k  < user_tariff.keywords){
                    //
                    //     $(".footer-btn-wrap").hide();
                    //     $(".footer-btn-wrap-downgrade").show();
                    //
                    // }else {
                    //
                    //     $(".footer-btn-wrap-downgrade").hide();
                    //     $(".footer-btn-wrap").show();
                    // }







                    let tariffByKeywords= getTariffsByKeywords(k)



                    refreshPrices(tariffByKeywords, getActiveFrequency(), getActiveBillingPlan())
                });


                $rangeInput.trigger("input");



                // Change input value on label click
                $(".range-labels li").on("click", function() {

                    // console.log("li clicked ")
                    var index = $(this).index();

                    $rangeInput.val(index + 1).trigger("input");
                });



            }

            function getTariffsByKeywords(key) {

                tariffByKeywords= [];


                apiData.forEach(function (item, index) {

                    if (item.keywords == key){
                        tariffByKeywords.push( item);

                    }


                })


                return tariffByKeywords;

            }


            function getActiveBillingPlan() {


                return $('.billing-cycle-btn-container .billing-btn-wrap .billing-btn.active').data('billing');

            }

            function getActiveFrequency() {

                return $('.check-frequency-btn-container .billing-btn-wrap .billing-btn.active').data('frequency');

            }

            function getActiveTariffId(){



                return $('.footer-btn-confirm ').data("tariff");
            }

            function refreshPrices(tariffs, frequency = 'Daily', billingcycle='month') {


                var tariffToShow ;
                tariffs = tariffs.sort(function (a, b) {


                    return a.updateFrequency - b.updateFrequency
                })




                let billcycleindex;

                if (billingcycle == 'month'){
                    billcycleindex = 1
                }

                if (billingcycle == 'quarter'){
                    billcycleindex = 3
                }


                if (billingcycle == 'semiannual'){
                    billcycleindex = 6
                }


                if (billingcycle == 'annual'){
                    billcycleindex = 12
                }






                tariffs.forEach(function (item, index) {





                    if(item.updateFrequency == frequency && item.type == "regular"){

                        // $(".footer-btn-confirm").html('Upgrade');

                        tariffToShow = item;
                    }






                })



                if (getActiveKeywordsAmount() == 250 && getActiveFrequency() == 1 && billingcycle == 'month'){




                    $('.base-price-sign').show();



                } else {



                    if($('.base-price-sign') ) {
                        $('.base-price-sign').hide();
                    }
                }



                if(tariffToShow){


                    if (tariffToShow.prices[billingcycle] == -1){

                        $('.frequency.daily').click();
                        return
                        // $('.free-package-text').show();
                        //
                        // $('.info-block').hide();
                        // $('.bulk-option-sign').hide();
                        //
                        //
                        // $(".footer-btn-wrap").hide();
                        // $(".footer-btn-wrap-downgrade").hide();
                        //
                        // $(".footer-btn-wrap-2").show();

                    } else {

                        $('.free-package-text').hide();

                    }

                    $('.base-price').html((getActiveKeywordsAmount()/250) * 15);

                    //tarif id setting
                    $('.footer-btn-confirm').data('tariff' , tariffToShow.tariff_id);




                    //tarif id setted

                    if($('.footer-btn-confirm').hasClass('disable')){
                        $('.footer-btn-confirm').removeClass("disable")
                    }

                    $('.total-due-value').html(tariffToShow.prices[billingcycle]/billcycleindex);

                    $('.total-to-pay-value').html(tariffToShow.prices[billingcycle])


                    calculateDiscount();
                } else {

                    if(!$('.footer-btn-confirm').hasClass('disable')){
                        $('.footer-btn-confirm').addClass("disable")
                    }

                    $('.total-due-value').html("-1");

                }



            }


            function getActiveKeywordsAmount() {



                return $(".keyword-quantity-input-container .range-labels li.active .keywords-amount-sign").html()
            }



            // BILLING PLAN
            $('.billing-cycle-btn-container .billing-btn').on('click', function (event) {
                event.preventDefault()





                // remove active class from all buttons
                $('.billing-cycle-btn-container .billing-btn').removeClass('active');

                // add active class to clicked button
                $(this).addClass('active');



                // $('.billingcycleindex').text(getActiveBillingPlan())



                $rangeInput.trigger("input");

            })



            function calculateDiscount() {




                let payment = getActiveBillingPlan();

                if(payment == 'month'){
                    payment = 1;
                }

                if(payment == 'quarter'){
                    payment = 3;
                }

                if(payment == 'semiannual'){
                    payment = 6;
                }


                if(payment == 'annual'){
                    payment = 12;
                }


                let d =1 - $('.total-to-pay-value').html() /(getBaseValue() *payment);


                $('.discount-value').html(Math.round(d*100));
            }

            function getBaseValue(){
                return $('.base-price').html();
            }





            $('.change-tariff').on('click', function (e) {


                let tariffID = getActiveTariffId();






                let payment = getActiveBillingPlan();

                if(payment == 'month'){
                    payment = 1;
                }

                if(payment == 'quarter'){
                    payment = 3;
                }

                if(payment == 'semiannual'){
                    payment = 6;
                }


                if(payment == 'annual'){
                    payment = 12;
                }




                swal({
                    // title: 'Are you sure?',
                    // text: "You gonna change your current tariff",
                    type: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#7460ee',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Continue',
                    cancelButtonText: 'Back',

                }).then((result) => {
                    if (result.value) {
                        var form = $('#form');
                        $("#form #tariff").val(tariffID);
                        $("#form #cycle").val(payment);
                        form.submit();
                    }
                })






                // alert('#form will be submitted with: #tariff= ' + tariffID + ', #cycle= ' + payment)
                // $("#form").submit();



            })



        });
        // ------------------------- calculator.js




    </script>
@endsection
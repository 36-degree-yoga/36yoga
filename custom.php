<?php include __DIR__ . '/parts/config.php'; ?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<!-- css連結 -->
<link rel="stylesheet" href="./CSS/reset.css">
<link rel="stylesheet" href="./CSS/share.css">
<link rel="stylesheet" href="./CSS/custom.css" />
<!-- 貼上html -->

    <?php include __DIR__ . '/parts/nav.php'; ?>


<div class="custom container-fluid">



    <div class="custom_page d-flex justify-content-center no-wrap position-relative">

        <div class="delete_wrap position-absolute d-flex align-items-end"><img class="" src="svg/delete.svg" alt=""></div>

        <!-- 縮放ICON -->
        <div class="zoom_icon d-flex flex-column align-self-end position-absolute">
            <img src="svg/custom/zoom_in.svg" alt="">
            <img src="svg/custom/zoom_out.svg" alt="">
        </div>


        <!-- 電腦瑜珈墊製作區 -->
        <div class="mat_space d-flex align-items-center justify-content-center col-5">

            <div class="mat_canvas">
                <canvas class="mat_show_wrap m_mat_show_wrap" id="my_mat"></canvas>
            </div>

        </div>

        <iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe>
        <form action="custom_api.php" method="POST" target="nm_iframe">
            <!-- 選項區域 -->
            <div class="custom_optiom_wrap col-5">
                <!-- 大標 -->
                <div class="custom_title_wrap d-flex justify-content-between align-items-center">
                    <div>
                        <h5>製作你的瑜珈墊</h5>
                    </div>
                    <div class="custom_total_price d-flex align-items-center">
                        共計NT.
                        <input class="mtp" id="mat-total-price" name="mat-total-price" type="text" value="2000" readonly>&ensp;元
                    </div>
                </div>



                <!-- 工能按鈕 -->
                <div class="custom_btn d-flex justify-content-between">

                    <!-- 記數器 -->
                    <div class="cart_count_wrap d-flex justify-content-between col align-items-lg-center">
                        <!-- - -->
                        <div class="minus add_cart_icon">
                            <img src="SVG/custom/minus_g_icon.svg" alt="">
                        </div>
                        <!-- 數量 -->
                        <!-- <div class="count">1</div> -->
                        <input id="mat-count" name="mat-count" class="count" type="text" value="1" readonly="readonly">
                        <!-- + -->
                        <div class="plus add_cart_icon">
                            <img src="SVG/custom/plus_g_icon.svg" alt="">
                        </div>
                    </div>

                    <div class="done_btn">
                        <button onclick="saveData();downloadCanvas()" type="submit" class="btn_l" data-toggle="modal" data-target="#save_design">
                            儲存設計
                        </button>
                        <button id="buy_btn" onclick="noSaveData();downloadCanvas()" type="submit" class="btn_f" data-toggle="modal" data-target="#add_cart_btn">加入購物車</button>
                    </div>
                </div>


                <input type="text" name="design_img" id="design_img" value="" style="display:none">
                <input type="text" name="save_data" id="save_data" value="" style="display:none">
                <input type="text" name="weight" id="weight" value="340" style="display:none">



                <!-- 選項框 -->
                <div class="all_option_wrap">
                    <div class="option_container">
                        <!-- 長寬上框 -->
                        <div class="bt2 option_item_title_wrap bt2 d-flex justify-content-between">
                            <div class="item_wrap d-flex align-items-center">
                                <div class="item_title">尺寸選項</div>
                                <!-- 數據 -->
                                <div class="choose d-flex align-items-center">
                                    <input id="mat-h" name="mat-h" type="text" value="173" readonly>
                                    x
                                    <input id="matw" name="matw" type="text" value="61" readonly>
                                    cm
                                </div>
                                <!-- 數據↑ -->
                            </div>

                            <!-- 加錢顯示 -->
                            <div class="add_pay_wrap a-w ml-auto">
                                <div class="add_pay d-flex ml-auto align-items-center">
                                    + $
                                    <input class="push" id="matw-pay" name="matw-pay" type="text" value="" readonly>
                                </div>
                            </div>
                            <!-- 加錢顯示 ↑ -->

                            <div class="fold">
                                <img src="svg/custom/minus_nowrap.svg" alt="">
                            </div>



                        </div>
                        <!-- 下框選項 -->
                        <div class="animation">
                            <div class="option_button d-flex ">
                                <div class="long_btn d-flex flex-column col">
                                    <p>長/cm</p>
                                    <button type="button" class="btn_l">173</button>
                                    <button type="button" class="btn_l">183</button>
                                    <button type="button" class="btn_l">193</button>
                                </div>
                                <div class="width_btn  col">
                                    <p>寬/cm</p>
                                    <button type="button" class="btn_l add-200" value="0">61</button><br>
                                    <button type="button" class="btn_l add-200" value="0">68</button><br>
                                    <button type="button" class="btn_l add-200" value="0">80</button><br>
                                    <button type="button" class="btn_l add-200" value="200">180</button><span>+ $200</span>
                                </div>
                                <div class="how  align-self-end "><a href="#cc" onclick="channel()">如何挑選尺寸</a>

                                    </a></div>

                            </div>
                        </div>
                    </div>

                    <!-- ...... -->

                    <!-- 厚度選項框 -->
                    <div class="option_container">
                        <!-- 上框 -->
                        <div class="option_item_title_wrap d-flex justify-content-between">
                            <div class="item_wrap d-flex align-items-center">
                                <div class="item_title">厚度選項</div>
                                <!-- 數據 -->
                                <div class="choose d-flex align-items-center">
                                    <input id="mat-thickness" name="mat-thickness" type="text" value="3.5" readonly>
                                    mm
                                </div>
                                <!-- 數據↑ -->
                            </div>


                            <div class="fold">
                                <img src="svg/custom/plus_nowrap.svg" alt="">
                            </div>
                        </div>
                        <!-- 下框選項 -->
                        <div class="option_button d-flex">
                            <div class="btn-content thickness d-flex col"><button class="btn_l">3.5</button>
                                <button type="button" class="btn_l">5.0</button>
                                <button type="button" class="btn_l">8.0</button>
                                <p class="align-self-end">mm</p>
                            </div>
                            <div class="how align-self-end"><a href="">
                                    如何挑選厚度
                                </a></div>
                        </div>
                    </div>

                    <!-- ...... -->

                    <!-- 材質框 -->
                    <div class="option_container">
                        <!-- 上框 -->
                        <div class="option_item_title_wrap d-flex justify-content-between">
                            <div class="item_wrap d-flex align-items-center">
                                <div class="item_title">材質選項</div>
                                <!-- 數據 -->
                                <div class="choose d-flex align-items-center">
                                    <input id="mat-texture" name="mat-texture" type="text" value="TPE" readonly>
                                </div>
                                <!-- 數據↑ -->
                            </div>

                            <!-- 加錢顯示 -->
                            <div class="add_pay_wrap a-t ml-auto">
                                <div class="add_pay d-flex ml-auto align-items-center">
                                    + $
                                    <input class="push" id="mat-texture-pay" name="mat-texture-pay" type="text" value="" readonly>
                                </div>
                            </div>
                            <!-- 加錢顯示 ↑ -->

                            <div class="fold">
                                <img src="svg/custom/plus_nowrap.svg" alt="">
                            </div>
                        </div>
                        <!-- 下框選項 -->
                        <div class="option_button d-flex">
                            <div class="btn-content 
                        texture d-flex col"><button type="button" class="btn_l add-150" value="0">TPE</button>
                                <button type="button" class="btn_l add-150" value="150">NR</button>
                                <p class="align-self-center mb-0">+ $150</p>
                            </div>

                            <div class="how  align-self-end "><a href="">
                                    材質差異
                                </a></div>
                        </div>
                    </div>

                    <!-- ...... -->

                    <!-- 顏色框 -->
                    <div class="option_container">
                        <!-- 上框 -->
                        <div class="option_item_title_wrap d-flex justify-content-between">
                            <div class="item_wrap d-flex align-items-center">
                                <div class="item_title">顏色選項</div>
                                <div class="choose color ml-2">
                                    <input id="pick_color" name="pick_color" value="rgb(63, 85, 114)" hidden>
                                </div>


                            </div>


                            <div class="fold">
                                <img src="svg/custom/plus_nowrap.svg" alt="">
                            </div>
                        </div>
                        <!-- 下框選項 -->
                        <div class="animation">
                            <div class="option_button d-flex justify-content-between">
                                <div class="color_wrap d-flex align-items-center">
                                    <button type="button" id="color-1" class="color" value="" style="background-color:rgb(63, 85, 114);"></button>
                                    <button type="button" id="color-2" class="color" value="" style="background-color:rgb(205, 173, 226);"></button>
                                    <button type="button" id="color-3" class="color" value="" style="background-color:rgb(201, 139, 153)"></button>
                                    <button type="button" id="color-4" class="color" value="" style="background-color: rgb(83, 148, 142);"></button>
                                    <button type="button" id="color-5" class="color" value="" style="background-color:rgb(90, 66, 66);"></button>
                                    <button type="button" id="color-6" class="color" value="" style="background-color:rgb(63, 63, 63);"></button>

                                </div>
                                <div class="color_defining d-flex align-items-center -">
                                    <div class="color self_color"></div>
                                    <input class="btn_f" id="picker" type="color" value="" oninput="changeBackground(picker.value)" style="opacity: 0;width:0;">

                                    <button type="button" class="btn_f" id="picker_btn">自定義顏色</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ...... -->

                    <!-- 圖案框 -->
                    <div class="option_container">
                        <!-- 上框 -->
                        <div class="option_item_title_wrap d-flex justify-content-between">
                            <div class="item_wrap d-flex align-items-center">
                                <div class="item_title">圖案選項</div>
                                <!-- <div class="choose img_item ml-2"></div> -->
                            </div>


                            <div class="fold">
                                <img src="svg/custom/plus_nowrap.svg" alt="">
                            </div>
                        </div>
                        <!-- 下框選項 -->
                        <div class="option_button d-flex flex-column">
                            <div class="img_item_wrap d-flex">
                                <div class="img_item">
                                    <img id="imgn" src="img/customize/custom_item_01.png" alt="">
                                </div>
                                <div class="img_item"></div>
                                <div class="img_item"></div>
                                <div class="img_item"></div>
                                <div class="img_item"></div>
                            </div>

                            <div class="img_defining d-flex align-items-center">
                                <div></div>
                                <button type="button" class="btn_f" onclick="field.click()">上傳圖片</button>
                                <p class="mb-0">限 PNG、JPG 圖檔 </p>
                            </div>
                        </div>
                    </div>



                    <!-- ...... -->

                    <!-- 文字框 -->
                    <div class="option_container">
                        <!-- 上框 -->
                        <div class="bb2 option_item_title_wrap d-flex justify-content-between">
                            <div class="item_wrap d-flex align-items-center">
                                <div class="item_title">文字選項</div>
                                <!-- 數據 -->
                                <div class="choose d-flex align-items-center">
                                    <input id="mat-print" name="mat-print" type="text" value="" readonly>
                                </div>
                                <!-- 數據↑ -->
                            </div>
                            <!-- 加錢顯示 -->
                            <div class="add_pay_wrap a-p ml-auto">
                                <div class="add_pay d-flex ml-auto align-items-center">
                                    + $
                                    <input class="push" id="mat-print-pay" name="mat-print-pay" type="text" value="" readonly>
                                </div>
                            </div>
                            <!-- 加錢顯示 ↑ -->

                            <div class="fold">
                                <img src="svg/custom/plus_nowrap.svg" alt="">
                            </div>
                        </div>
                        <!-- 下框選項 -->
                        <div class="btno option_button d-flex flex-column">
                            <div class="print btn-content d-flex align-items-center">
                                <button type="button" class="btn_l add-80" value="0">印刷</button>
                                <button type="button" class="btn_l add-80" value="80">鋼印</button><span>+ $80</span>
                            </div>
                            <div class="add_text d-flex justify-content-between">

                                <input type="text" class="col" id="text_input">
                                <input type="color" id="color_input" value="rgba(0,0,0,0.5)" style="height:35px" />
                                <button type="button" class="btn_f" id="add_text_btn">新增文字</button>
                            </div>
                            <div class="how d-flex  justify-content-end align-self-end">
                                <a href="">
                                    鋼印和印刷差別
                                </a>
                            </div>

                        </div>
                        </all_option_wrap>



                    </div>

                    <!-- ...... -->

                </div>




            </div>
        </form>


    </div>

    <!-- c8c8 c8  -->


    <!-- Modal  儲存設計 -->
    <div class="modal fade" id="save_design" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content modal-size">
                <div class="modal-header .out_header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img class="" src="svg/delete.svg" alt="">
                    </button>
                </div>
                <div class="modal-body out_body">
                    <p>已儲存您的設計</p>
                    <p>可至會員中心 > <a href="">我的最愛 </a> 查看設計</p>
                </div>

            </div>
        </div>
    </div>


    <!-- Modal  加入購物車 -->
    <div class="modal fade" id="add_cart_btn" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content modal-size">
                <div class="modal-header out_header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img class="" src="svg/delete.svg" alt="">
                    </button>
                </div>
                <div class="modal-body out_body">
                    <p class="mt-4">已加入 <a href="">購物車 </a></p>
                </div>

            </div>
        </div>
    </div>



</div>

<!-------- 手機------ -->


<div class="m_custom">



    <div class="m_custom_header d-flex  justify-content-between align-items-center">
        <button class=" btn_f" type="button" data-toggle="modal" data-target="#m_leave">離開</button>
        <!-- <a href=""><img class="" src="SVG/delete.svg" width="30px" alt=""></a> -->
        <div class="">客製瑜珈墊</div>
        <button class=" btn_f" type="button" data-toggle="modal" data-target="#m_next">下一步</button>
    </div>

    <!-- 第二航標題功能 -->
    <div class="custom_title_wrap d-flex justify-content-between align-items-center">

        <div class="custom_total_price d-flex align-items-center">
            共NT.
            <input class="mtp" id="mat-total-price" name="mat-total-price" type="text" value="2000" readonly>&ensp;元
        </div>

        <div class="m_cart_icon_wrap d-flex col-6 justify-content-end p-0">

            <div class="cart_count_wrap d-flex justify-content-between col-9 align-items-center d-flex p-0">
                <!-- - -->
                <div class="minus add_cart_icon">
                    <img src="SVG/custom/minus_g_icon.svg" alt="">
                </div>
                <!-- 數量 -->
                <!-- <div class="count">1</div> -->
                <input id="mat-count" name="mat-count" class="count" type="text" value="1" readonly="readonly">
                <!-- + -->
                <div class="plus add_cart_icon">
                    <img src="SVG/custom/plus_g_icon.svg" alt="">
                </div>
            </div>


            <!-- - -->
            <!-- <div class="minus add_cart_icon mr-4">
          <img src="SVG/custom/minus_g_icon.svg" alt="">
        </div> -->
            <!-- 數量 -->
            <!-- <div class="count mr-4">1</div> -->
            <!-- + -->
            <!-- <div class="plus add_cart_icon">
          <img src="SVG/custom/plus_g_icon.svg" alt="">
        </div> -->
        </div>
    </div>

    <!-- 手機瑜珈墊顯示 -->


    <div class="m_mat_space d-flex  justify-content-center position-relative">

        <div class="m_zoom_icon position-absolute d-flex flex-column align-self-end ">
            <img src="svg/custom/zoom_in.svg" alt="">
            <img src="svg/custom/zoom_out.svg" alt="">
        </div>

        <canvas class="mat_show_wrap" style="width: 122px;height: 319px;"></canvas>


    </div>

    <div class="m_bottom position-fixed" style="bottom: 5px;">
        <!-- 選項種類 -->
        <div class="option_scroll">
            <div class="m_option_item d-flex">
                <div class="m_item_title m_title_check move1">尺寸</div>
                <div class="m_item_title move2">厚度</div>
                <div class="m_item_title move3">材質</div>
                <div class="m_item_title move4">顏色</div>
                <div class="m_item_title move5">圖案</div>
                <div class="m_item_title move7">文字</div>
            </div>
        </div>


        <div class="m_option_button_wrap d-flex flex-nowrap">
            <!-- 尺寸選項 -->
            <div class="m_item_button position-relative">
                <a class="
          question_mark position-absolute" href="howto.html">
                    ?</a>

                <p class="mt-3" style="margin-bottom:0px;">長 | cm &emsp; <span></span></p>
                <div class="m_size_btn m_long_btn d-flex">
                    <button class="btn_f" class="">173</button>
                    <button class="btn_l">183</button>
                    <button class="btn_l">193</button>
                </div>

                <p style="margin-bottom:0px;" class="mt-3">寬 | cm &emsp; <span></span></p>
                <div div class="m_size_btn m_width_btn d-flex">

                    <button class="btn_l add-200" value="0">61</button><br>
                    <button class="btn_l add-200" value="0">68</button><br>
                    <button class="btn_l add-200" value="0">80</button><br>
                    <button class="btn_l add-200" value="200">180</button>
                </div>
            </div>

            <!-- 厚度選項 -->
            <div class="m_item_button d-flex align-items-center position-relative">
                <div class="
  question_mark position-absolute">
                    ?</div>
                <div class="btn-content m_thickness d-flex  align-items-center"><button class="btn_l">3.5</button>
                    <button class="btn_l">5.0</button>
                    <button class="btn_l">8.0</button>
                    <p class="align-self-end">mm</p>
                </div>
            </div>


            <!-- 材質選項 -->
            <div class="m_item_button position-relative">
                <div class="
  question_mark position-absolute">
                    ?</div>
                <p class="mt-4">NR + $150</p>
                <div class="btn-content m_texture d-flex justify-content-start align-items-center h-50 pb-4">
                    <button class="btn_l add-150" value="0">TPE</button>
                    <button class="btn_l add-150" value="150">NR</button>

                </div>
            </div>


            <!-- 顏色 -->
            <div class="m_item_button pt-3">
                <div class="color_wrap d-flex align-items-center justify-content-between  mt-4 mr-3">
                    <!-- <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div> -->
                    <button type="button" class="color" value="" style="background-color:rgb(63, 85, 114);"></button>
                    <button type="button" class="color" value="" style="background-color:rgb(205, 173, 226);"></button>
                    <button type="button" class="color" value="" style="background-color:rgb(201, 139, 153)"></button>
                    <button type="button" class="color" value="" style="background-color: rgb(83, 148, 142);"></button>
                    <button type="button" class="color" value="" style="background-color:rgb(90, 66, 66);"></button>
                    <button type="button" class="color" value="" style="background-color:rgb(63, 63, 63);"></button>
                </div>
                <!-- <div class="color_defining d-flex align-items-center mt-5">
            <div class="color "></div>
            <button class="btn_f ml-3">自定義顏色</button>
          </div> -->

                <div class="color_defining d-flex align-items-center mt-5">
                    <div class="color self_color"></div>
                    <input class="btn_f" id="m_picker" type="color" value="" style="opacity: 0;width: 0;">
                    <!-- oninput="changeBackground(m_picker.value)" -->

                    <button type="button" class="btn_f" id="m_picker_btn">自定義顏色</button>
                </div>
            </div>

            <!-- 圖案 -->
            <div class="m_item_button pb-2">

                <div class="img-scroll-wrap w-100 ">
                    <div class="m_img_item_wrap d-flex mt-4">
                        <div class="img_item"></div>
                        <div class="img_item"></div>
                        <div class="img_item"></div>
                        <div class="img_item"></div>
                        <div class="img_item"></div>
                    </div>
                </div>


                <div class="img_defining d-flex align-items-center">
                    <div></div>
                    <button type="button" class="btn_f" onclick="field.click()">上傳圖片</button>
                    <p class="mb-0">限 PNG、JPG 圖檔 </p>
                </div>
                <!-- <div class="m_img_defining d-flex align-items-center mt-3">
            <button class="btn_f">上傳圖片</button>
            <p>限 PNG、JPG圖檔 </p>
          </div> -->

            </div>

            <!-- 文字 -->
            <div class="m_item_button position-relative">
                <div class="
  question_mark position-absolute">
                    ?</div>

                <div class="m_print btn-content d-flex align-items-center mt-4">
                    <button type="button" class="btn_l w-25 add-80" value="0">印刷</button>
                    <button type="button" class="btn_l w-25 add-80" value="80">鋼印</button><span>+ $80</span>
                </div>
                <input type="text" class="col w-75" id="text_input">
                <div class="add_text d-flex justify-content-start mt-3">
                    <input type="color" id="color_input" value="rgba(0,0,0,0.5)" style="height:35px;width: 50px;" />
                    <button type="button" class="btn_f" id="add_text_btn">新增文字</button>
                </div>

                <!-- <div class="add_text d-flex justify-content-start">
            <input type="text" class=""><button class="btn_f mr-4">新增文字</button>
          </div> -->
                <!-- <div class="color_wrap d-flex align-items-center">
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
  
          </div>
   -->
            </div>


        </div>
    </div>


    <!-- Modal  下一步 -->
    <div class="modal fade" id="m_next" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content m_modal-size">
                <div class="modal-header m_out_header">

                    <button type="button" class="close position-relative" data-dismiss="modal" aria-label="Close">
                        <img class="position-absolute" src="svg/delete.svg" alt="">
                    </button>
                </div>
                <div class="modal-body m_out_body d-flex align-items-center justify-content-center">

                    <div class="m_out_btn  align-items-center justify-content-center ">
                        <button type="button" class="btn_f out_cart">加入購物車</button><br>

                        <button type="button" class="btn_f out_save">儲存設計</button>
                    </div>

                    <div class="m_cart_content ">
                        <p class="">已加入 <br><a href="">購物車 </a></p>
                    </div>
                    <!-- m_out_hide -->

                    <div class="m_save_content ">

                        <div class="m_save_wrap">
                            <p>已儲存您的設計</p>
                            <p>可至會員中心 > <a href="">我的最愛 </a><br> 查看設計</p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <!--  ↑ Modal  下一步 -->

    <!-- Modal  離開 -->
    <div class="modal fade" id="m_leave" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content m_modal-size">
                <div class="modal-header m_out_header">

                    <button type="button" class="close position-relative" data-dismiss="modal" aria-label="Close">
                        <img class="position-absolute" src="svg/delete.svg" alt="">
                    </button>
                </div>
                <div class="modal-body m_out_body d-flex align-items-center justify-content-center">
                    <div class="m_out_btn d-flex flex-column align-items-center justify-content-center">
                        <p class="mb-5">確定要離開<br>客製瑜珈墊頁面嗎?</p>
                        <button type="button" class="btn_f mt-5">確定離開</button>
                        <button type="button" class="btn_f" data-dismiss="modal" aria-label="Close">繼續編輯</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--  ↑ Modal  離開 -->


    <form name="form1" action="custom_upload.php" method="post" enctype="multipart/form-data" style="display: none">
        <input type="file" name="inputpic" accept="image/*" />
        <br />
    </form>





    <!-- 手機板外框底↓-->
</div>

<!-- <script src="lib/jquery-3.5.1.js"></script>
<script src="./bootstrap/js/bootstrap.bundle.js"></script> -->
<?php include __DIR__ . '/parts/script.php'; ?>
<!-- js連結 -->
<script src="lib/fabric.min.js"></script>
<script src="lib/custom.js"></script>
<script>
    $('#buy_btn').on('click', function(event) {
        const item = '客製瑜珈墊';
        const sid = 34;
        const quantity = $('#mat-count').val();
        const img = $('#design_img').val();
        const weight = $('#weight').val();
        const length = $('#mat-h').val();
        const width = $('#matw').val();
        const color = $('#pick_color').val();
        const price = $('#mat-total-price').val();

        const dataObj = {
            item,
            sid,
            quantity,
            img,
            weight,
            length,
            width,
            color,
            price,
            action: 'add'
        };
        console.log(dataObj);
        $.get('handle-custom.php', dataObj, function(data) {
            console.log(data);
            // countCart(data.cart);
        }, 'json');
    });
</script>


<?php include __DIR__ . '/parts/html-end.php'; ?>
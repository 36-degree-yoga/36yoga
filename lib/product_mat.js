
        // 商品 banner 展示

        $('.sm-banner-wrap img').on('click', function () {
            
            let imgSrc = $(this).attr('src');
            $('.banner-wrap img').attr('src', imgSrc);
            // $(this).parent().addClass('border');

            
        })

        // 選擇顏色 >>> 連結的sid頁面 圈圈需存在
        $('.color-selector').on('click', function () {
            $(this).find('.color-element-wrap').css('visibility','visible');
        })

        //選擇尺寸

        // $('.size-list-item').on('click',function(){
        //     const length = $(this).html();

        //     console.log(length);
        //     $(this).parent().siblings('.size-list-btn').text(length);
        // })


        // 點擊了 $('.color-selector li') >> $('.banner-wrap img, .sm-banner-wrap img') 裡的 src 會更換資料庫裡的圖片檔案

        // ↓↓ 商品數量↓↓// 
        let t = $('.amount-number');/*  數量顯示框*/
        $('.button-add').click(function () {
            if (t.val() < 10) {/* 數量最大不能超過 */
                t.val(parseInt(t.val()) + 1);
            } else {
                t.val(10);
            }
        })
        $('.button-minus').click(function () {
            if (t.val() <= 1) {	/*數量最少爲1  */
                t.val(1);
            } else {
                t.val(parseInt(t.val()) - 1);
            }
        })
        // ↑↑ 商品數量↑↑ //

        // like的hover↓↓ 
        // $('.btn_like').on('click', function() {
        //     $(this).find('.like_fill').toggleClass('color');
        // });
        $('.btn_like').hover(function() {
        $(this).find('.like_stroke').addClass('hover')
        },
            function() {
                if ($(this).find('.like_stroke').hasClass('hover')) {
                $(this).find('.like_stroke').removeClass('hover')
                } else {

                 $(this).find('.like_fill').css("fill", "none");
        }
        });

        // like的hover↑↑


        // 折疊 icon 更換 如果 $('#collapseOne').addClass('show'),$('.press-icon img').attr('src') == './SVG/minus.svg' ，否則是  './SVG/plus.svg'

        $('#info-btn-1').on('click', function () {

            $('.press-icon img').attr('src', './SVG/plus.svg');

            const collapseOne = $('#collapseOne').hasClass('show');
            console.log(collapseOne);

            if (collapseOne) {

                $(this).find('.press-icon img').attr('src', './SVG/plus.svg')

            }
            if (!collapseOne) {

                $(this).find('.press-icon img').attr('src', './SVG/minus.svg')

            }
        });

        $('#info-btn-2').on('click', function () {

            $('.press-icon img').attr('src', './SVG/plus.svg');

            const collapseTwo = $('#collapseTwo').hasClass('show');

            if (collapseTwo) {

                $(this).find('.press-icon img').attr('src', './SVG/plus.svg')

            } else {
                $(this).find('.press-icon img').attr('src', './SVG/minus.svg')
            };

        });

        $('#info-btn-3').on('click', function () {

            $('.press-icon img').attr('src', './SVG/plus.svg');

            const collapseThree = $('#collapseThree').hasClass('show');

            if (collapseThree) {

                $(this).find('.press-icon img').attr('src', './SVG/plus.svg')

            } else {
                $(this).find('.press-icon img').attr('src', './SVG/minus.svg')
            };

        });


        //    按鈕：撰寫商品評論
        $('.write-reviews-btn').on('click', function () {
            $('#collapseQuestions').removeClass('show');
        });

        //    按鈕：產品問題詢問
        $('.ask-questions-btn').on('click', function () {
            $('#collapseReviews').removeClass('show');
        });

        //    撰寫商品評論 星星
        $('.star-click li').on('mouseenter', function () {
            $(this).children().attr('src', './SVG/star.svg').parent().prevAll().children().attr('src', './SVG/star.svg');

            $(this).children().attr('src', './SVG/star.svg').parent().nextAll().children().attr('src', './SVG/star_outline_1.svg');
        });

        // $(".star-click").mouseleave(function () {
        //     $(this).find('img').attr('src', './SVG/star_outline_1.svg');

        //     $("li.current").find('img').attr('src', './SVG/star.svg').parent().prevAll().attr('src', './SVG/star_outline_1.svg');
        // });
        // $(".star-click li").click(function () {
        //     $(this).find('img').addClass("current").siblings().find('img').removeClass("current");
        // });


        //     手機版按鈕 桌機版隱藏 


        $('.icon-left').on('click', function () {

            let leftOffset = $('.product-zone-wrap').offset().left;

            if (leftOffset == -568.75) {
                console.log("left", leftOffset);
                $('.product-zone-wrap').css('left', '+=300');
                $('.icon-left').css('opacity', '1').css('transition', '.5s');
                $('.icon-right').css('opacity', '1').css('transition', '.5s');
            }

            if (leftOffset == -268.75) {
                console.log("left", leftOffset);
                $('.product-zone-wrap').css('left', '+=300');
                $('.icon-left').css('opacity', '.2').css('transition', '.5s');
                $('.icon-right').css('opacity', '1').css('transition', '.5s');
            }

        });

        $('.icon-right').on('click', function () {

            let rightOffset = $('.product-zone-wrap').offset().left;

            if (rightOffset == 31.25) {
                console.log("right", rightOffset);
                $('.product-zone-wrap').css('left', '-=300');
                $('.icon-left').css('opacity', '1').css('transition', '.5s');
                $('.icon-right').css('opacity', '1').css('transition', '.5s');
            }
            if (rightOffset == -268.75) {
                console.log("right", rightOffset);
                $('.product-zone-wrap').css('left', '-=300');
                $('.icon-left').css('opacity', '1').css('transition', '.5s');
                $('.icon-right').css('opacity', '.2').css('transition', '.5s');
            }

        });


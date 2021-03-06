<?php
$date = strtotime(time());
$date = strtotime("+7 day", $date);
$date = date('y-m-d-h-i-s');
?>
<div class="uk-section uk-background-01 block01 uk-light" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: .animation; delay: 300; repeat: false">
    <div class="uk-container uk-container-small">
        <h2 class="block01__title mb-25 mb-30-m uk-h2 uk-text-center uk-text-uppercase"><span>Thời hạn xét tuyển</span> 25/03/2021</h2>
        <div class="mb-24 uk-flex-center" uk-grid>
            <div class="uk-width-3-5@m">
                <div class="uk-background-02 uk-padding-small block01__boxCountdown uk-border-rounded">
                    <div class="uk-grid-small uk-child-width-auto uk-flex-center" uk-grid uk-countdown="date: 2021-03-25T03:03:19+00:00">
                        <div>
                            <div class="uk-countdown-number uk-countdown-days"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Days</div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-hours"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Hours</div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-minutes"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Minutes</div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-seconds"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Seconds</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form class="uk-grid-small mb-20 mb-36-m" uk-grid>
            <div class="uk-width-1-3@s">
                <input class="uk-input uk-border-pill block01__input" type="text" placeholder="Họ và tên*">
            </div>
            <div class="uk-width-1-3@s">
                <input class="uk-input uk-border-pill block01__input" type="text" placeholder="Số điện thoại*">
            </div>
            <div class="uk-width-1-3@s">
                <input class="uk-input uk-border-pill block01__input" type="text" placeholder="Trường THPT / Đại Học ">
            </div>
            <div class="uk-width-1-3@s">
                <input class="uk-input uk-border-pill block01__input" type="text" placeholder="Ngày sinh">
            </div>
            <div class="uk-width-1-3@s">
                <input class="uk-input uk-border-pill block01__input" type="text" placeholder="Email">
            </div>
            <div class="uk-width-1-3@s">
                <input class="uk-input uk-border-pill block01__input" type="text" placeholder="Tỉnh / Thành phố">
            </div>
            <div class="uk-width-1-1">
                <input class="uk-input uk-border-pill block01__input" type="text" placeholder="Link Facebook của bạn">
            </div>
        </form>
        <div class="uk-child-width-1-1 uk-grid-match uk-grid-20 mb-20 mb-40-m" uk-grid>
            <div>
                <div class="uk-grid-match uk-flex-middle uk-grid-small uk-grid-30-m" uk-grid>
                    <div class="uk-width-auto@s">
                        <span class="block01__lablel">Đăng ký* </span>
                    </div>
                    <div class="uk-width-expand">
                        <div class="uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-radio" type="radio" name="radio2-dky" checked> <span class="block01__txtRadio">Tư vấn</span></label>
                            <label><input class="uk-radio" type="radio" name="radio2-dky"> <span class="block01__txtRadio">Xét tuyển</span></label>
                            <label><input class="uk-radio" type="radio" name="radio2-dky"> <span class="block01__txtRadio">Thi học bổng</span></label>
                            <label><input class="uk-radio" type="radio" name="radio2-dky"> <span class="block01__txtRadio">Xét học bổng</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-grid-match uk-flex-middle uk-grid-small uk-grid-30-m" uk-grid>
                    <div class="uk-width-auto@s">
                        <span class="block01__lablel">Nơi đăng ký sơ tuyển:</span>
                    </div>
                    <div class="uk-width-expand">
                        <div class="uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-radio" type="radio" name="radio2" checked> <span class="block01__txtRadio">Hà Nội</span></label>
                            <label><input class="uk-radio" type="radio" name="radio2"> <span class="block01__txtRadio">Tp.HCM</span></label>
                            <label><input class="uk-radio" type="radio" name="radio2"> <span class="block01__txtRadio">Cần Thơ</span></label>
                            <label><input class="uk-radio" type="radio" name="radio2"> <span class="block01__txtRadio">Đà Nẵng</span></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-text-center">
            <button type="button" class="uk-button animation block01__btnSubmit uk-button-secondary uk-border-pill">ĐĂNG KÝ</button>
        </div>
    </div>
</div>
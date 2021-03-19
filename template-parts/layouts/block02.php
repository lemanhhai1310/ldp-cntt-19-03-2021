<div class="uk-section block02">
    <div class="uk-container mb-30 mb-50-s mb-101-m">
        <h2 class="block01__title mb-25 mb-36-m uk-h2 uk-text-center uk-text-uppercase">THỦ TỤC ĐĂNG KÝ XÉT TUYỂN</h2>
        <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-10 uk-grid-14-m uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-small; target: .uk-card; delay: 300; repeat: false">
            <?php
            $data = array(
                array(
                    'src' => 'images/block02/img1.png',
                    'title' => 'Kiểm tra điểm ',
                    'desc' => 'Xem xếp hạng điểm THPT tại http://schoolrank.fpt.edu.vn',
                ),
                array(
                    'src' => 'images/block02/img2.png',
                    'title' => 'Chuẩn bị hồ sơ',
                    'desc' => 'Chụp ảnh hoặc scan học bạ, ảnh 3x4, ảnh CMND',
                ),
                array(
                    'src' => 'images/block02/img3.png',
                    'title' => 'Nộp hồ sơ',
                    'desc' => 'Gửi hồ sơ online, nộp lệ phí',
                ),
                array(
                    'src' => 'images/block02/img4.png',
                    'title' => 'Nhận kết qủa',
                    'desc' => 'Biết kết quả sớm sau khi nộp',
                ),
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="uk-card uk-card-default block02__boxStep uk-overflow-hidden" uk-scrollspy-class="<?= ($k % 2 !=0) ? 'uk-animation-slide-top-small' : '' ?>">
                    <div class="uk-position-relative">
                        <div class="uk-cover-container">
                            <img src="<?= $v['src'] ?>" alt="" uk-cover>
                            <canvas width="810" height="522"></canvas>
                        </div>
                        <a href="" class="block02__boxStep__btnLabel uk-button-small uk-button uk-button-secondary uk-border-pill uk-position-bottom-center">
                            <span class="block02__boxStep__txt">BƯỚC <?= $k+1 ?></span>
                        </a>
                    </div>
                    <div class="uk-card-body uk-padding-small uk-text-center block02__boxStep__body">
                        <h5 class="uk-h5 uk-margin-remove block02__boxStep__title uk-text-uppercase"><?= $v['title'] ?></h5>
                        <div class="block02__boxStep__desc"><?= $v['desc'] ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="uk-container uk-container-large">
        <h2 class="block01__title mb-25 mb-40-m uk-h2 uk-text-center uk-text-uppercase">Các hoạt động sinh viên Quản Trị Kinh Doanh</h2>
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-flex-center uk-grid-collapse" uk-grid="masonry: false;parallax: 0;" uk-scrollspy="cls: uk-animation-scale-up; target: .animation; delay: 150; repeat: false">
            <div>
                <div class="uk-text-center animation">
                    <img src="images/block02/group1.png" alt="">
                </div>
            </div>
            <div>
                <div class="uk-text-center animation">
                    <img src="images/block02/group2.png" alt="">
                </div>
            </div>
            <div>
                <div class="uk-text-center animation">
                    <img src="images/block02/group3.png" alt="">
                </div>
            </div>
            <div class="uk-width-1-2 uk-width-auto@s">
                <div class="uk-text-center animation">
                    <img src="images/block02/group4.png" alt="">
                </div>
            </div>
            <div class="uk-width-auto">
                <div class="uk-text-center animation">
                    <img src="images/block02/group5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
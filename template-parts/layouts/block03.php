<div class="uk-section uk-background-02 uk-light">
    <div class="uk-container">
        <h2 class="block01__title mb-25 mb-51-m uk-h2 uk-text-center uk-text-uppercase">SINH VIÊN, PHỤ HUYNH, NHÀ TUYỂN DỤNG NÓI GÌ?</h2>
        <div uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-slider-container-offset uk-light">
                    <ul class="uk-slider-items uk-grid-small uk-grid-30-m" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'images/lemanhhai_anhthe.jpg',
                            ),
                            array(
                                'src' => 'https://scontent-hkg4-1.xx.fbcdn.net/v/t1.0-9/1383484_621750101181164_1849982759_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=G_gtaqbW648AX_eTTn1&_nc_ht=scontent-hkg4-1.xx&oh=c45c141e567978bc766ae5cc0bf74a8f&oe=60776822',
                            ),
                            array(
                                'src' => 'https://scontent-hkg4-2.xx.fbcdn.net/v/t1.0-9/160569993_797098674558617_1891838081866338393_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=qxHYtAStbWsAX8LjAJ7&_nc_ht=scontent-hkg4-2.xx&oh=39540cab56419a8a8e64117c3f339e62&oe=6079C79A',
                            ),
                            array(
                                'src' => 'images/lemanhhai_anhthe.jpg',
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                        <li class="uk-width-4-5 uk-width-1-2@s uk-width-1-3@m">
                            <div class="uk-text-center uk-position-relative uk-position-z-index">
                                <div class="uk-cover-container uk-border-circle uk-display-inline-block">
                                    <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                    <canvas width="135" height="135"></canvas>
                                </div>
                            </div>
                            <div class="uk-card block03__card1 uk-card-default uk-card-body">
                                <p class="block03__card1__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis elit eu libero volutpat aliquet. Aliquam mattis felis non justo efficitur suscipit. Suspendisse molestie, enim ut consequat gravida, nulla tortor pharetra leo, a dictum velit lacus vitae turpis. Etiam posuere eu risus at sagittis. Aliquam erat volutpat. Fusce consectetur diam nulla, eget tincidunt nisl finibus non. Mauris nibh odio, vulputate vitae luctus eu, pharetra non ipsum.</p>
                                <div class="block03__card1__title">
                                    <div>Cô Lê Nga - Phụ huynh sinh viên Trần Lê Lâm Anh</div>
                                    <div>K11 ngành Quản trị kinh doanh</div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
    </div>
</div>
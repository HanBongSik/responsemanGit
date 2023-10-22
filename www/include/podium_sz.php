<div class="g podiums podium-sz">
    <div class="r podiums-header">
        <div class="c">
            <div class="podium-top podium-top-sz">
                <div class="podium-top-bg award-on"></div>
                <div class="award-list award-on">
                    <ol class="award-ol">
                        <li class="gold">
                            <img class="profile-img" src="/assets/img/profile-01.jpg" alt="">
                            <div class="award-nick"><span>bamvhm</span></div>
                            <img class="sz-img" src="/assets/img/temp_sz.png" alt="">
                        </li>
                        <li class="silver">
                            <img class="profile-img" src="/assets/img/profile-02.jpg" alt="">
                            <div class="award-nick"><span>leewoonseong</span></div>
                            <img class="sz-img" src="/assets/img/temp_sz.png" alt="">
                        </li>
                        <li class="bronze">
                            <img class="profile-img" src="/assets/img/profile-03.jpg" alt="">
                            <div class="award-nick"><span>syung.kim_</span></div>
                            <img class="sz-img" src="/assets/img/temp_sz.png" alt="">
                        </li>
                    </ol>
                </div>
                <div class="lights light-ani-ing"></div>
                <canvas id="confetti1" class="confetti"></canvas>
            </div>
        </div>
    </div>

    <div class="r podiums-body">
        <div class="c">

            <div class="tab tab-style-01 center">
                <div class="tab__list fixed">
                    <ul>
                        <li class="active"><a href="#tabPeople" data-target="#tabPeople2"><div class="tab-name">전체</div></a></li>
                        <li><a href="#tabSz" data-target="#tabFollow2"><div class="tab-name">팔로우</div></a></li>
                    </ul>
                </div>
                <div class="panels">
                    <div id="tabPeople2" class="panel active" tabindex="0">
                        <div class="g podiums-search">
                            <div class="r">
                                <div class="c c-full-width">
                                    <div class="search gap">
                                        <div class="g search-input">
                                            <div class="r gap-hor-sm">
                                                <div class="c">
                                        <span class="forms forms-full">
                                            <input type="text" placeholder="검색어를 입력하세요" value="" id="inputKeyward" class="INPUT-RESET">
                                            <button class="INPUT-RESET-BTN" data-target="#inputKeyward">×</button>
                                        </span>
                                                </div>
                                                <div class="c c-inner-width">
                                                    <div class="search-btn">
                                                        <button type="button" class="button secondary large block">검색</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="g">
                                            <div class="r gap-hor-sm">
                                                <div class="c">
                                                    <?php include("$path/include/include_temp/inc_user_list_03.php"); ?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="tabFollow2" class="panel" tabindex="0">
                        <div class="g podiums-search">
                            <div class="r">
                                <div class="c c-full-width">

                                    <div class="search gap">
                                        <div class="g search-input">
                                            <div class="r gap-hor-sm">
                                                <div class="c">
                                        <span class="forms forms-full">
                                            <input type="text" placeholder="검색어를 입력하세요" value="" id="inputKeyward" class="INPUT-RESET">
                                            <button class="INPUT-RESET-BTN" data-target="#inputKeyward">×</button>
                                        </span>
                                                </div>
                                                <div class="c c-inner-width">
                                                    <div class="search-btn">
                                                        <button type="button" class="button secondary large block">검색</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="g">
                                            <div class="r gap-hor-sm">
                                                <div class="c">
                                                    <?php include("$path/include/include_temp/inc_user_list_04.php"); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

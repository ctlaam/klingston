<div class="col-lg-4 col-12 ">
    <div class="home-section" style="margin-bottom:20px">
        <div class="header">
            <h3 class="title m-0 ">
                <a href="#" id="video-more">
                    <span class="color"><i class="fa fa-music" aria-hidden="true"></i> alle Genres
                    </span>
                </a>
            </h3>
        </div>
    </div>
    <ul class="nav nav-tabs m-0" id="myTab" role="tablist">
        <li style="width:33.33%;text-align:center" class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php $current_week = date_i18n('W');
                                                                                                                                            echo 'Woche' . $current_week; ?></a>
        </li>
        <li style="width:33.33%;text-align:center" class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php $current_month = date_i18n('m');
                                                                                                                                            echo 'Monat ' . $current_month; ?></a>
        </li>
        <li style="width:33.33%;text-align:center" class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><?php $current_month = date_i18n('Y');
                                                                                                                                            echo 'Jahr ' . $current_month; ?></a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <ul class="nav widget-song-list">
                <li class="media one">
                    <div class="media-left mr-2">
                        <span class="ratings">
                            <span class="num order-1">1</span>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="global-name"><a class="link-song-name" href="https://klingeltone.mobi/klingeltone/sweet-home-alabama-original-lynyrd-skynyrd.html" title="Sweet home Alabama (Original) –  Lynyrd Skynyrd">Sweet home Alabama (Original) – Lynyrd Skynyrd</a> </h4>
                        <p class="global-author"><i class="fa fa-download"></i> 4135 &nbsp;&nbsp; <i class="fa fa-eye"></i> 79141 </p>
                    </div>
                </li>
                <li class="media one">
                    <div class="media-left">
                        <span class="ratings">
                            <span class="num order-2">2</span>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="global-name"><a class="link-song-name" href="https://klingeltone.mobi/klingeltone/acdc-highway-to-hell.html" title="ACDC Highway To Hell">ACDC Highway To Hell</a> </h4>
                        <p class="global-author"><i class="fa fa-download"></i> 4089 &nbsp;&nbsp; <i class="fa fa-eye"></i> 56274 </p>
                    </div>
                </li>
                <li class="media one">
                    <div class="media-left">
                        <span class="ratings">
                            <span class="num order-3">3</span>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="global-name"><a class="link-song-name" href="https://klingeltone.mobi/klingeltone/regenbogenfarben-kerstin-ott.html" title="Regenbogenfarben – Kerstin Ott">Regenbogenfarben – Kerstin Ott</a> </h4>
                        <p class="global-author"><i class="fa fa-download"></i> 2478 &nbsp;&nbsp; <i class="fa fa-eye"></i> 47884 </p>
                    </div>
                </li>
                <li class="media one">
                    <div class="media-left">
                        <span class="ratings">
                            <span class="num order-4">4</span>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="global-name"><a class="link-song-name" href="https://klingeltone.mobi/klingeltone/james-bond-classic.html" title="James Bond Classic">James Bond Classic</a> </h4>
                        <p class="global-author"><i class="fa fa-download"></i> 2160 &nbsp;&nbsp; <i class="fa fa-eye"></i> 66613 </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
    </div>
</div>
<?php

require_once dirname(__DIR__) . "/src/vakinha_crawler.php";

$apoiadores = 62;

$vakinha_fsa = new VakinhaCrawler("https://www.vakinha.com.br/vaquinha/protetor-facial-para-profissionais-de-saude-contra-o-covid-19-menilde-araujo-silva-biao");
$results = $vakinha_fsa->scrap()->toArray();
$arrecadado = $results["arrecadado"];
$meta = $results["meta"];
$pct = $results["progresso"];

?>
<section class="give-area skill-area">
  <div class="container-fluid">
    <div class="row give-static-wrap">
      <div class="col-lg-3">
        <div class="give-title-box section-heading" style="height:100%">
          <h2 class="give__title section__title text__white" style="font-size: 36px">Doações realizadas<br> até hoje.</h2>
        </div>
      </div><!-- end col-lg-3 -->
      <div class="col-lg-9">
        <div class="give-progress-box">
          <div class="skill-item">
            <div class="skills">
              <div class="skill">
                <h2 class="skill__title">R$ <?php echo number_format($arrecadado, 2, ',', '.'); ?></h2>
                <span><?php echo round($pct); ?>%</span>
                <div class="progress_bg">
                  <div class="progress_bar" style="width: <?php echo round($pct); ?>%"></div>
                </div>
                <div class="skill-meta">
                  <ul>
                    <li>de R$ <?php echo number_format($meta, 2, ',', '.'); ?></li>
                    <!-- <li><?php echo $apoiadores; ?> apoiadores</li> -->
                  </ul>
                </div>
              </div>
            </div><!-- end skills-->
          </div><!-- end skill-item -->
        </div>
      </div><!-- end col-lg-9 -->
    </div><!-- end row -->
  </div><!-- end container -->
</section><!-- end give-area -->
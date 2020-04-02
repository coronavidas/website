<?php

require_once __DIR__ . "/src/vakinha_crawler.php";

$vakinha_fsa = new VakinhaCrawler("https://www.vakinha.com.br/vaquinha/protetor-facial-para-profissionais-de-saude-contra-o-covid-19-menilde-araujo-silva-biao");
$data = $vakinha_fsa->scrap();

header('Content-Type: application/json');
echo $data->toJson();

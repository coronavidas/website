<?php

final class VakinhaCrawler
{

  private $url;
  private $results = [];

  public function __construct($url)
  {
    $this->url = $url;
  }

  public function scrap()
  {
    $dom = new DOMDocument();
    @$dom->loadHtml(file_get_contents($this->url));
    $finder = new DomXPath($dom);
    $classname_VALOR_ARRECADADO = "sc-htpNat fKphHb";
    $VALOR_ARRECADADO = $finder->query('/html/body/div[1]/div[2]/div[2]/div[2]/div/div/div/div[3]/div/span');
    $META = $finder->query('/html/body/div[1]/div[2]/div[2]/div[2]/div/div/div/div[3]/div/div[2]/span');

    $arrecadado = $VALOR_ARRECADADO[0]->nodeValue;
    $arrecadado = explode('R$', $arrecadado);
    $arrecadado = (float) str_replace('.', '', $arrecadado[1]);

    $meta = $META[0]->nodeValue;
    $meta = explode('R$', $meta);
    $meta = (float) str_replace('.', '', $meta[1]);

    $pct = round(($arrecadado / $meta) * 100);

    $this->results = [
      "arrecadado" => $arrecadado,
      "meta" => $meta,
      "progresso" => $pct,
    ];

    return $this;
  }

  public function toArray()
  {
    return $this->results;
  }

  public function toJson()
  {
    return json_encode($this->results);
  }
}

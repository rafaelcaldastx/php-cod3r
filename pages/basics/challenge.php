<div class="titulo">Desafio</div>

<?php
function soma($a, $b)
{
  return $a + $b;
}
?>
<ul>
  <li>1 + 1 = <?= soma(1, 1) ?></li>
  <li>4 + 4 = <?= soma(4, 4) ?></li>
  <li>8 + 8 = <?= soma(8, 8) ?></li>
</ul>

<!-- 

Na solução original ele responde usando string, soma usando echo e soma normal
preferi usar a função em todas as opções pra não ficar tão no basicão do basicão

-->
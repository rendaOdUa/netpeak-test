<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>
<table style="text-align: center; width: 100%;">
<tr>Сортировка - <?php echo $sort->link('name') . ' | ' . $sort->link('surname');?></tr>
<?php foreach ($autors as $autor): ?>
        <tr style="text-align: center; width: 100%;">
                <td style="box-shadow: 0 0 10px rgba(0,0,0,0.5); margin:10px; text-align: center; width: 100%;">
                	<h3><a href=<?= "?r=posts%2Fposts-autor&autorId=".$autor->id ?>><?= $autor->name ?> <?= $autor->surname ?></a></h3>
                </td>
        </tr>
        <tr><td style="height: 10px;"></td></tr>
<?php endforeach; ?>
</table>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
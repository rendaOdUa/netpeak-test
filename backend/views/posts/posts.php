<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>
<table>
<?php foreach ($autors as $autor): ?>
    <?php $autors_arr[$autor->id] = $autor->name." ".$autor->surname; ?>
<?php endforeach; ?>
<?php foreach ($posts as $post): ?>
        <tr>
        	<td colspan="3" style="text-align: center;">
        		<h3><?= $post->name ?></h3>
        	</td>
        </tr>
        <tr>
        	<td style="text-align: center; padding: 10px">
        	</td>
        	<td style="box-shadow: 0 0 10px rgba(0,0,0,0.5); padding:10px; text-align: center; width: 100%;">
        		<?= $post->description ?>
        	</td>
        	<td style="padding: 10px;">
        		<?= $autors_arr[$post->autor] ?>
		</td>
        </tr>
        <tr></tr>
<?php endforeach; ?>
</table>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
<div class="row-fluid">
	<div class="span9 ">
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_shoplist',
			'template'=>'{summary}<div class="row-fluid">{items}</div><div class="pager">{pager}</div>',
			'itemsCssClass'=>'thumbnails',
			'summaryCssClass'=>'row-fluid',//定义summary的div容器的class
			'summaryText'=>'<h5>在佛山市/南海区/某商业圈共找到{count}家外卖餐馆(面包屑)当前页显示第{start}-{end}家</h5>',
		)); ?>
	</div>
	<div class="span3"></div>
</div>

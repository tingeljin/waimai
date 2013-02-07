<div class="row">
	<div class="span9_5 ">
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_shoplist',
			'template'=>'{summary}<div class="row row-margin-left-0">{items}</div><div class="pager">{pager}</div>',
			'itemsCssClass'=>'thumbnails',
			'itemsTagName'=>'ul',
			'summaryCssClass'=>'row ybxj color-6EC5B8 row-margin-left-0',//定义summary的div容器的class
			'summaryText'=>'<h5>在佛山市/南海区/某商业圈共找到{count}家外卖餐厅(面包屑)当前页显示第{start}-{end}家</h5>',
		)); ?>
	</div>
	<div class="span2_5"></div>
</div>
